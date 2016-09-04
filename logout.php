<?php
include"sessioncheck.php";
/**
 * Created by PhpStorm.
 * User: MEHDI
 * Date: 7/17/2015
 * Time: 2:15 PM
 */
session_destroy();
header("location: login.php");