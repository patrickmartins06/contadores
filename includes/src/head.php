<?php
include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';
global $id;
global $vw;


//  Display PHP ERRORS
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if ($row = ($conn->query("SELECT * FROM contadores WHERE id=$id"))->fetch_assoc()) {
    $nome = $row["nome"];
    $plano = $row["plano"];
    $url = $row["url"];
    $urlfavicon = $row["urlfavicon"];
    $logo = $row["logo"];
    $fone = $row["fone"];
    $whatsapp = $row["whatsapp"];
    $email = $row["email"];
    $cep = $row["cep"];
    $uf = $row["uf"];
    $cidade = $row["cidade"];
    $bairro = $row["bairro"];
    $rua = $row["rua"];
    $numero = $row["numero"];
    $complemento = $row["complemento"];
    $embedmap = $row["embedmap"];
    $ativo = $row["ativo"];
    $meta_title = $row["meta_title"];
    $meta_description = $row["meta_description"];
    $meta_keywords = $row["meta_keywords"];
    $cod_contador = $row["cod_contador"];
    $url_contador = $row["url"];
}

?>

<!DOCTYPE html>
<html lang='pt-BR'>

<head>


    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $nome; ?></title>

    <link rel='icon' type='image/png' href='<?php echo $url; ?>' />

    <!-- AQUI META TAGS ------------------------------------------------------------------ -->
    <meta name='Title' content='<?php echo $meta_title; ?>'>
    <meta name='subject' content='<?php echo $meta_title; ?>'>
    <meta name='description' content='<?php echo $meta_description; ?>'>
    <meta name='Keywords' content='<?php echo $meta_keywords; ?>'>
    <link rel='canonical' href='https://senae.com.br/<?php echo $url; ?>'>
    <meta name='robots' content='all'>
    <meta name='ROBOTS' content='ALL'>
    <meta name='googlebot' content='all'>
    <meta http-equiv='content-language' content='pt-br'>
    <meta name='rating' content='General'>
    <!-- FECHA META TAGS ------------------------------------------------------------------ -->


    <link rel='stylesheet' href='https://senae.com.br/scripts/contadores/includes/css/style_hd.css?<?php echo time(); ?>'>
    <script src='https://senae.com.br/scripts/contadores/includes/js/jquery-3.6.0.min.js'></script>
    <script src='https://senae.com.br/scripts/contadores/includes/js/js_head.js?<?php echo time(); ?>'></script>

    <script src='https://kit.fontawesome.com/704ff50790.js' crossorigin='anonymous'></script>

    <style>
        <?php
        if ($plano != 1) {
        ?>#fm_a {
            display: none !important;
        }

        <?php
        }
        ?>@media only screen and (max-width: 600px) {
            #nome_contador {
                font-size: <?php echo $vw; ?>vw !important;
            }
        }

        figcaption {
            display: none !important;
        }

        body {
            font-family: Helvetica, Arial, sans-serif;
        }

        #hd_nv_a {
            padding: 0;
        }

        #hd_nv_a>nav {
            width: 100%;
            box-shadow: 0 0 2em #200 inset;
            border-bottom: 2px solid #530;
            border-top: 2px solid #530;
        }

        #hd_nv_a>nav>ul {
            padding: 0;
            padding-right: 0px;
            padding-right: 8em;
        }

        #hd_nv_a>nav>ul>li,
        #hd_nv_a>nav>ul>li>a {
            color: #ffff;
            text-shadow: 0 0 4px #000
        }
    </style>

    <script>
        var page_title = ""
        var contador = "<?php echo $nome; ?>"
        var url_contador = "<?php echo $url; ?>"
        var fone_contador__ = "<?php echo $whatsapp; ?>"
        localStorage.setItem("cod_contador", "<?php echo $cod_contador; ?>")
    </script>
    <script>
        function load_gf() {
            document.body.insertAdjacentHTML("beforeend", `
            <div id="load_gf" style="position: fixed;left: 00;top: 0;width: 100%;height: 100%;background: #fffa;display: flex;align-items: center;justify-content: center;">
				<img src="https://senae.com.br/imgs/load.gif" style="width: 30px;">
			</div>
        `)
        }
    </script>

    <?php
    /* Cookies */ require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/fun_cookies.php';
    ?>


</head>

<body>

    <?php



    // if (!isset($_COOKIE['nome_contador'])) {

    //     // ini_set('display_errors', 1);
    //     // ini_set('display_startup_errors', 1);
    //     // error_reporting(E_ALL);

    //     echo '<span>$nome_contador</span>';


    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }

    //     date_default_timezone_set('America/Sao_Paulo');
    //     $now_ = date("d/m/Y H:i:s");

    //     //PHP Write to File js
    //     $file = "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/accss.php";    //seleciona o arquivo à criar e preencher
    //     $escreva_isso = "<a target='_blank' href='http://ip-api.com/json/$ip'>$ip</a> -  $now_ <br>";     //captura a data enviada pelo $.post("...")

    //     $fopen = fopen($file, 'a+');         //abre o arquivo
    //     fwrite($fopen, $escreva_isso);      //escreve
    //     fclose($fopen);                     //fecha o arquivo
    //     ////


    //     exit();
    // }

    $fone_whats = str_replace(array(' ', '-', '"', '(', ')', ' ', '>'), ' ', $whatsapp);
    $fone_whats = str_replace(' ', '', $fone_whats);

    ?>
    <a target="_blank" class=" wa_bt_ft_desktp" id="wt_bt" style="position: fixed;right: 2em;bottom: 103px;transform: scale(2.5);fill: #00D972;transition: .2s;z-index:98" href="https://wa.me/55<?php echo $fone_whats; ?>">
        <i class="fab fa-whatsapp" aria-hidden="true" style="background: #00D972;color: #fff;border-radius: 1em;box-shadow: 1px 1px 5px 0px #2225;transition: .2s;padding: 5px;text-decoration: none;display: inherit;outline: none;line-height: 14px;"></i>
    </a>



    <?php



    ?>