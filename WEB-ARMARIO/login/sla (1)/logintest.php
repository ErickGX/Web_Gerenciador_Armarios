<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="teststyle.css">
	<title>Login</title>
</head>
<body>
	<div class="main-login">

		<div class="pt-esquerda-login">

			<h1>Alugue seu armario!</h1>

			<img src="c.png" class="left-login-img" alt="cadeado">

		</div>


		<div class="pt-direita-login">

			<div class="card-login">

				<h1>Login</h1>

				<div class="form">
					
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="email" class="input required" oninput="emailValidate();" >

					<span class="span-required">Email invalido</span>

				</div>
				<div class="form">

					<label for="senha">Senha:</label>
					<input type="password" name="senha" placeholder="Senha"  class="input required" oninput="senhaValidate();" >

					<span class="span-required">Senha invalida</span>

				</div>

				<button class="bnt-login"><a href="#">Entrar</a></button>
				<button class="bnt-login"><a href="#">Cadastre-se</a></button>

				<a href="#">esqueci minha senha</as>
			</div>
		</div>

		


	</div><!--main-login-->

</body>
<script>
        const form = document.getElementById('Forms');
        const campos = document.querySelectorAll('.required');
        const spans = document.querySelectorAll('.span-required');
		const  emailRegex =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

     form.addEventListener('submit', (event) => {
        event.preventDefault();
       senhaValidate();
	 	emailValidate();

     }
     );

    function setError(index){
        campos[index].style.border='1px solid #e63636';
        spans[index].style.display = 'Block';
    }

    function RemoveError(index){
        campos[index].style.border='';
        spans[index].style.display = 'none';
    }
	function emailValidate(){
        if (emailRegex.test(campos[0].value))
        {
            RemoveError(0);
        }
        else
        {
           setError(0);
        }
    }
     function senhaValidate(){
         if (campos[1].value.length<8)
         {
             setError(1);
         }
         else
         {
             RemoveError(1);
         }
     }

     </script>
</html>