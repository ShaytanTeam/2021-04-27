<?php

session_start();

define('_TARGET_DIR', 'uploads/');

require 'upload.php';
require 'template.php';
include 'employees.php';
require 'functions.php';

if (isset($_SESSION['notice'])) {
    unset($_SESSION['notice']);




}