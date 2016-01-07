<?php
/**
 * Created by GreenStudio GCS Dev Team.
 * File: IndexController.class.php
 * User: Timothy Zhang
 * Date: 14-2-6
 * Time: 上午10:07
 */

namespace Install\Controller;

use Common\Util\InstallFile;
use Think\Controller;


/**
 * Class IndexController
 * @package Install\Controller
 */
class IndexController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        if (defined('SAE_TMP_PATH')) {
            $this->error("SAE平台不需要安装程序");
        }
        $lockFile = WEB_ROOT . 'Data/Install.lock';

        if (InstallFile::file_exists($lockFile)) {
            $this->error(" 你已经安装过GreenCMS，如果想重新安装，
            请先删除站点Data目录下的 install.lock 文件，然后再安装。");
        }


    }


    /**
     *
     */
    public function index()
    {

        $this->redirect('Install/Index/step1');
    }

    /**
     *
     */
    public function step1()
    {
        $this->assign('version', GreenCMS_Version);
        $this->assign('build', GreenCMS_Build);

        $this->display();
    }

    /**
     *
     */
    public function step2()
    {
        $sp_gd = gdversion();

        $this->assign('sp_name', $_SERVER['SERVER_NAME']);
        $this->assign('os_name', PHP_OS);
        $this->assign('server_software', $_SERVER['SERVER_SOFTWARE']);
        $this->assign('php_version', PHP_VERSION);
        $this->assign('web_root', WEB_ROOT);
        $this->assign('sp_safe_mode', (ini_get('safe_mode') ? '<font color=red>[×]On</font>' : '<font color=green>[√]Off</font>'));
        $this->assign('sp_gd', ($sp_gd > 0 ? '<font color=green>[√]On</font>' : '<font color=red>[×]Off</font>'));
        $this->assign('sp_mysql', (function_exists('mysql_connect') ? '<font color=green>[√]On</font>' : '<font color=red>[×]Off</font>'));

        $test_dirs = array(
            '/',
            '/Core/*',
            '/Public/*',
            '/Application/*',
            '/Data/*',
            '/Upload/*',
            '/Extend/*',
        );

        $this->assign('sp_testdirs', $test_dirs);

        $this->display();
    }


    /**
     *
     */
    public function step3()
    {

        $basepath = __ROOT__;
        $cfg_cmspath = $basepath;


        if (!empty($_SERVER['HTTP_HOST'])) {
            $baseurl = 'http://' . $_SERVER['HTTP_HOST'] . $basepath;
            $cfg_basehost = 'http://' . $_SERVER['HTTP_HOST'];
        } else {
            $baseurl = "http://" . $_SERVER['SERVER_NAME'] . $basepath;
            $cfg_basehost = 'http://' . $_SERVER['SERVER_NAME'];
        }

        $this->assign('cfg_cmspath', $cfg_cmspath);
        $this->assign('baseurl', $baseurl);
        $this->assign('cfg_basehost', $cfg_basehost);
        $this->display();

    }

    /**
     *
     */
    public function step4()
    {
        $time = date("Y-m-d H:m:s");

        $db_host = $_POST["db_host"];
        $db_port = $_POST["db_port"];

        $db_user = $_POST ["db_user"];
        $db_password = $_POST["db_password"];

        $db_name = $_POST["db_name"];
        $db_prefix = $_POST["db_prefix"];


        if ($_POST['admin_password'] != $_POST['admin_password2'] || trim($_POST['admin_password']) == '' || trim($_POST['admin_password2']) == '')
            $this->error("两次输入的密码不一致，请重新设定！，或者密码为空");
        else {
            $admin_user = $_POST['admin_user'];
            $admin_password = encrypt($_POST['admin_password']);
            $admin_email = $_POST['admin_email'];
            $user_session = encrypt($admin_user . $admin_password . time());
        }

        $title = $_POST['cfg_title'];
        $site_url = $_POST['cfg_basehost'] . $_POST['cfg_cmspath'];


        if (!test_db_connect($db_host . ":" . $db_port, $db_user, $db_password))
            $this->error("数据库服务器或登录密码无效，\n\n无法连接数据库，请重新设定！");

        $conn = mysql_connect($db_host . ":" . $db_port, $db_user, $db_password);


        mysql_query("CREATE DATABASE IF NOT EXISTS `" . $db_name . "`;", $conn);

        if (!mysql_select_db($db_name)) $this->error("选择数据库失败，可能是你没权限，请预先创建一个数据库！");

        mysql_query("set character set 'utf8'");
        mysql_query("set names 'utf8'");


        $file = WEB_ROOT . 'Install/Data/db_config_sample.php';

        if (!InstallFile::file_exists($file))
            $this->error('Install/Data/db_config_sample.php文件不存在,请检查');
        $content = InstallFile::readFile($file);

        $content = str_replace("~dbhost~", $db_host, $content);
        $content = str_replace("~dbport~", $db_port, $content);
        $content = str_replace("~dbname~", $db_name, $content);
        $content = str_replace("~dbuser~", $db_user, $content);
        $content = str_replace("~dbpwd~", $db_password, $content);
        $content = str_replace("~dbprefix~", $db_prefix, $content);

        if (!InstallFile::writeFile(WEB_ROOT . 'db_config.php', $content, 'w+')) {
            $this->error("数据库配置文件写入失败，请您手动根据Install/Data/db_config_sample.php文件在根目录创建文件");
        }


        $file = WEB_ROOT . 'Install/Data/const_config_sample.php.bak';

        if (!InstallFile::file_exists($file))
            $this->error('Install/Data/const_config_sample.php文件不存在,请检查');
        $content = InstallFile::readFile($file);

        $content = str_replace("xxxxxxxxxx", substr(md5(time()), 0, 10), $content);

        if (!InstallFile::writeFile(WEB_ROOT . 'const_config.php', $content, 'w+')) {
            $this->error("常量配置文件写入失败");
        }


        InstallFile::makeDir(WEB_ROOT . 'Data/Cache');

        $sql_empty = InstallFile::readFile(WEB_ROOT . 'Install/Data/greencms_empty.sql');
        $sql_query = str_replace('{$db_prefix}', $db_prefix, $sql_empty);
        $file = WEB_ROOT . 'Data/Cache/greencms_sample.sql';

        InstallFile::writeFile($file, $sql_query, 'w+');
        insertDB($file, $conn);
        InstallFile::delFile($file);

        $sql_empty = InstallFile::readFile(WEB_ROOT . 'Install/Data/greencms_init.sql');
        $sql_query = str_replace('{$db_prefix}', $db_prefix, $sql_empty);
        $file2 = WEB_ROOT . 'Data/Cache/greencms_init_sample.sql';

        InstallFile::writeFile($file2, $sql_query, 'w+');
        insertDB($file2, $conn);
        InstallFile::delFile($file2);

        /**
         * 插入管理员数据&更新配置
         */
        $admin_query = "INSERT INTO `{$db_prefix}user` (`user_id`, `user_login`, `user_pass`, `user_nicename`, `user_email`,
        `user_url`, `user_registered`, `user_activation_key`, `user_status`,  `user_intro`,
        `user_level`, `user_session`) VALUES(1, '{$admin_user}', '" . $admin_password . "', '管理员', '{$admin_email}',
         '', '{$time}', '', 1, '我是admin，欢迎使用', 2, '{$user_session}');";
        if (!mysql_query($admin_query, $conn)) $this->error(' 插入管理员数据出错');
        $cquery = "Update `{$db_prefix}options` set option_value='{$title}' where option_name='title';";
        if (!mysql_query($cquery, $conn)) $this->error(' 更新配置数据出错');
        $cquery = "Update `{$db_prefix}options` set option_value='{$site_url}' where option_name='site_url';";
        if (!mysql_query($cquery, $conn)) $this->error(' 更新配置数据出错');


        $software_version = GreenCMS_Version;
        $software_build = GreenCMS_Build;

        $cquery = "Update `{$db_prefix}options` set option_value='{$software_version}' where option_name='software_version';";
        if (!mysql_query($cquery, $conn)) $this->error(' 更新配置数据出错');
        $cquery = "Update `{$db_prefix}options` set option_value='{$software_build}' where option_name='software_build';";
        if (!mysql_query($cquery, $conn)) $this->error(' 更新配置数据出错');
        $cquery = "Update `{$db_prefix}options` set option_value='{$software_build}' where option_name='db_build';";
        if (!mysql_query($cquery, $conn)) $this->error(' 更新配置数据出错');


        //TODO              写不下去了
        $this->redirect('Install/Index/step5');
    }


    /**
     *
     */
    public function step5()
    {
        InstallFile::delAll(RUNTIME_PATH);
        InstallFile::delAll(LOG_PATH);
        InstallFile::delAll(WEB_CACHE_PATH);
        InstallFile::delAll(WEB_ROOT . 'Data/Cache');
        InstallFile::delAll(WEB_ROOT . 'Data/Temp');


//        $dirs = array();
//
//        array_push($dirs, WEB_ROOT . 'Extend');
//        array_push($dirs, WEB_ROOT . 'Public');
//        array_push($dirs, WEB_ROOT . 'Upload');
//        array_push($dirs, WEB_ROOT . 'Data/Cache');
//        array_push($dirs, WEB_ROOT . 'Data/Temp');
//        array_push($dirs, LOG_PATH);
//        array_push($dirs, RUNTIME_PATH);
//        array_push($dirs, WEB_CACHE_PATH);
//        array_push($dirs, DB_Backup_PATH);
//        array_push($dirs, System_Backup_PATH);
//        array_push($dirs, Upgrade_PATH);


        //build_dir_secure($dirs);
        //A('Install/Test')->init($key = 'zts');


        // $Access = new AccessEvent();
        //   $Access->initAdmin();
        //  $Access->initWeixin();


        // InstallFile::delAll(WEB_ROOT . 'Install/Data');

        if (InstallFile::writeFile(WEB_ROOT . 'Data/Install.lock', 'installed', 'w+')) {
            C('URL_MODEL', 3);
            $this->success('GreenCMS安装成功,5秒钟返回首页', get_opinion("site_url"), 5);
        }

    }

    /**
     * @param $db_host
     * @param $db_port
     * @param $db_user
     * @param $db_password
     * @return string
     */
    public function dbTest($db_host, $db_port, $db_user, $db_password)
    {
        if (test_db_connect($db_host . ":" . $db_port, $db_user, $db_password))
            return 'ok';
        else
            return "数据库服务器或登录密码无效，\n\n无法连接数据库，请重新设定！";
    }


}