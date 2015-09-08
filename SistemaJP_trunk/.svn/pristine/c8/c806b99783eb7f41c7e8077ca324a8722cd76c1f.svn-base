<?php

include './sistemaJP.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Login':
            Login();
            break;
    }
}

function Login() {

    $conexao = AbreBancoJP();

    $sql = "SELECT u.*, o.idOrganizacao, o.nome as nomeOrganizacao FROM usuarios u
    INNER JOIN organizacao o on o.idOrganizacao = u.idOrganizacao
    WHERE (u.login = '" . $_POST['login'] . "' AND  u.senha =  md5('" . $_POST['senha'] . "')) and u.status=1 and o.status=1";

    $Tb = mysql_query($sql, $conexao);

    if (mysql_num_rows($Tb) <= 0) {
        echo '0';
        return;
    } else {
        echo '1';
    }

    session_start();

    $_SESSION['codUsuario'] = mysql_result($Tb, 0, "idUsuario");
    $_SESSION['nomeUsuario'] = mysql_result($Tb, 0, "nome");
    $_SESSION['permissao'] = mysql_result($Tb, 0, "permissao");
    $_SESSION['idOrganizacao'] = mysql_result($Tb, 0, "idOrganizacao");
    $_SESSION['nomeOrganizacao'] = mysql_result($Tb, 0, "nomeOrganizacao");
}
