<?php
include_once ('../layout/head.php');
include_once ('lib/session.php');
session::init();
session::setNull('login');
session::setNull('userName');
session::setNull('userId');
session::setNull('userName');
session::setNull('name');
session::setNull('logInMsg');
session::end();

header('Location: login.php?msgg='.urlencode('Logout SuccessFul'));
exit();