<?php 

require 'db.php';
require 'fun.php';
require 't.php';

class core {
    public function __construct() {
        session_start();
        date_default_timezone_set('Asia/Almaty');
        new db; new fun; new t;
    }
}

// data
$core = new core;

// lang
$lang = 'kz';
if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];


// setting
$site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));
$ver = 1.002;
$site_set = [
    'swiper' => 'false',
];
$css = [];
$js = [];


// date - time
$date = date("Y-m-d", time());
$time = date("H:m:s", time());
$datetime = date('Y-m-d H:i:s', time());