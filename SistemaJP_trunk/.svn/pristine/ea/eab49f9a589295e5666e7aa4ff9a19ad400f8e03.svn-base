<?php

include 'sistemaJP.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'salvarCategoria':
            salvarCategoria();
            break;

        case 'pesquisarCategoria':
            pesquisarCategoria();
            break;

        case 'excluir':
            excluir();
            break;

        case 'editarCategoria':
            editarCategoria();
            break;
    }
}


//---------------------------------------------------------------------------------------------------------
// ATUALIZADO 22/08/2014 INCLUSÃO DO CAMPO ORGANIZACAO
//---------------------------------------------------------------------------------------------------------
function salvarCategoria(){

    session_start();
    $conexao=AbreBancoJP();

    $sql="INSERT INTO categoria VALUES ('', '$_SESSION[idOrganizacao]', '$_POST[nome]', 1)";

    mysql_query($sql, $conexao);

    mysql_close($conexao);
}

function pesquisarCategoria(){

    session_start();
    $conexao= AbreBancoJP();

    $sql="SELECT idCategoria, nomeCategoria from categoria 
    where (idCategoria ='$_POST[pesq]' or nomeCategoria = '$_POST[pesq]') and status = 1 and idOrganizacao=". $_SESSION['idOrganizacao'];
    $sql=mysql_query($sql, $conexao);

    if(mysql_num_rows($sql) <= 0){
        echo '0';
        mysql_close($conexao);
        return;
    }

    while($row=mysql_fetch_row($sql)){

        $json[]= array(
            'id_Categoria' => $row['0'],
            'nome' => $row['1'],
         );
    }

    echo json_encode($json);
    mysql_close($conexao);
}

function excluir(){//modificar nao excluir fisicamente. Utilizar campo del
    
    session_start();
    $conexao = AbreBancoJP();

    $sql = "UPDATE categoria set status = 0 where idCategoria = '$_POST[idCategoria]' and idOrganizacao=". $_SESSION['idOrganizacao'] ." and status=1";

    mysql_query($sql,$conexao);
    mysql_close($conexao);
}


//---------------------------------------------------------------------------------------------------------
// ATUALIZADO 22/08/2014 INCLUSÃO NA CLAUSULA WHERE IDORGANIZACAO
//---------------------------------------------------------------------------------------------------------
function editarCategoria(){

    session_start();
    $conexao=AbreBancoJP();
    $sql="UPDATE categoria set nomeCategoria='$_POST[nome]' WHERE idCategoria = $_POST[idCategoria] and status=1 and idOrganizacao=". $_SESSION['idOrganizacao'];

    mysql_query($sql, $conexao);
    mysql_close($conexao);
}