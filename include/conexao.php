<?php
define('DBSERVER','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBBASE','crud');

$conexao = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBBASE);
