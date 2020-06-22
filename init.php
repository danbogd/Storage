<?php

const HOST = 'http://localhost';
const BASE_URL = '/PHP/';


const DB_HOST = 'localhost';
const DB_NAME = 'php1simple';
const DB_USER = 'root';
const DB_PASS = '';

include_once('core/arr.php');
include_once('core/db.php');
include_once('core/system.php');
include_once('core/auth.php');
//include_once('core/settings.php');

include_once('model/base_functions.php');
include_once('model/users.php');
include_once('model/sessions.php');