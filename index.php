<?PHP
SESSION_START();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pag-home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Atividade02</title>
</head>
<body>
    <script>
    var $activeBtn = document.getElementById('btn_entrar');
    var $input_usuario = document.getElementById('txt_usuario');
    var $input_senha = document.getElementById('txt_senha');

    if ($activeBtn.checked) {
        $input_usuario.required = true;
        $input_senha.required = true;
    }
    </script>
    <header class="container-fluid">
        <div class="row navbar">
            <div class="col-lg-4 col-md-4 col-sm-12 logo">
                <img class="logo" src="img/flex.svg" alt="#">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-12">
                <div class="navbar-container justify-content-around">
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Ajuda</a></li>
                    <li><a href="">Contato</a></li>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="padding container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="caixa2">
                        <p class="titulo">LOGIN</p>
                        <?php
                        if(isset($_SESSION['campos_vazios'])):
                        ?>
                        <div class="notification">
                        <p>Preencha os campos</p>

                        </div>
                        <?php 
                            unset($_SESSION['campos_vazios']);
                        endif;
                        ?>
                        <?php
                        if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <div class="notification">
                        <p>Usuário ou senha inválidos</p>
                        </div>
                        <?php 
                            unset($_SESSION['nao_autenticado']);
                        endif;
                        ?>
                        <form method="POST" action="logar.php">
                            <!-- Frase de presença e logo -->
                            <label for="Nome">E-mail:</label>
                            <input type="text" name="txt_usuario" id="txt_usuario" autofocus value="" placeholder="Insira seu usuário ou email">
                            <div class="password">
                                <label for="Senha">Senha:</label>
                                <input type="password" name="txt_senha" autofocus value="" id="txt_senha" placeholder="Insira sua senha">
                            </div>
                            <div class="botoes-login">
                                <button type='submit' id='btn_entrar'>Entrar</button>  
                                <button onclick="">Cadastrar</button>  
                            </div> 
                        </form>
                        <div class="caixa-icons">
                            <a href="https://www.facebook.com/aparicio.fermiano.52/ " target="_blank"><img class="icons" src="img/1.svg" alt="Facebook"></a>
                            <a href="https://www.instagram.com/aparicio_design/" target="_blank"><img class="icons" src="img/instagram.svg" alt="Instagram"></a>
                            <a href="https://api.whatsapp.com/send?phone=5511991600836&text=Ol%C3%A1%2C%20seja%20Bem-vindo" target="_blank"><img class="icons" src="img/2.svg" alt="Whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <p>Designer by Aparicio Fermiano</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>
</html>