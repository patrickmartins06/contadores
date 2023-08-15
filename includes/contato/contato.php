<?php

require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$nome                   = $_POST['nome'];
$email                  = $_POST['email'];
$mensagem =             nl2br($_POST['mensagem']);
$fone                   = $_POST['telefone'];
$id                     = $_POST['genForm'];
$cm_pd_aj               = $_POST['cm_pd_aj'];
$assunto                = $_POST['cm_pd_aj'];

//Codigo

$sql = "SELECT * FROM `contadores` WHERE id = $id";
$records = mysqli_query($conn, $sql);

if ($data = mysqli_fetch_array($records)) {
    $email_contador = $data['email'];
    $nome_contador = $data['nome'];
    $url_contador = $data['url'];
}

$from = "$nome <$email>";
$to = " $nome_contador <$email_contador>";
$subject = "$assunto";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'Cc: contadores@senae.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = "
    <h2><b>Assunto: </b>$assunto</h2><hr>
    <b>Nome: </b> $nome<br>
    <b>E-mail: </b> $email<br>
    <b>Fone: </b> $fone<br>
    <hr>
    <b>Mensagem: </b><br> $mensagem <br>
";

mail($to, $subject, $message, $headers);

//echo "$to <br> $subject <br> $message <br> $headers <br> $nome_contador <br> $email_contador";

echo '
    <script>
    localStorage.setItem("email", "email1");
    
    ////
        //JS Reload Page Snipp//
        function reloadPage(){
            document.querySelector("body").insertAdjacentHTML("beforeend", `
            <a style="display:none" href="https://senae.org/' . $url_contador . '/?email_enviado=1" id="reloadPage">Reload</a>
        `)
            document.querySelector("#reloadPage").click()
        }
        
        setTimeout(function(){
          reloadPage()
        }, 50)

    ////

    </script>
';
