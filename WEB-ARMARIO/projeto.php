<?php 

if ($_POST){
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";exit;

  $cur=curl_init();
  curl_setop_array()
    curl_setop_array( $curl.{
        CURLOPT_URL=' https://www.google.com/recaptcha/api/siteverify'
        CURLOPT_RETURNTRANSFER= true,
        CURLOPT_CUSTOMREQUEST='POST',
            CURLOPT_POSTFIELD =[
                'secret'= '6Le7724iAAAAAJdlt3Lc7g9mrQkifSq0DIvWfh5C',
                        'response' = $_POST ['g-recaptcha-response']??''
            ]
    });
    $response = curl_exec($curl);

    curl_close($curl); 


    $responseArray= json_decode($response,true);

    $sucesso =$responseArray ['sucess']?? false ;
}
?>
<html lang= "en" dir= "ltr">
<head>
    <meta charset="utf-8">
    <title> formulario RECAPTCHA V2 </title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel ="stylesheet" href= "style.css">

    <script>
        function validarpost (){
           // VERIFICA SE O RECAPTCHA FOI SELECIONADO
           if (grecaptcha.getResponse()!="")return true;
           // erro não selecionado 
           alert('Selecione a caixa de não sou robô');
           return false;
        }
    </script>
</head>
<body>
    <h1>Formulario ReCAPTCHA V2</h1>
    <hr>
    <form method= "post" onsubimit="return validarPost()">
        <div>
            <label>Nome </label>
        <input type="text"  name="RM "  required>
        </div>
        <div>
        <label>Senha</label>
        <input type="text"  name="Senha "  required>
        </div>
        <div class="g-recaptcha" data-sitekey="6Le7724iAAAAAOXjW2UvzQJmp5CGZbbI04EgbjqB"></div>
        <button type="subimit">Enviar</button>
        

</form>
</body>
</html>