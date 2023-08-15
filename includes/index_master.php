<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = "1";
// $lg_hd_a = "1";
// $nome_mobile = "1";
// $vw = "1";

global $id;
global $lg_hd_a;
global $nome_mobile;





include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';
if ($row = ($conn->query("SELECT ativo, `url` FROM contadores WHERE id = $id"))->fetch_assoc()) {
    $ativo = $row['ativo'];
    $url = $row['url'];
}

if ($ativo == 'sim') {

    function master_index_text()
    {
        global $id;
        include "src/head.php";
        include "src/header.php";
        include "index/body.php";
        include "src/footer.php";
    }

    function politica_privacidade()
    {
        global $id;
        include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/head.php";
        include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/header.php";
        include "/home/u446695767/domains/agenciaempregadadomestica.com.br/public_html/includes/main_politica-de-privacidade.php";
        /* Cookies */
        require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/fun_cookies.php';
        include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/footer.php";
    }

    function createDynamicFunction($name, $include_file)
    {
        return function () use ($name, $include_file) {
            include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/head.php";
            include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/header.php";
            include "$include_file";
            include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/src/footer.php";
        };
    }


    $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura_de_empresa_gratis/index.php");
    $como_funciona = createDynamicFunction("como_funciona", "como_funciona/index.php");
    $consultoria_de_negocios = createDynamicFunction("consultoria_de_negocios", "consultoria_de_negocios/index.php");
    /**/$ideias_de_negocios = createDynamicFunction("ideias_de_negocios", "consultoria_de_negocios/ideias_de_negocios/index.php");
    /**//**/$_1000_ideias_de_negocios = createDynamicFunction("_1000_ideias_de_negocios", "consultoria_de_negocios/ideias_de_negocios/_1000_ideias_de_negocios/index.php");
    /**//**/$comercios_a_venda = createDynamicFunction("comercios_a_venda", "consultoria_de_negocios/ideias_de_negocios/comercios_a_venda/index.php");
    /**//**//**/$comercios_anunciar = createDynamicFunction("comercios_anunciar", "consultoria_de_negocios/ideias_de_negocios/comercios_a_venda/anunciar/index.php");
    /**//**/$franquias = createDynamicFunction("franquias", "consultoria_de_negocios/ideias_de_negocios/franquias/index.php");
    /**//**/$negocios_com_pouco_dinheiro = createDynamicFunction("negocios_com_pouco_dinheiro", "consultoria_de_negocios/ideias_de_negocios/negocios_com_pouco_dinheiro/index.php");
    /**//**/$negocios_para_trabalhar_em_casa = createDynamicFunction("negocios_para_trabalhar_em_casa", "consultoria_de_negocios/ideias_de_negocios/negocios_para_trabalhar_em_casa/index.php");
    /**//**/$parcerias_e_sociedades = createDynamicFunction("parcerias_e_sociedades", "consultoria_de_negocios/ideias_de_negocios/parcerias_e_sociedades/index.php");
    /**//**//**/$parcerias_anunciar = createDynamicFunction("parcerias_anunciar", "consultoria_de_negocios/ideias_de_negocios/parcerias_e_sociedades/anunciar/index.php");
    $consultoria_empresarial_gratuita = createDynamicFunction("consultoria_empresarial_gratuita", "consultoria_empresarial_gratuita/index.php");
    $consultoria_juridica = createDynamicFunction("consultoria_juridica", "consultoria_juridica_gratuita/index.php");
    $master_contato_text  = createDynamicFunction("contato", "contato/index.php");
    $cursos_gratis = createDynamicFunction("cursos_gratis", "cursos_gratis/index.php");
    $master_depoimentos_text = createDynamicFunction("master_depoimentos_text", "depoimentos/index.php");
    $politica_de_privacidade = createDynamicFunction("politica_de_privacidade", "politica_de_privacidade/index.php");
    $porque_trocar_de_contador = createDynamicFunction("porque_trocar_de_contador", "porque_trocar_de_contador/index.php");
    $recuperacao_fiscal = createDynamicFunction("recuperacao_fiscal", "recuperacao_fiscal/index.php");
    $master_servicos_planos_text = createDynamicFunction("master_servicos_planos_text", "servicos_planos/index.php");
    $vantagens = createDynamicFunction("vantagens", "vantagens/index.php");

 

    $materias = createDynamicFunction("materias", "materias/index.php");
    
    
    



    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");
    // $abertura_de_empresa_gratis = createDynamicFunction("abertura_de_empresa_gratis", "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php");



    // function abertura_de_empresa_gratis()
    // {
    //     global $id;
    //     include "src/head.php";
    //     include "src/header.php";
    //     include "abertura-de-empresa-gratis/abertura_de_empresa_gratis.php";
    //     include "src/footer.php";
    // }




    // function master_como_funciona_text()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/como_funciona.php";
    //     include "includes/footer.php";
    // }
    // function master_contato_text()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/contato_page.php";
    //     include "includes/footer.php";
    // }
    // function master_depoimentos_text()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/depoimentos.php";
    //     include "includes/footer.php";
    // }
    // function master_servicos_planos_text()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/servicos_planos.php";
    //     include "includes/footer.php";
    // }
    // function master_vantagens_text()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/vantagens.php";
    //     include "includes/footer.php";
    // }

    // function consultoria_de_negocios()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/consultoria_de_negocios.php";
    //     include "includes/footer.php";
    // }

    // function ideias_de_negocios()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/ideias_de_negocios.php";
    //     include "includes/footer.php";
    // }

    // function porque_trocar_de_contador()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/porque_trocar_de_contador.php";
    //     include "includes/footer.php";
    // }

    // function _1000_ideias_de_negocios()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/_1000_ideias_de_negocios.php";
    //     include "includes/footer.php";
    // }

    // function comercios_a_venda()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/comercios_a_venda.php";
    //     include "includes/footer.php";
    // }

    // function comercios_anunciar()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/comercios_anunciar.php";
    //     include "includes/footer.php";
    // }

    // function franquias()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/franquias.php";
    //     include "includes/footer.php";
    // }

    // function negocios_com_pouco_dinheiro()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/negocios_com_pouco_dinheiro.php";
    //     include "includes/footer.php";
    // }

    // function negocios_para_trabalhar_em_casa()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/negocios_para_trabalhar_em_casa.php";
    //     include "includes/footer.php";
    // }

    // function parcerias_e_sociedades()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/parcerias_e_sociedades.php";
    //     include "includes/footer.php";
    // }

    // function parcerias_anunciar()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/parcerias_anunciar.php";
    //     include "includes/footer.php";
    // }

    // function consultoria_juridica()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/consultoria_juridica_gratuita.php";
    //     include "includes/footer.php";
    // }

    // function recuperacao_fiscal()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/recuperacao_fiscal.php";
    //     include "includes/footer.php";
    // }

    // function cursos_gratis()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/cursos_gratis.php";
    //     include "includes/footer.php";
    // }

    // function materias()
    // {
    //     global $id;
    //     include "includes/head.php";
    //     include "includes/header.php";
    //     include "includes/materias.php";
    //     include "includes/footer.php";
    // }


    // echo getcwd();

    // $new_path = dirname($path);



} else {
    header("location:https://senae.com.br");
}
