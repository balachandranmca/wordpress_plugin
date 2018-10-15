<?php
/**
 * @package Demo Plugin
 * @version 1.0
 */
/*
Plugin Name: Demo
Description: Demo plugin
Author: BALACHANDRAN
Version: 1.0
 */
ob_start();
if(!isset($_SESSION)){session_start();}
include_once 'sample.php';

