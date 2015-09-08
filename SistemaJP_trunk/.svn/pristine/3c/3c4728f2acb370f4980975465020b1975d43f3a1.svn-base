               
<?php

include '../php/config.php';

function AbreBanco($host, $user, $pass, $database = '') {

    $id = mysql_connect($host, $user, $pass);

    if ($database != '')
        mysql_select_db($database, $id);

    return $id;
}

function AbreBancoTeste() {

    $con = new config();

    $id = AbreBanco($con->get_host(), $con->get_login(), $con->get_pass(), $con->get_banco());

    mysql_set_charset('utf8', $id);

    return $id;
}
?>