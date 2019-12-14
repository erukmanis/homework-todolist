<?php

session_start();
$_SESSION['username'] = null;
$_SESSION['idusers'] = null;
header('Location : /');
