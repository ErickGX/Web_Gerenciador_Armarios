<?php

include_once 'conexaoBD.php';

$conexao = new conexaobd("localhost", "root","","bdarmariov3");

if (is_null($conexao->Conectado())){
    echo "<br/> A conexao nao foi realizada";
}else{

    //echo "<br/> Conectado ao banco";
}



?>


<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styleCADASTRO.css">
    <title>Formulário Cadastro</title>
</head>
<body>
    <div class="container">

        <div class="form-image">
            <img src="img/undraw_security_re_a2rk.svg" width="50%" height="100%" alt="img/testeimagem.jpg"/>
        </div>
       
        <div class="form">
            <form action="#">
                <div class="form-header">

                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Logar</a></button>
                    </div>

                </div>  

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname" class="form-label">Nome</label>
                        <input type="text" name="Name" id="firstname" placeholder="DIGITE SEU NOME" required>
                    </div>


                    <div class="input-box">
                        <label for="firstname" class="form-label">CPF</label>
                        <input type="text" name="Name" id="firstname" placeholder="DIGITE SEU NOME" required>
                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" placeholder="DIGITE UMA SENHA" required>
                    </div>

                    <div class="input-box">
                        <label for="password" class="form-label">Confirmação</label>
                        <input type="password" name="password" id="confirmpassword" placeholder="CONFIRME SUA SENHA" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="number" name="Name" id="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="DIGITE SEU EMAIL" required>
                    </div>

                    <div class="input-box">
                        <label for="RM">RM</label>
                        <input type="number" name="RM" id="number" placeholder="ex:21134" required>
                    </div>

                    <div class="input-box">
                        <label for="cursos">Curso</label>
                        <select name="cursos" id="cursos" placeholder="ESCOLHA SEU CURSO" required>
                            <option value="administração">Administração</option>
                            <option value="nutrição">Nutrição e Dietética</option>
                            <option value="administração">Desenvolvimento de Sistemas</option>
                            <option value="administração">Química</option>
                        </select>
                    </div>
                </div>

                <div class="periodo-inputs">
                    <div class="periodo-title">
                        <h6>PERÍODO</h6>
                    </div>

                    <div class="periodo-group">
                        <div class="periodo-input">
                            <input type="radio" name="periodo" id="integral">
                            <label for="integral">Integral</label>
                        </div>

                        <div class="periodo-input">
                            <input type="radio" name="periodo" id="tarde">
                            <label for="tarde">Tarde</label>
                        </div>

                        <div class="periodo-input">
                            <input type="radio" name="periodo" id="noite">
                            <label for="noite">Noite</label>
                        </div>
                    </div>
                </div>

                <div class="cadastrar-button">
                    <button><a href="#">Cadastrar</a></button>
                </div>
            </form>
        </div>
        
    </div>
    
</body>
</html>