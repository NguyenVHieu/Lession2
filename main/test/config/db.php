<?php 
    if(!isset($_SESSION)) 
    { 
        session_start();
        
    }
    else
    {
        session_destroy();
        session_start(); 
    }
    if (!defined('SITEURL')) define('SITEURL', 'http://localhost/test/');
    $conn = mysqli_connect('localhost','root','','db_test') or die ('Lỗi kết nối');
?>