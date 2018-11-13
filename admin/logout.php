<?php
include_once ('../lib/session.php');
session::init();
session::setNull('login');
session::setNull('name');
session::setNull('fullName');
session::setNull('userName');
session::setNull('userId');
session::setNull('logInMsg');
session::end();

header('Location: index.php');
exit();