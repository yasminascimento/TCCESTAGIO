<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Estágio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="conectar">
    <div class="conteudoconectese">
        <div class="textoconectar">
            <h1 style="margin-bottom: 20px;">Conecte-se</h1>
            <form>
                <div class="form-group mb-8">
                    <label for="loginTxt" class="control-label"></label>
                    <div class="inputcontainer">
                        <input class="form-control usuario1" placeholder="Digite seu usuário" name="loginTxt" id="loginTxt" maxlength="15" />
                    </div>
                </div>
                <div class="form-group mb-8">
                    <label for="senhaTxt" class="control-label"></label>
                    <div class="inputcontainer">
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="senhaTxt" id="senhaTxt" maxlength="30" />
                        <div class="olho">
                            <i id="btn-senha" onclick="mostrarSenha()"><img src="https://img.icons8.com/?size=100&id=85028&format=png&color=000000" width="35px" height="35px"></i>
                        </div>
                    </div>
                </div>
                <a href="recuperarsenha.html" class="recuperar-senha-link">Recuperar senha</a>
                <div class="btncontainer">
                    <button type="button" id="loginBtn" class="btnentrar2" >Entrar</button>
                </div>
            </form>
        </div>
        <div class="imagem">
            <img src="https://setting.com.br/wp-content/uploads/2018/04/ferramentas-gestao-de-projetos.jpg" alt="Descrição da imagem">
        </div>
    </div>
