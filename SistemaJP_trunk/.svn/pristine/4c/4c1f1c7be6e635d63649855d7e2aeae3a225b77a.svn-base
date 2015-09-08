window.onload = function() {
    DestroiSessao();
    $JQuery(".campos_login").click(function(){
        $JQuery(".error").hide();
    });

    $JQuery("#login").focus();
};

function Login() {
    var login = document.getElementById('login');
    if (login.value === '') {
        //alert("Preencha o campo login.");
        document.getElementById('erro_email').setAttribute('style','display:block');
        login.focus();
        return;
    }

    var senha = document.getElementById('senha');
    if (senha.value === '') {
       // alert("Preencha o campo senha.");
        document.getElementById('erro_senha').setAttribute('style','display:block');
        senha.focus();
        return;
    }

    var ajax = new Ajax('POST', 'php/index.php', true);

    ajax.ajax.onreadystatechange = function() {

        if (!ajax.isStateOK())
            return;

        if (ajax.getResponseText() === '0') {
            alert("Usuário e/ou senha incorretos.");
            login.value = "";
            senha.value = "";
            login.focus();
            return;
        }

        if (ajax.getResponseText() === '1') {
            window.location = 'principal.html';
        }
    };

    var p = 'action=Login';
    p += '&login=' + document.getElementById('login').value;
    p += '&senha=' + document.getElementById('senha').value;
    ajax.Request(p);
}

function Cadastre_se(){
    window.location="cadastre-se.html";
}

function login_KeyDown(ev) {

    ev = window.event || ev;
    var keyCode = ev.keyCode || ev.which;

    if (keyCode === 13)
        Login();
}