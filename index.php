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
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #3BB398;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "DM Sans", sans-serif;
        }

        .conteudo {
            width: 100%;
            max-width: 1000px;
            height: 75%; /* altura de todo o conteúdo */
            display: flex;
            background-color: white;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.2); /* a intensidade de toda a borda transparente que envolve todo o conteudo */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            padding: 0px;
            border: 0px solid transparent;
        }

        .texto {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            background-color: #3BB398;
            color: white;
            border-radius: 10px;
        }

        .imagem {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border-radius: 10px;
        }

        .imagem img {
            width: 100%;
            height: auto;
        }

        .form-control {
            background-color: white;
            padding: 15px; /* mexe nos tamanhos dos botões */
            font-size: 18px;
            border-radius: 10px;
            width: 100%;
            border: 1px solid #ccc;
            margin-bottom: -40px; /* espaçamento entre os botões */
            margin-top: 60px; /* espaçamento entre o conecte-se e os botões */
        }

        .olho {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .btnentrar {
            background-color: white;
            color: #888;
            border-radius: 5px;
            padding: 13px;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #ccc;
        }

        .btnentrar:hover {
            background-color: #f0f0f0;
        }

        .recuperar-senha-link {
            color: white;
            text-decoration: none;
            margin-top: 20px;
            align-self: flex-end;
        }

        .recuperar-senha-link:hover {
            text-decoration: underline;
        }

        .input-container {
            position: relative;
            margin-bottom: 25px;
            width: 100%;
        }

        .input-container input {
            width: 100%;
            padding: 15px 40px 15px 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 18px;
            color: #888;
            outline: none;
        }

        .senha-container i {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 20px;
        }

        /*não mexer nos tamanhos da @media ass:yasmin// qualquer coisa me chame*/
        /* Media Queries */
        @media (max-width: 768px) {
            .conteudo {
                flex-direction: column;
                height: auto;
                max-width: 90%;
            }

            .texto, .imagem {
                border-radius: 0;
            }

            .imagem {
                display: none;
            }

            .btn-container {
                justify-content: center;
            }
        }
        /*não mexer nos tamanhos da @media ass:yasmin// qualquer coisa me chame*/
        @media (max-width: 480px) {
            .texto {
                padding: 20px;
            }

            .form-control {
                padding: 10px;
                font-size: 16px;
           
            }
            
            .btnentrar {
                padding: 10px;
                font-size: 14px;
            }

            .recuperar-senha-link {
                margin-top: 10px;
                font-size: 14px;
            }
        }

        /*não mexer nos tamanhos da @media ass:yasmin// qualquer coisa me chame*/
        @media (min-width: 1000px) {
            .conteudo {
                max-width: 1200px;
                height: 80%;
            }

            .texto {
                padding: 60px;
            }

            .form-control {
                padding: 20px;
                font-size: 20px;
                margin-top: 50px;
            }

            .btnentrar {
                padding: 15px;
                font-size: 18px;
                margin-left: 20px;
            }

            .recuperar-senha-link {
                font-size: 16px;
            }
        }

        /*não mexer nos tamanhos da @media*/
        @media (min-width: 1700px) {
            .conteudo {
                max-width: 1200px;
                height: 80%;
            }

            .texto {
                padding: 60px;
            }

            .form-control {
                padding: 20px;
                font-size: 20px;
                margin-top: 80px;
            }

            .btnentrar {
                padding: 15px;
                font-size: 18px;
            }

            .recuperar-senha-link {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="conteudo">
        <div class="texto">
            <h1 style="margin-bottom: 20px;">Conecte-se</h1>
            <form>
                <div class="form-group mb-8">
                    <label for="loginTxt" class="control-label"></label>
                    <div class="input-container">
                        <input class="form-control usuario1" placeholder="Digite seu usuário" name="loginTxt" id="loginTxt" maxlength="15" />
                    </div>
                </div>
                <div class="form-group mb-8">
                    <label for="senhaTxt" class="control-label"></label>
                    <div class="input-container">
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="senhaTxt" id="senhaTxt" maxlength="30" />
                        <div class="olho">
                            <i id="btn-senha" onclick="mostrarSenha()"><img src="" alt=""></i>
                        </div>
                    </div>
                </div>
                <a href="recuperarsenha.html" class="recuperar-senha-link">Recuperar senha</a>
                <div class="btn-container">
                    <button type="button" id="loginBtn" class="btnentrar">Entrar</button>
                </div>
            </form>
        </div>
        <div class="imagem">
            <img src="https://setting.com.br/wp-content/uploads/2018/04/ferramentas-gestao-de-projetos.jpg" alt="Descrição da imagem">
        </div>
    </div>

    <script type="text/javascript">
        function mostrarSenha() {
            var senhaInput = document.getElementById("senhaTxt");
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
            } else {
                senhaInput.type = "password";
            }
        }
    </script>
</body>

</html>

  <script src="<?php echo base_url("assets/js/jquery-3.6.0.min.js"); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url("assets/js/sweetalert2.all.min.js"); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" type="text/javascript"></script>

  <script type="text/javascript" charset="utf-8">
    var base_url = "<?= base_url(); ?>"
    $(document).ready(function() {
      $('#loginBtn').on('click', async function(e) {
        e.preventDefault();

        const config = {
          method: "post",
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            usuario: $('#loginTxt').val(),
            senha: $('#senhaTxt').val()
          })
        };

        const request = await fetch(base_url + 'professor/logarProfessor', config);
        const response = await request.json();

        if (response.codigo == 1) {
          Swal.fire({
            title: 'Acesso liberado',
            text: 'Bem-vindo ao sistema de Estágio.',
            icon: 'success'
          });
        } else {
          Swal.fire({
            title: 'Atenção!',
            text: response.codigo + ' - ' + response.msg,
            icon: 'error'
          });
        }
      });
    });

    function mostrarSenha() {
      var senhaInput = document.getElementById("senhaTxt");
      if (senhaInput.type === "password") {
        senhaInput.type = "text";
      } else {
        senhaInput.type = "password";
      }
    }
  </script>
</body>

</html>
