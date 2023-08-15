<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
    include '../../includes/conn.php';

    $id = $_POST ["id"];
    $nome = $_POST ["nome"];
    $sobre = $_POST ["sobre"];

    $url = $_POST ["url"];
    $urlfavicon = $_POST ["urlfavicon"];
    $logo = $_POST ["logo"];
    $logo_listagem_contadores = $_POST ["logo_listagem_contadores"];

    $fone = $_POST ["fone"];
    $whatsapp = $_POST ["whatsapp"];
    $email = $_POST ["email"]; 
    $cep = $_POST ["cep"];
    $uf = $_POST ["uf"];
    $cidade = $_POST ["cidade"];
    $bairro = $_POST ["bairro"];
    $rua = $_POST ["rua"];
    $numero = $_POST ["numero"];
    $complemento = $_POST ["complemento"];
    $ponto_ref = $_POST ["ponto_ref"];

    $bairros_ = $_POST ["bairros_"];
    $embedmap = $_POST ["embedmap"];

    $plano = $_POST ["plano"];
    $ativo = $_POST ["ativo"];

    $meta_title = $_POST ["meta_title"];
    $meta_description = $_POST ["meta_description"];
    $meta_keywords = $_POST ["meta_keywords"];


    $sql = "UPDATE contadores SET id = '$id', nome = '$nome', sobre = '$sobre', url = '$url', urlfavicon = '$urlfavicon', logo = '$logo', logo_listagem_contadores = '$logo_listagem_contadores', fone = '$fone', whatsapp = '$whatsapp', email = '$email', cep = '$cep', uf = '$uf', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento', ponto_ref = '$ponto_ref', bairros_ = '$bairros_', embedmap = '$embedmap', plano = '$plano ', ativo = '$ativo', meta_title = '$meta_title', meta_description = '$meta_description', meta_keywords = '$meta_keywords' WHERE id = '$id'";
    
    echo $sql;


    if(mysqli_query($conn, $sql)){
        header("location:https://senae.com.br/scripts/contadores/");
    } else {
        echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);  
?>
<?php }else{header("location:https://senae.com.br");} ?>