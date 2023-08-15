<?php
require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
echo is_user_logged_in() ? '' : header("location:https://senae.com.br");
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

$nome =         $_POST["nome"];
$sobre =        $_POST["sobre"];

$url =          $_POST["url"];
$urlfavicon =   $_POST["urlfavicon"];
$logo =         $_POST["logo"];
$logo_lis_con = $_POST["logo_listagem_contadores"];

$fone =         $_POST["fone"];
$whatsapp =     $_POST["whatsapp"];
$email =        $_POST["email"];
$cep =          $_POST["cep"];
$uf =           $_POST["uf"];
$cidade =       $_POST["cidade"];
$bairro =       $_POST["bairro"];
$rua =          $_POST["rua"];
$numero =       $_POST["numero"];
$complemento =  $_POST["complemento"];
$ponto_ref =    $_POST["ponto_ref"];

$bairros_ =     $_POST["bairros_"];
$embedmap =     $_POST["embedmap"];


$ativo =        $_POST["ativo"];
$plano =        $_POST["plano"];

$meta_title = $_POST["meta_title"];
$meta_description = $_POST["meta_description"];
$meta_keywords = $_POST["meta_keywords"];

// $id = $conn->query("SHOW TABLE STATUS LIKE 'contadores'")->fetch_assoc()['Auto_increment'];

global $conn;
$result = $conn->query("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'contadores'");
$id = $result->fetch_assoc()['AUTO_INCREMENT'];
echo $id;
//exit();


$result = $conn->query("SELECT url FROM contadores WHERE url = '{$url}'");
if ($result->num_rows != 0 and $url == "cc") {
    //echo '<script>alert("Erro: a URL já existe.")</script>';
    //echo '<script>history.go(-1)</script>';
} else {
    //echo 'Não existe';

    $url_path = "/home/u446695767/domains/senae.org/public_html/$url";

    if (!file_exists($url_path)) {

        //  Mensagem
        echo `
            <script src="https://senae.com.br/scripts/includes/js/jquery-3.6.0.min.js"></script>
            
            ` . ">>> $url_path <div style='display: flex;flex-direction: column;'><a href='https://senae.org/$url' style='margin: 15px;'> Acessar </a><a href='https://senae.com.br/scripts/contadores/' style='margin: 15px;'> Voltar ao Painel </a></div>" . `

            <script>
                $.ajax({
                    url: 'https://senae.com.br/scripts/consultores/api_get_contadores.php?time=` . time() . `'
                })
            </script>
        
            <iframe src="https://senae.com.br/wp-admin/admin.php?LSCWP_CTRL=purge&LSCWP_NONCE=cff6a66efb&litespeed_type=purge_all&_litespeed_ori=1" style="pointer-events:none;opacity:0" frameborder="0"></iframe>';
        `;

        $url_path = "/home/u446695767/domains/senae.org/public_html/$url";

        //  Cria os Diretórios
        mkdir("$url_path");
        mkdir("$url_path/abertura-de-empresa-gratis");
        mkdir("$url_path/como-funciona");
        mkdir("$url_path/consultoria-de-negocios");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda");
        /**//**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/franquias");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa");
        /**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades");
        /**//**//**/
        mkdir("$url_path/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/anunciar");
        mkdir("$url_path/consultoria-empresarial-gratuita");
        mkdir("$url_path/consultoria-juridica-gratuita");
        mkdir("$url_path/contato");
        mkdir("$url_path/cursos-gratis");
        mkdir("$url_path/depoimentos");
        mkdir("$url_path/includes");
        mkdir("$url_path/materias");
        mkdir("$url_path/politica-de-privacidade");
        mkdir("$url_path/porque-trocar-de-contador");
        mkdir("$url_path/recuperacao-fiscal");
        mkdir("$url_path/servicos-planos");
        mkdir("$url_path/tenha-seu-proprio-negocio");
        /**/
        mkdir("$url_path/tenha-seu-proprio-negocio/ideias-de-negocios");
        /**/
        mkdir("$url_path/tenha-seu-proprio-negocio/ideias-de-negocios/ideias-de-negocios");
        mkdir("$url_path/vantagens");

        //Cria o index.php insert Dados  >>> FOPEN W SOBRESCREVE, FOPEN X ERRO SE JA EXISTE

        global $id;
        $s = '<?php include "' . $url_path . '/custom_cfg.php"; include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/index_master.php"';

        // custom_cfg.php
        $arquivo = fopen('' . "$url_path" . '/custom_cfg.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '<?php global $lg_hd_a;global $nome_mobile;$vw="7.8";$nome_mobile = "";$id="' . $id . '"; ?>');
        fclose($arquivo);

        // index.php
        $arquivo = fopen('' . "$url_path" . '/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';master_index_text();?>');
        fclose($arquivo);

        // abertura-de-empresa-gratis
        $arquivo = fopen('' . "$url_path" . '/abertura-de-empresa-gratis/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$abertura_de_empresa_gratis();?>');
        fclose($arquivo);

        // consultoria-de-negocios
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$consultoria_de_negocios();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$ideias_de_negocios();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$_1000_ideias_de_negocios();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/comercios-a-venda
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$comercios_a_venda();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$comercios_anunciar();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/franquias
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/franquias/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$franquias();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$negocios_com_pouco_dinheiro();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$negocios_para_trabalhar_em_casa();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$parcerias_e_sociedades();?>');
        fclose($arquivo);

        // consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/anunciar
        $arquivo = fopen('' . "$url_path" . '/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/anunciar/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$parcerias_anunciar();?>');
        fclose($arquivo);

        // consultoria-empresarial-gratuita
        $arquivo = fopen('' . "$url_path" . '/consultoria-empresarial-gratuita/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';consultoria_empresarial_gratuita();?>');
        fclose($arquivo);

        // consultoria-juridica-gratuita
        $arquivo = fopen('' . "$url_path" . '/consultoria-juridica-gratuita/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$consultoria_juridica();?>');
        fclose($arquivo);

        // contato
        $arquivo = fopen('' . "$url_path" . '/contato/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$master_contato_text();?>');
        fclose($arquivo);

        // cursos-gratis
        $arquivo = fopen('' . "$url_path" . '/cursos-gratis/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$cursos_gratis();?>');
        fclose($arquivo);

        // depoimentos/index.php
        $arquivo = fopen('' . "$url_path" . '/depoimentos/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$master_depoimentos_text();?>');
        fclose($arquivo);

        // materias/index.php
        $arquivo = fopen('' . "$url_path" . '/materias/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$materias();?>');
        fclose($arquivo);

        // politica-de-privacidade/index.php
        $arquivo = fopen('' . "$url_path" . '/politica-de-privacidade/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';politica_privacidade();?>');
        fclose($arquivo);

        // porque-trocar-de-contador/index.php
        $arquivo = fopen('' . "$url_path" . '/porque-trocar-de-contador/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$porque_trocar_de_contador();?>');
        fclose($arquivo);

        // recuperacao-fiscal/index.php
        $arquivo = fopen('' . "$url_path" . '/recuperacao-fiscal/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$recuperacao_fiscal();?>');
        fclose($arquivo);

        // servicos-planos/index.php
        $arquivo = fopen('' . "$url_path" . '/servicos-planos/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$master_servicos_planos_text();?>');
        fclose($arquivo);

        // tenha-seu-proprio-negocio/index.php
        $arquivo = fopen('' . "$url_path" . '/tenha-seu-proprio-negocio/index.php', 'x') or die("Não foi possível criar o arquivo.");
        fwrite($arquivo, '' . $s . ';$consultoria_empresarial_gratuita();?>');
        fclose($arquivo);



        $result = mysqli_query($conn, "SELECT  MAX( cod_contador) as max FROM contadores");

        while ($res = mysqli_fetch_array($result)) {
            $cod_contador = $res['max'] + 1;
        }






        $id_min = $id - 1;
        // if ($row = ($conn->query("SELECT max(cod_contador) FROM contadores"))->fetch_assoc()) {
        //     echo $row['max'];
        // }


        //Lembrar ->>>  Adicionar SEO AO SQL?
        $sql = "INSERT INTO `contadores` (`id`, `nome`, `sobre`, `cod_contador`, `url`, `urlfavicon`, `logo`, `logo_listagem_contadores`, `fone`, `whatsapp`, `email`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `ponto_ref`, `bairros_`, `embedmap`, `plano`, `ativo`, `meta_title`, `meta_description`, `meta_keywords`)
            VALUES (NULL, '$nome', '$sobre', '$cod_contador', '$url', '$urlfavicon', '$logo', '$logo_lis_con', '$fone', '$whatsapp', '$email', '$cep', '$uf', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$ponto_ref', '$bairros_', '$embedmap', '$plano', '$ativo', '$meta_title', '$meta_description', '$meta_keywords')";

        if (mysqli_query($conn, $sql)) {
            //header("location:https://senae.com.br/scripts/contadores/index.php");
        } else {
            echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo    '<div style="font-family: arial;">
                    <h1 style="display: flex;margin: auto;justify-content: center;height: 50%;align-items: center;">Atenção o subsite:⠀<i style="color:red">https://senae.com.br/<u>' . $url . '</u></i>⠀já existe.</h1>
                    <a style="font-size:1.5em;display: flex;margin: auto;justify-content: center;height: 50%;align-items: center;" onclick="window.history.go(-1); return false;" href="#">Clique aqui para Voltar à Edição.</a>
                </div>';
        //header("location:javascript://history.go(-1)");
    }
}

?>
