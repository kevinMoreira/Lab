<?php

include 'sistemaJP.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'salvarCliente':
            salvarCliente();
            break;

        case 'pesquisarCliente':
            pesquisarCliente();
            break;

        case 'excluir':
            excluir();
            break;

        case 'editarCliente':
            editarCliente();
            break;
    }
}

//---------------------------------------------------------------------------------------------------------
// ATUALIZADO 22/08/2014 INCLUSÃO DO CAMPO ORGANIZACAO
//---------------------------------------------------------------------------------------------------------
function salvarCliente(){

    session_start();
    $conexao=AbreBancoJP();

    $sql="INSERT INTO cliente VALUES 
    ('','$_SESSION[idOrganizacao]', '$_POST[nome]','$_POST[cpf]','$_POST[data_nascimento]','$_POST[telefone]',
        '$_POST[celular]','$_POST[email]','$_POST[cep]','$_POST[endereco]',
        '$_POST[numero]','$_POST[complemento]','$_POST[bairro]','$_POST[cidade]',
        '$_POST[uf]',1)";
echo $sql;

    mysql_query($sql, $conexao);
    mysql_close($conexao);
}

function pesquisarCliente(){

    session_start();
    $conexao= AbreBancoJP();

    $sql="SELECT * from cliente where (nome='$_POST[pesq]' OR telefone='$_POST[pesq]' OR cpf='$_POST[pesq]') 
    and status = 1 and idOrganizacao=". $_SESSION['idOrganizacao'];

    $sql=mysql_query($sql, $conexao);

     if(mysql_num_rows($sql) <= 0){
        echo '0';
        mysql_close($conexao);
        return;
    }

    while($row=mysql_fetch_row($sql)){

        $json[]= array(
            'id_cliente' => $row['0'],
            'nome' => $row['2'],
            'cpf' => $row['3'],
            'data_nascimento' => $row['4'],
            'telefone' => $row['5'],
            'celular' => $row['6'],
            'email' => $row['7'],
            'cep' => $row['8'],
            'endereco' => $row['9'],
            'numero' => $row['10'],
            'complemento' => $row['11'],
            'bairro' => $row['12'],
            'cidade' => $row['13'],
            'uf' => $row['14'],
            'status' => $row['15'],
        );
    }

    echo json_encode($json);
    mysql_close($conexao);
}

function excluir(){//modificar nao excluir fisicamente. Utilizar campo del
    
    session_start();
    $conexao = AbreBancoJP();

    $sql = "UPDATE cliente set status = 0 where idCliente = $_POST[id_cliente] and idOrganizacao=". $_SESSION['idOrganizacao'] ." and status=1";

    mysql_query($sql,$conexao); 
    mysql_close($conexao);
}

//---------------------------------------------------------------------------------------------------------
// ATUALIZADO 22/08/2014 INCLUSÃO DO CAMPO ORGANIZACAO
//---------------------------------------------------------------------------------------------------------
function editarCliente(){

    session_start();
    $conexao=AbreBancoJP();

    $sql="UPDATE cliente set nome='$_POST[nome]', cpf='$_POST[cpf]', data_nascimento='$_POST[data_nascimento]', telefone='$_POST[telefone]',
    celular='$_POST[celular]', email='$_POST[email]', cep='$_POST[cep]', endereco='$_POST[endereco]',numero='$_POST[numero]', 
    complemento='$_POST[complemento]', bairro='$_POST[bairro]', cidade='$_POST[cidade]',uf='$_POST[uf]', status='$_POST[status]' 
    WHERE idCliente = $_POST[id_cliente] and idOrganizacao=". $_SESSION['idOrganizacao'] ." and status=1";
    mysql_query($sql, $conexao);
    mysql_close($conexao);
}