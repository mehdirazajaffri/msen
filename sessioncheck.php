<?php
//here we check session and if he logged in we do nothing or else we send the user back to
//index.php, plus we put this on all pages except in index cause it'll be a redirect problem then
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}