<?php
require_once 'config/operacoes.php';


session_start();
session_destroy();
Operacoes::redireciona("index.php");
?>