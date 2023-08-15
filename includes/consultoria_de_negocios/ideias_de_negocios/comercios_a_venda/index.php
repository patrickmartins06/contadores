<?php

$url_atual = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url_atual, '?entrar-em-contato') !== false) {

    if (isset($_GET['cod'])) {
        $cod = $_GET['cod'];
        $valor;
        $titulo;



        $sql22 = "SELECT * FROM `comercios` WHERE `cod` = '$cod'";

        // echo $sql22;
        $result22 = $conn->query($sql22);

        if ($result22->num_rows > 0) {
            //Mostra os dados de cada linha
            while ($data = $result22->fetch_assoc()) {
                $valor = $data['valor'];
                $titulo = $data['titulo'];
            }
        }

?>
        <script>
            // localStorage.setItem("comercio_a_venda", "<?= $cod ?>" + " - R$ " + valor + " - " + titulo)
            localStorage.setItem("comercio_a_venda", "<?= $cod ?>" + " - R$ " + "<?= $valor ?>" + " - " + "<?= $titulo ?>")
        </script>
    <?php
    }


    ?>
    <script>
        var page_title = "Comércios - Entrar em Contato";
    </script>
    <div id="content_senae" style="width: 100%;max-width: 1100px;margin: auto;padding: 40px 0;">
        <style>
            @media only screen and (max-width: 600px) {
                #content {
                    padding: 0 20px
                }
            }

            #c_j_f form {
                display: grid
            }

            #c_j_f input {
                height: 3em;
                width: 100%
            }

            #c_j_f textarea {
                height: 10em
            }

            #c_j_f input,
            #c_j_f textarea {
                margin: .5em 0;
                border: 1px solid #ccc;
                border-radius: 9px;
                padding: 20px !important;
                width: 100%;
            }

            #c_j_f h3 {
                margin: .5em 0
            }

            #c_j_f .submit {
                border-bottom: 1px solid #ccc;
                background: #0b4e9a;
                color: #fff;
                float: right;
                width: 9em
            }
        </style>

        <script>
            window.onload = function() {
                var comercio = localStorage.getItem("comercio_a_venda")
                document.querySelector('input[class="title"]').value = comercio
            }
        </script>

        <h1 style="font-family:verdana;text-align:center">Entrar em Contato - Comércios à Venda</h1>



        <!-- <div style="margin-bottom:50px;margin-top:50px">
            [pesquisar_consultor]
        </div> -->

        <script>
            function submitForm_a() {
                document.querySelector(".cod_acesso").value = localStorage.getItem("consultorCod")
                document.querySelector("#contato").submit()
            }
        </script>

        <div id="c_j_f" class="ob_hd consultar_comercio_a_venda form_hidden_if_not_consultor">

            <form method="POST" action="https://senae.com.br/scripts/email/enviar_email.php?fm=consulta-comercio" id="contato" enctype="multipart/form-data">
                <span style="text-align: center;font-size: 16px;color: #555;padding: 0 20px;width: 100%;margin-bottom: 20px;" id="title_ref"></span>
                <input onchange="defineEmail()" name="nome" class="nome" placeholder="Seu Nome">
                <input onchange="defineEmail()" name="email" class="email" placeholder="Seu E-mail">
                <input onchange="defineEmail()" name="fone" class="fone" placeholder="Seu Whats">
                <input onchange="defineEmail()" name="title" class="title" placeholder="Id do Comércio à Venda" style="opacity: 1;opacity:.7;pointer-events:none;display:none">
                <input value="0" type="hidden" name="title2" class="title2">
                <input value="<?php echo $cod_contador; ?>" type="hidden" name="idConsultor" class="idConsultor">
                <input value="0" type="hidden" name="cod_comercio" class="cod_comercio">
                <!-- <label class="nomeConsultorForm">
                    <span>
                        <input  name="consultor" class="consultor" placeholder="Nome do Consultor"><br>
                    </span>

                </label> -->
                <input type="hidden" name="cod_acesso" class="cod_acesso" placeholder="Código de Acesso">
                <textarea onchange="defineEmail()" name="mensagem" class="mensagem" placeholder="Sua Mensagem"></textarea>
                <span>
                    <button onclick="submitForm_a()" type="button" style="background: #0b4e9a;color: #fff;float: right;width: 9em;margin: .5em 0;border: 1px solid #ccc;border-bottom-color: rgb(204, 204, 204);border-bottom-style: solid;border-bottom-width: 1px;border-radius: 9px;padding: .5em;font-weight: 555;">Enviar</button>
                </span>
            </form>
        </div>

        <style>
            #contato {
                max-width: 500px;
                margin: auto;
                width: 100%
            }

            @media only screen and (max-width: 600px) {

                #c_j_f input,
                #c_j_f textarea,
                #title_ref {
                    padding: 5px 15px !important;
                    width: calc(100% - 30px) !important;
                }

                #content_senae {
                    padding: 0 20px !important;
                    width: calc(100% - 40px) !important;
                }

                #c_j_f {
                    margin-bottom: 30px !important
                }
            }
        </style>

        <script>
            function set_entrar_conato_val() {
                if (localStorage.getItem("comercio_a_venda") != null) {
                    document.querySelector(".title").value = "COMÉRCIO: " + localStorage.getItem("comercio_a_venda")
                    document.querySelector("#title_ref").textContent = "COMÉRCIO: " + localStorage.getItem("comercio_a_venda")

                    document.querySelector(".cod_comercio").value = localStorage.getItem("comercio_a_venda").split(" - ")[0]

                    document.querySelector('input[class="title2"]').value = localStorage.getItem("comercio_a_venda")
                }
                if (localStorage.getItem("consultorNome") != null) {
                    document.querySelector(".consultor").value = "CONSULTOR: " + localStorage.getItem("consultorNome")
                    document.querySelector(".idConsultor").value = localStorage.getItem("consultorCod")
                }
            }

            window.onload = function() {
                set_entrar_conato_val()
            }
            hide_show_form()
        </script>

    </div>

<?php

} else {

?>


    <div>
        <img class="senae_header_img" src="https://senae.org/imgs/comercios a venda_e.webp">

        <div id="content_senae">

            <style>
                .senae_header_img {
                    margin-bottom: 50px !important;
                    width: 100%;
                    margin-left: 0
                }

                #content_senae {
                    max-width: 1100px;
                    margin: auto;
                    display: block;
                }

                .fl-row-fixed-width {
                    max-width: 100%;
                }

                .fl-module-content {
                    margin: 0
                }

                .fl-row-content-wrap {
                    padding: 0
                }

                @media only screen and (max-width: 600px) {
                    .senae_header_img {
                        display: none !important;
                    }
                }
            </style>

            <!--CSS BEGIN-->
            <style>
                #anuncie_estabelecimento h1 {
                    padding: 0 15px;
                    text-align: center
                }

                @media only screen and (max-width: 600px) {
                    #anuncie_estabelecimento {
                        display: flex;
                        flex-direction: column
                    }

                    #anuncie_estabelecimento span {
                        display: flex;
                        flex-direction: column;
                        text-align: center;
                        margin: 0 2em;
                        line-height: 25px;
                        margin-top: 30px
                    }
                }

                #arrowsK i {
                    background: #fff7;
                    padding: 10px;
                    border-radius: 999px;
                }

                #icomercios1 {
                    border: 0;
                    width: 100%;
                    /* overflow: hidden !important; */
                }

                #adicionar_comercio {
                    justify-content: center
                }

                #adicionar_comercio>div {
                    max-width: 1100px;
                }

                #adicionar_comercio input,
                #adicionar_comercio textarea,
                #adicionar_comercio select {
                    margin-bottom: 5px;
                    border-radius: 5px
                }

                #adicionar_comercio .botoes {
                    display: flex;
                    justify-content: end;
                }

                #adicionar_comercio .botoes input,
                #adicionar_comercio .botoes button {
                    border: 1px solid #fff !important;
                    border: 1px solid #fff !important;
                    padding: 10px;
                    font-size: 15px;
                    margin: 0;
                    border-radius: 5px;
                    margin: 0 5px;
                    background: orange;
                    color: #fff;
                    margin-top: 5px
                }

                /*Image Upload*/
                #input_files_a {
                    display: flex;
                    justify-content: space-around;
                    margin-bottom: 5px;
                    flex-direction: column;
                }

                #input_files_a>div>div {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin: 5px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    width: 100%;
                }

                #input_files_a div span:nth-child(2) {
                    background: #eee !important;
                    height: 155px;
                    width: 100%;
                }



                #input_files_a label {
                    height: 150px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                    cursor: pointer;
                    transition: .3s
                }

                #input_files_a label:hover {
                    opacity: .5
                }



                #anuncie_estabelecimento span:hover {
                    filter: saturate(1.2);
                    cursor: pointer;
                    opacity: .8
                }


                #selectImages {
                    margin-top: 10px;
                    background: #0000;
                    padding: 7px;
                    border-radius: 5px
                }

                #selectImages img {
                    width: 50px;
                    height: 50px;
                    border-radius: 10px;
                    cursor: pointer;
                    transition: .3s;
                    opacity: 1;
                    margin: 0 5px;
                }

                #selectImages img:hover {
                    opacity: .75
                }

                #painelVisual i {
                    filter: drop-shadow(0 0 2px #000);
                    font-size: 40px;
                    margin: 0 10px;
                    color: #fff;
                    cursor: pointer;
                }

                #painelVisual i:hover {
                    opacity: .75
                }

                .imgActive {
                    opacity: 1 !important;
                    scale: 1.2
                }

                @media only screen and (max-width: 600px) {

                    #img_preview_main {
                        width: 90% !important;
                        height: 100% !important;
                        z-index: 777 !important;
                        background-size: cover !important;
                        border-radius: 10px;
                    }

                    #arrowsK {
                        width: 90% !important;
                    }

                    #selectImages {
                        display: grid;
                        grid-template-columns: auto auto auto auto;
                    }

                    #selectImages img {
                        margin-bottom: 10px
                    }

                }

                #img_preview_main {
                    border-radius: 10px
                }

                #iPesquisarConsultor {
                    border: 0;
                    width: 603px;
                    height: 412px;
                    /* overflow: hidden !important; */
                    margin: auto;

                }



                #iPesquisarConsultor {
                    border: 0;
                    width: 603px;
                    height: 412px;
                    /* overflow: hidden !important; */
                    margin: auto;
                    display: block;
                }

                #c_j_f form {
                    display: grid
                }

                #c_j_f input {
                    height: 3em;
                    width: 100%
                }

                #c_j_f textarea {
                    height: 10em
                }

                #c_j_f input,
                #c_j_f textarea {
                    margin: .5em 0;
                    border: 1px solid #ccc;
                    border-radius: 9px;
                    padding: 20px !important width: 100%;
                }

                #c_j_f h3 {
                    margin: .5em 0
                }

                #c_j_f .submit {
                    border-bottom: 1px solid #ccc;
                    background: #0b4e9a;
                    color: #fff;
                    float: right;
                    width: 9em
                }

                .nomeConsultorForm sp {
                    position: absolute;
                    bottom: .825em;
                    right: .3em;
                    font-size: 1.2em;
                    background: #3ae;
                    color: #fff;
                    width: 1.7em;
                    text-align: center;
                    border-radius: 2em;
                    font-weight: 999
                }

                #iPesquisarConsultor {
                    transition: 0.5s;
                    border-radius: 1em
                }

                .title {
                    pointer-events: none;
                    color: #555
                }

                .nomeConsultorForm {
                    display: block ruby;
                    position: relative
                }

                .nomeConsultorForm sp {
                    position: absolute;
                    bottom: .125em;
                    right: 0;
                    font-size: 1.5em;
                    background: #3ae;
                    color: #fff;
                    width: 1.7em;
                    text-align: center;
                    border-radius: 2em;
                    font-weight: 999
                }

                .nomeConsultorForm sp2 {
                    position: inherit;
                    width: 10em;
                    background: #28333e;
                    color: #fff;
                    padding: 1em;
                    margin: 1.2em;
                    border-radius: 0em 1em 1em 1em;
                    font-size: .6em;
                    visibility: hidden;
                    z-index: 999;
                    transition: .3s;
                    opacity: 0;
                    font-weight: 222
                }

                .nomeConsultorForm sp2 a {
                    cursor: pointer;
                    color: #3ae
                }

                .nomeConsultorForm sp2 a:hover {
                    opacity: .7
                }

                .nomeConsultorForm sp:hover sp2 {
                    visibility: visible;
                    opacity: 1
                }

                #icomercios1 {
                    margin-top: 10px
                }

                @media only screen and (max-width: 600px) {
                    #show_form_aDesk {
                        display: none !important;
                    }

                    #show_form_aMobile {
                        display: block !important;
                    }
                }

                @media only screen and (min-width: 600px) {
                    #show_form_aDesk {
                        display: block !important;
                    }

                    #show_form_aMobile {
                        display: none !important;
                    }
                }

                /* #btn_voltar,
#iPesquisarConsultor,
#precisa_consultor_h1,
#adicionar_comercio,
#nomeConsultorForm,
#contato {
display: none;
}

#input_files_a input,
#ob_hd {
display: none;
} */

                #iPesquisarConsultor {
                    max-width: 555px;
                }
            </style>
            <!--CSS END-->

            <!--JS BEGIN-->
            <script>
                function change_image_comercio_view(el) {

                    if (document.querySelector(".imgActive") != undefined) {
                        document.querySelector(".imgActive").classList.remove("imgActive")
                    }

                    el.classList.add("imgActive")
                    var targetImage = el.getAttribute("src")
                    document.querySelector("#img_preview_main").style.backgroundImage = "url(" + targetImage + ")"

                }

                function see_images_comercios(targetImage, imagesList, selectImagesHTML) {
                    // console.log(targetImage);
                    // console.log(imagesList);
                    // console.log(selectImagesHTML)
                    if (document.querySelector("#painelVisual") != undefined) {
                        document.querySelector("#painelVisual").remove()
                    }

                    document.querySelector("body").insertAdjacentHTML("beforeend", `

    <div id="painelVisual" style="position: fixed;left: 0;top: 0;width: ` + window.innerWidth + `px;height:` + window
                        .innerHeight +
                        `px ;display: flex;align-items: center;justify-content: center;flex-direction: column;z-index: 999;">

          <div onclick="blackQuit()" style="background: #000c;width: 100%;height: 100%;position: absolute;z-index: 666;"></div>
    <div style="width: 100%;height: 80%;display: flex;align-items: center;justify-content: center;flex-direction: column;position: relative;">

                <div id="img_preview_main" style="width: 80%;height: 100%;z-index: 777;background-image: url(https://senae.com.br/scripts/comercios/` +
                        targetImage + `);background-repeat: no-repeat;background-size: cover;background-position: center;">
                </div>

                <div id="arrowsK" style="position: absolute;width: 80%;display: flex;justify-content: space-between;z-index: 888;">
                      <i onclick="visual_left_arrow()" class="fa fa-angle-double-left" aria-hidden="true" style=""></i>

                      <i onclick="visual_right_arrow()" class="fa fa-angle-double-right" aria-hidden="true" style=""></i>
                </div>
          </div>

          <div id="selectImages" style="z-index: 888;">  

                    ` + selectImagesHTML + `

          </div>

    </div>

      `)

                }

                function blackQuit() {
                    if (document.querySelector("#painelVisual") != undefined) {
                        document.querySelector("#painelVisual").remove()
                    }
                }

                function visual_left_arrow() {
                    if (document.querySelector(".imgActive").previousElementSibling != null) {
                        var prevImg = document.querySelector(".imgActive").previousElementSibling.getAttribute("src")
                        document.querySelector("#img_preview_main").style.backgroundImage = "url(" + prevImg + ")"

                        document.querySelector(".imgActive").previousElementSibling.classList.add("imgActive")

                        if (document.querySelectorAll(".imgActive")[1] != undefined) {
                            document.querySelectorAll(".imgActive")[1].classList.remove("imgActive")
                        }
                    }
                }

                function visual_right_arrow() {
                    if (document.querySelector(".imgActive").nextElementSibling != null) {
                        var prevImg = document.querySelector(".imgActive").nextElementSibling.getAttribute("src")
                        document.querySelector("#img_preview_main").style.backgroundImage = "url(" + prevImg + ")"

                        document.querySelector(".imgActive").nextElementSibling.classList.add("imgActive")

                        if (document.querySelectorAll(".imgActive")[0] != undefined) {
                            document.querySelectorAll(".imgActive")[0].classList.remove("imgActive")
                        }
                    }
                }
            </script>
            <!--JS END-->

            <!--1-->

            <div id="anuncie_estabelecimento" style="display: flex;align-items: center;display:none!important">

                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/" style="text-decoration:none" class="only_mobile">
                    <span class="only_mobile" id="" onclick="show_form_a()" style="font-size: 23px;padding: 1em;font-weight: 555;border-radius: 12px;box-shadow: 0 0 1em #0003 inset;transition: .3s;color:#fff;">Quero Anunciar</span>
                </a>


            </div>


            <?php include "/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/mensagem_enviado_com_sucesso.php"; ?>

            <?php
            //include "/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/comercios_a_venda2.php"; 
            //Abaixo conteudo do include
            ?>

            <?php // require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ 
            ?>
            <?php
            include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

            ?>

            <!DOCTYPE html>
            <html lang="pt-br">

            <head>
                <?php include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/functions_sc.php';
                // echo $favicon; 
                ?>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Comercios em Destaque</title>
                <link rel="stylesheet" href="w_style.css">

                <style>
                    .cadContato div {}

                    .cadContato div img {
                        height: 55px;
                        margin: 0 .1em;
                        border-radius: 9px;
                        cursor: pointer;
                        transition: .3s;
                        width: 55px;
                    }

                    .cadContato div img:hover {
                        opacity: .75
                    }

                    body {
                        font-family: 'verdana';
                        color: #000b;

                    }

                    .cadContato div {
                        position: relative;
                        border: 0px solid #eee;
                        border-radius: 9px;
                        scroll-behavior: smooth;
                    }

                    .cadContato>div>div {
                        border: 0 !important;
                    }

                    .cadContato div .slide_left {
                        position: absolute;
                        left: 0;
                        top: 45%;
                        display: none;
                    }

                    .cadContato div .slide_right {
                        position: absolute;
                        right: 0;
                        top: 45%;
                        display: none;
                    }

                    .cadContato {
                        margin: 3em 0em;
                        margin-top: 0px !important;
                    }

                    .cadContato p {
                        text-align: justify;
                    }

                    .slide_left,
                    .slide_right {
                        position: absolute;
                        top: 45%;
                        border: 1px inset #0005;
                        border-radius: 9px;
                        color: #0005;
                        background: azure;
                        font-weight: 999;
                        box-shadow: 0 0 15px #0004 inset;
                        text-shadow: 0 0 6px #fff7;
                        height: 1.7em;
                        width: 1.4em;
                        font-size: 1.1em;
                        padding: 0;
                        margin: 0em 1em;
                        transition: 0.3s
                    }

                    .slide_left:hover,
                    .slide_right:hover {
                        opacity: .8;
                        cursor: pointer
                    }

                    @media only screen and (max-width: 600px) {
                        .cadContato {
                            margin: 3em 2em;
                        }
                    }
                </style>
                <style>
                    .sep_post h3,
                    .sep_post div {
                        font-family: verdana;
                        color: #333d
                    }

                    .sep_post div {
                        width: 90%;
                        margin: auto;
                        text-align: justify;
                    }

                    .cadContato h3 {
                        text-align: left;
                    }

                    .sep_post h3 a {
                        color: #fffe;
                        background: orange;
                        border-radius: 9px;
                        padding: 0.2em 1em;
                        border: 2px inset orange;
                        box-shadow: 0 0 1em #0003 inset;
                        transition: 0.3s
                    }

                    .sep_post h3 a:hover {
                        box-shadow: 0 0 3em #0003 inset;
                    }

                    .sep_post a b::selection {
                        background: 0;
                        color: 0;
                    }

                    .sep_post {
                        border: 2px inset #3ae3;
                        width: 75%;
                        border-radius: 9px;
                        margin: 3em auto;
                        padding-bottom: 1em;
                        box-shadow: 0 0 7em #0005 inset;
                        background: #3ae;
                    }

                    .sep_post div section,
                    .sep_post h3 {
                        color: #fff;
                        text-shadow: 0 0 1em #fff5
                    }

                    .cadContato a {
                        color: #fff;
                        background: #0f6;
                        border-radius: 0.3em;
                        padding: 0 0.2em;
                        text-decoration: none;
                        text-shadow: 0px 0 3px #000c;
                        transition: .3s;
                    }

                    .cadContato a:hover {
                        opacity: .8;
                    }

                    img {
                        color: #0000 !important;
                    }
                </style>
                <style>
                    #selectImages {
                        margin-top: 10px;
                        background: #0000;
                        padding: 7px;
                        border-radius: 5px
                    }

                    #selectImages img {
                        width: 50px;
                        height: 50px;
                        border-radius: 10px;
                        cursor: pointer;
                        transition: .3s;
                        opacity: 1;
                        margin: 0 5px;
                    }

                    #selectImages img:hover {
                        opacity: .75
                    }

                    #painelVisual i {
                        filter: drop-shadow(0 0 2px #000);
                        font-size: 40px;
                        margin: 0 10px;
                        color: #fff;
                        cursor: pointer;
                    }

                    #painelVisual i:hover {
                        opacity: .75
                    }

                    .imgActive {
                        opacity: 1 !important;
                        scale: 1.2
                    }

                    .cadContato img {
                        margin-bottom: 10px !important;
                    }

                    @media only screen and (max-width: 600px) {
                        .cadContato>div>div {
                            padding: 0 !important;
                            display: grid;
                            grid-template-columns: auto auto auto auto;
                        }
                    }
                </style>
                <style>
                    @media only screen and (min-width: 600px) {
                        .cadContato div img {
                            width: 95% !important;
                            height: 160px !important;
                        }

                        .cadContato>div>div {
                            display: grid;
                            grid-template: auto / auto auto auto auto auto auto
                        }
                    }
                </style>
                <style>
                    @media only screen and (max-width: 600px) {
                        #filtro_uf_cid {
                            display: flex;
                            flex-direction: column;
                            padding: 0 2em
                        }

                        #filtro_uf_cid>div {
                            display: flex;
                        }

                        #filtro_uf_cid select {
                            width: 100% !important;
                            margin: 5px 5px;
                        }

                        #filtro_uf_cid>div>select:first-child {
                            width: 7em !important;
                        }

                        #filtro_uf_cid input {
                            margin: 5px 0px !important;
                        }

                        .fornecedores_pesquisa_box {
                            margin-top: 25px;
                        }
                    }

                    @media only screen and (min-width: 600px) {
                        #filtro_uf_cid {
                            display: flex;
                            width: 100%;
                            align-items: center;
                            justify-content: center;
                        }

                        #filtro_uf_cid input {
                            margin-left: 5px
                        }
                    }
                </style>
                <style>
                    #arrowsK i {
                        background: #fff7;
                        padding: 10px;
                        border-radius: 999px;
                    }
                </style>
                <style>
                    #filtro_uf_cid>a {
                        display: flex;
                        margin-left: 70px
                    }

                    #filtro_uf_cid>div {
                        display: flex;
                        flex-direction: row !important;
                    }

                    @media only screen and (max-width: 600px) {
                        * {
                            outline: none
                        }

                        #filtro_uf_cid>div {
                            display: flex;
                            flex-direction: column !important;
                        }

                        #filtro_uf_cid select {
                            margin-left: 0;
                            text-align: center;
                            text-transform: uppercase
                        }

                        #filtro_uf_cid>a {
                            margin-left: auto;
                            margin-right: auto;
                            margin-top: 20px
                        }

                    }

                    @media only screen and (max-width: 600px) {
                        .hide_mobile {
                            display: none !important;
                        }
                    }

                    @media only screen and (min-width: 600px) {
                        #filtro_uf_cid>div>div {
                            flex-direction: row !important;
                            display: flex;
                        }

                        #filtro_uf_cid>div>div select {
                            margin-left: 5px
                        }
                    }
                </style>
            </head>

            <body style="margin: 0;">


                <div>
                    <div class="fornecedores_pesquisa_box">
                        <!-- <h3 style="margin-top: 0;">Pesquisar Comércios à Venda</h3> -->

                        <form method="post">
                            <div id="fnForm">
                                <div id="filtro_uf_cid">


                                    <h3 style="margin-top: 0;font-size: 32px;margin: 0;color: #30455c !important;font-weight: 755;">Comércios à Venda em Curitiba</h3>



                                    <div>
                                        <div>
                                            <select onchange="setCidade()" class="uf" type="text" name="uf" style="padding: 1em;min-height: 44px;display: block;display:none!important">
                                                <option value="0">ESTADO</option>
                                                <?php
                                                global $conn;
                                                $sql2 = "SELECT * FROM `comercios` GROUP BY uf HAVING COUNT(uf) > 1";
                                                //$sql2 = "SELECT DISTINCT uf FROM comercios";
                                                $records2 = mysqli_query($conn, $sql2);
                                                while ($data = mysqli_fetch_array($records2)) {
                                                ?>

                                                    <option value="<?php echo $data['uf']; ?>"><?php echo $data['uf']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <select style="width: 15em;display:none!important" class="cidade1" type="text" name="cidade1" style="padding: 1em;min-height: 44px;display: block;">
                                                <option value="0">Cidade</option>
                                                <?php
                                                global $conn;
                                                $sql2 = "SELECT * FROM `comercios` GROUP BY cidade HAVING COUNT(cidade) > 1";
                                                //$sql2 = "SELECT DISTINCT cidade FROM comercios";
                                                $records2 = mysqli_query($conn, $sql2);
                                                while ($data = mysqli_fetch_array($records2)) {
                                                ?>
                                                    <option value="<?php echo $data['cidade']; ?>"><?php echo $data['cidade']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <!-- <input class="codacesso" type="text" name="codacesso" placeholder="Código de Acesso"> -->
                                        <input onclick="parent.resizeIframe(this)" type="submit" name="button1" class="button1 on1 pesquisarC1" value="Pesquisar" style="padding: 1em;min-height: 44px;display: block;display:none!important" />
                                    </div>


                                    <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/" style="text-decoration:none" class="">
                                        <span class="" id="show_form_aDesk" onclick="show_form_a()" style="font-size: 23px;color: #fff;background: orange;padding: 1em;font-weight: 555;border-radius: 12px;box-shadow: 0 0 1em #0003 inset;transition: .3s;color:#fff;">Quero Anunciar</span>
                                    </a>



                                </div>
                                <br>
                                <div id="sep_result">
                                    <?php

                                    if (array_key_exists('button1', $_POST)) {
                                        button1();
                                    }
                                    function button1()
                                    {
                                        global $conn;

                                        if (isset($_POST["uf"])) {

                                            $uf = $_POST["uf"];
                                            $cidade = $_POST["cidade1"];
                                        } else {

                                            $uf = "PR";
                                            $cidade = "Curitiba";
                                        }

                                        //$cidade = "Curitiba";
                                        //$sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' ORDER BY created_at DESC";
                                        $sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' AND `status` = 'publicado' ORDER BY created_at DESC";
                                        //$sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' `status` = 'publicado' ORDER BY cod DESC";
                                        $records2 = mysqli_query($conn, $sql2);

                                        global $actual_logon;


                                        while ($data = mysqli_fetch_array($records2)) {

                                    ?>
                                            <!-- <div class="cadContato">

                                    <?php if (isset($_COOKIE["userLogedin"])) {
                                                // echo '
                                                //     <a style="background:#3aecc" target="_blank" href="https://senae.com.br/scripts/comercios/edit.php?id=' . $data['id'] . '">Editar</a>
                                                //     <a style="background:orangered" target="_blank" href="https://senae.com.br/scripts/comercios/del.php?id=' . $data['id'] . '">Excluir</a>
                                                // ';
                                            } ?>

                                    <div class="headr_">
                                        <div>
                                            <span><?php echo $data['cod']; ?> -
                                                R$ <?php echo $data['valor']; ?></span>
                                        </div>

                                        <div>
                                            <h3><?php echo $data['titulo']; ?></h3>
                                        </div>

                                        <span><?php echo $data['bairro']; ?> - <?php echo $data['rua']; ?></span>

                                        <button type="button" cod="<?php echo $data['cod']; ?>" valor="<?php echo $data['valor']; ?>" titulo="<?php echo $data['titulo']; ?>" onclick="i_entrar_em_contato(this)" style="color: #fff;background: #0f6;border-radius: 0.3em;padding: 0 0.2em;text-decoration: none;text-shadow: 0px 0 3px #000c;transition: .3s;font-weight: 777;font-size: 19px;border: 0;padding: 1px 5px;cursor: pointer;">Entrar em Contato</button>

                                    </div>

                                    <div>
                                        <p><?php echo $data['descr']; ?></p>
                                    </div>

                                    <div>
                                        <div>

                                            <?php

                                            //if ($data['imagem_1'] != "") {
                                            if (strlen($data['imagem_1']) > 15) {
                                                echo "<script>console.log(" . "x" . ")</script>";
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_1'] . '">';
                                            }
                                            if (strlen($data['imagem_2']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_2'] . '">';
                                            }
                                            if (strlen($data['imagem_3']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_3'] . '">';
                                            }
                                            if (strlen($data['imagem_4']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_4'] . '">';
                                            }
                                            if (strlen($data['imagem_5']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_5'] . '">';
                                            }
                                            if (strlen($data['imagem_6']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_6'] . '">';
                                            }
                                            if (strlen($data['imagem_7']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_7'] . '">';
                                            }
                                            if (strlen($data['imagem_8']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_8'] . '">';
                                            }
                                            if (strlen($data['imagem_9']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_9'] . '">';
                                            }
                                            if (strlen($data['imagem_10']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_10'] . '">';
                                            }

                                            ?>
                                        </div>
                                        <div style="display: contents;">
                                            <button type="button" onclick="slide_left(this)" class="slide_left">
                                                <i class="fas fa-angle-double-left"></i></button>
                                            <button type="button" onclick="slide_right(this)" class="slide_right">
                                                <i class="fas fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div> -->

                                            <!--##############################-->
                                            <div class="cadContato" style="box-shadow: 0 0 9px -5px;border-radius: 10px;color: #fff;padding: 0 !important;background: none !important;border: 3px solid #3167C7 !important;">
                                                <div class="headr_" style="display: flex;flex-direction: column;background: #f5f5f5;color: #036;padding: 15px 15px;border-radius: 10px 10px 0 0;border-bottom: 2px solid #03c2;">

                                                    <div style="display: block;">
                                                        <h3 style="text-align: center;width: 100%;margin-top: 0;margin-bottom: 15px;"><?php echo $data['titulo']; ?></h3>
                                                    </div>
                                                    <div style="width: 100%;display: block;font-size: 15px;display: flex;flex-direction: row;padding-left:0">

                                                        <span style="font-size: inherit;/*! margin-top: 15px; */text-align: center;width: 100%;display: block;/*! font-weight: 555; */background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;">COD: <?php echo $data['cod']; ?></span>


                                                        <span style="font-size: inherit;/*! margin-top: 15px; */text-align: center;width: 100%;display: block;/*! font-weight: 555; */background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;margin-left: 15px;">R$ <?php echo $data['valor']; ?></span>



                                                    </div> 
                                                    <span style="margin-bottom: 10px;background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;margin-top: 10px;padding-left: 10px;text-align:center"><?php echo $data['bairro']; ?> - <?php echo $data['rua']; ?></span>
                                                    <button class="entrar_contato_btn" type="button" cod="<?php echo $data['cod']; ?>" valor="<?php echo $data['valor']; ?>" titulo="<?php echo $data['titulo']; ?>" onclick="i_entrar_em_contato(this)" style="color: #fff;border-radius: 0.3em;text-decoration: none;text-shadow: 0px 0 3px #333c;transition: .3s;font-weight: 777;font-size: 19px;border: 0;padding: 1px 5px;cursor: pointer;height: 49px;background: #3167C7;outline: none;">Entrar em Contato</button>
                                                </div>
                                                <div style="background: #f5f5f5;border-bottom: 2px solid #03c2;background: #f5f5f5;border-radius: 0;">
                                                    <p style="background: #f5f5f5;color: #333;border-radius: 0;padding: 15px 16px;margin-bottom: 0;margin-top: 0;"><?php echo $data['descr']; ?></p>
                                                </div>
                                                <div style="border-radius: 0 0 10px 10px;background: #0000;">
                                                    <div class="comercio_imgs" style="display: flex;flex-direction: row;flex-wrap: wrap;align-items: center;justify-content: space-evenly;margin-top: 0;background: #f5f5f5;padding-top: 10px !important;border-radius: 0 0 10px 10px;padding: 12px 3px !important;">

                                                        <?php

                                                        //if ($data['imagem_1'] != "") {
                                                        if (strlen($data['imagem_1']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_1'] . '">';
                                                        }
                                                        if (strlen($data['imagem_2']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_2'] . '">';
                                                        }
                                                        if (strlen($data['imagem_3']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_3'] . '">';
                                                        }
                                                        if (strlen($data['imagem_4']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_4'] . '">';
                                                        }
                                                        if (strlen($data['imagem_5']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_5'] . '">';
                                                        }
                                                        if (strlen($data['imagem_6']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_6'] . '">';
                                                        }
                                                        if (strlen($data['imagem_7']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_7'] . '">';
                                                        }
                                                        if (strlen($data['imagem_8']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_8'] . '">';
                                                        }
                                                        if (strlen($data['imagem_9']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_9'] . '">';
                                                        }
                                                        if (strlen($data['imagem_10']) > 15) {
                                                            echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_10'] . '">';
                                                        }

                                                        ?>

                                                    </div>
                                                    <div style="display: contents;">
                                                        <button type="button" onclick="slide_left(this)" class="slide_left">
                                                            <i class="fas fa-angle-double-left" aria-hidden="true"></i></button>
                                                        <button type="button" onclick="slide_right(this)" class="slide_right">
                                                            <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--##############################-->
                                    <?php
                                        }
                                    }
                                    button1()
                                    //FimPesquisa
                                    ?>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

                <script>
                    function p_see_images_comercios(el) {

                        var targetImage = el.getAttribute("src")

                        // console.log("x: " + targetImage)

                        var imagesList = [];

                        var selectImagesHTML = "";

                        for (i = 0; i < el.parentElement.childElementCount; i++) {

                            let img_url = el.parentElement.children[i].getAttribute("src");

                            if (img_url != "") {
                                imagesList.push(img_url)

                                if (img_url == targetImage) {
                                    selectImagesHTML = selectImagesHTML + `<img class="imgActive" loading="lazy" onclick="change_image_comercio_view(this)" src="https://senae.com.br/scripts/comercios/` + img_url + `">`
                                } else {
                                    selectImagesHTML = selectImagesHTML + `<img loading="lazy" onclick="change_image_comercio_view(this)" src="https://senae.com.br/scripts/comercios/` + img_url + `">`
                                }

                            }
                        }
                        //console.log(targetImage);console.log(imagesList);console.log(selectImagesHTML)
                        // parent.see_images_comercios(targetImage, imagesList, selectImagesHTML)
                        parent.see_images_comercios(el)

                    }
                </script>

                <script src="https://kit.fontawesome.com/e70d5ce241.js" crossorigin="anonymous"></script>
                <script>
                    window.onload = function() {
                        if (document.querySelectorAll('a[rel="noopener noreferrer"]').length > 1) {
                            document.querySelector(".acessarC1").style.display = "inline"
                            document.querySelector(".acessarC1").style.pointerEvents = "none"
                            document.querySelector(".pesquisarC1").style.display = "none"
                            document.querySelector("#dSubmit a").setAttribute('href', document.querySelector("#dP p a").getAttribute('href'))
                        }
                    }
                </script>
                <script>
                    function showContat() {
                        for (i = 0; i < document.querySelectorAll(".hidd").length; i++) {
                            document.querySelectorAll(".hidd")[i].classList.add("show")
                        }
                    }
                </script>

                <script>
                    function slide_right(obj) {
                        obj.parentElement.parentElement.children[0].scrollLeft = 2000;
                    }

                    p_see_images_comercios

                    function slide_left(obj) {
                        obj.parentElement.parentElement.children[0].scrollLeft = 000;
                    }
                </script>



                <script>
                    function saiba_mais(id) {
                        parent.saiba_mais(id)
                    }
                </script>

                <script>
                    function i_entrar_em_contato(elem) {
                        var cod = elem.getAttribute("cod")
                        var valor = elem.getAttribute("valor")
                        var titulo = elem.getAttribute("titulo")
                        //console.log(elem)
                        localStorage.setItem("comercio_a_venda", cod + " - R$ " + valor + " - " + titulo)

                        function reloadPage() {
                            document.querySelector('body').insertAdjacentHTML('beforeend', `
                                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/?entrar-em-contato" id="reloadPage">Reload</a>
                            `)
                            document.querySelector("#reloadPage").click()
                        };
                        setTimeout(function() {
                            reloadPage()
                        }, 50)
                    }
                </script>

                <script>
                    function change_image_comercio_view(el) {

                        if (document.querySelector(".imgActive") != undefined) {
                            document.querySelector(".imgActive").classList.remove("imgActive")
                        }

                        el.classList.add("imgActive")
                        var targetImage = el.getAttribute("src")
                        document.querySelector("#painelVisual img").setAttribute("src", targetImage)
                    }

                    function see_images_comercios(el) {

                        var targetImage = el.getAttribute("src")

                        var imagesList = [];

                        var selectImagesHTML = "";

                        for (i = 0; i < 10; i++) {

                            let img_url = el.parentElement.children[i].getAttribute("src");

                            if (img_url != "") {
                                imagesList.push(img_url)

                                if (img_url == targetImage) {
                                    selectImagesHTML = selectImagesHTML + `<img class="imgActive" loading="lazy" onclick="change_image_comercio_view(this)" src="` + img_url + `">`
                                } else {
                                    selectImagesHTML = selectImagesHTML + `<img loading="lazy" onclick="change_image_comercio_view(this)" src="` + img_url + `">`
                                }

                            }
                        }
                        if (document.querySelector("#painelVisual") != undefined) {
                            document.querySelector("#painelVisual").remove()
                        }

                        document.querySelector("body").insertAdjacentHTML("beforeend", `

<div id="painelVisual" style="position: fixed;left: 0;top: 0;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;">

    <div onclick="blackQuit()" style="background: #000c;width: 100%;height: 100%;position: absolute;z-index: 6;"></div>
<div style="width: 100%;height: 80%;display: flex;align-items: center;justify-content: center;flex-direction: column;position: relative;">

          <div style="width: 80%;height: 100%;z-index: 7;">
                <img style="width: 100%;height: 100%;border-radius: 10px;" src="` + targetImage + `">
          </div>

          <div id="arrowsK" style="position: absolute;width: 50%;display: flex;justify-content: space-between;z-index: 8;">
          <i onclick="visual_left_arrow()" class="fa fa-angle-double-left" aria-hidden="true" style="rotate: 0deg;"></i>

<i onclick="visual_right_arrow()" class="fa fa-angle-double-right" aria-hidden="true" style=""></i>
          </div>
    </div>

    <div id="selectImages" style="z-index: 8;">  

              ` + selectImagesHTML + `

    </div>

</div>

`)

                    }

                    function blackQuit() {
                        if (document.querySelector("#painelVisual") != undefined) {
                            document.querySelector("#painelVisual").remove()
                        }
                    }

                    function visual_left_arrow() {
                        if (document.querySelector(".imgActive").previousElementSibling != null) {
                            var prevImg = document.querySelector(".imgActive").previousElementSibling.getAttribute("src")
                            document.querySelector("#painelVisual img").setAttribute("src", prevImg)

                            document.querySelector(".imgActive").previousElementSibling.classList.add("imgActive")

                            if (document.querySelectorAll(".imgActive")[1] != undefined) {
                                document.querySelectorAll(".imgActive")[1].classList.remove("imgActive")
                            }
                        }
                    }

                    function visual_right_arrow() {
                        if (document.querySelector(".imgActive").nextElementSibling != null) {
                            var prevImg = document.querySelector(".imgActive").nextElementSibling.getAttribute("src")
                            document.querySelector("#painelVisual img").setAttribute("src", prevImg)

                            document.querySelector(".imgActive").nextElementSibling.classList.add("imgActive")

                            if (document.querySelectorAll(".imgActive")[0] != undefined) {
                                document.querySelectorAll(".imgActive")[0].classList.remove("imgActive")
                            }
                        }
                    }
                </script>

                <style>
                    .comercio_imgs img {
                        border: 3px solid #fff;
                        outline: 1px solid #03a3;
                    }

                    @media only screen and (min-width: 600px) {
                        .comercio_imgs {
                            display: flex;
                            flex-direction: row !important;
                            flex-wrap: wrap !important;
                            align-items: start !important;
                            justify-content: center !important;
                            margin: auto;
                        }

                        .comercio_imgs img {
                            width: 55px !important;
                            max-width: 198px;
                        }
                    }

                    .entrar_contato_btn {
                        transition: .3s;
                    }

                    .entrar_contato_btn:hover {

                        filter: saturate(1.25);
                    }

                    .fa.fa-angle-double-left:after {
                        content: '<'
                    }

                    .fa.fa-angle-double-right:after {
                        content: '>'
                    }
                </style>

            </html>
            <?php //}else{header("location:https://senae.com.br");} 
            ?>


            <?php
            //////// End conteudo do include: Comercios a Venda
            ?>


            <style>
                /*Mobile Obrigado pelo contato/ Pedido PopUp*/
                @media only screen and (max-width: 600px) {
                    #msg_email {
                        padding: 15px !important;
                        display: flex;
                        flex-direction: column;
                        align-items: center !important;
                        justify-content: center;
                        max-width: calc(100% - 30px)
                    }

                    #msg_email>div {
                        display: flex;
                        flex-direction: column !important;
                        max-width: calc(100% - 30px) !important;
                        padding-bottom: 15px;
                        padding-top: 10px
                    }

                    #msg_email img {
                        width: 100px !important;
                    }

                    #msg_email span {
                        font-size: 30px !important;
                        margin: 0 !important;
                    }

                    #msg_email>div>span {
                        font-size: 30px !important;
                        width: .5em;
                        height: 1em;
                        display: flex;
                        align-items: center
                    }
                }


                @media only screen and (min-width: 600px) {
                    .only_mobile {
                        display: none !important;
                    }
                }

                .fa.fa-angle-double-left:after {
                    content: '<'
                }

                .fa.fa-angle-double-right:after {
                    content: '>'
                }

                #fnForm div>a span {
                    background: #fff !important;
                    color: #336ACD !important;
                    border: 2px solid #336ACD;
                    box-shadow: none !important;
                    box-shadow: 0 0 4px -2px !important;
                }

                #fnForm>div>a span:hover {
                    background: #336ACD !important;
                    color: #fff !important;
                }

                @media only screen and (max-width: 600px) {
                    #content_senae {
                        padding: 0 20px;
                        width: calc(100% - 40px)
                    }


                    #filtro_uf_cid {
                        padding: 0 20px;
                        text-align: center;
                        width: calc(100% - 40px) !important;
                    }

                    .headr_ {
                        width: calc(100% - 40px) !important;
                    }

                    .comercio_imgs {
                        width: calc(100% - 20px) !important;
                    }

                    .cadContato {
                        margin-bottom: 20px !important;
                    }

                    .cadContato p {
                        text-align: left
                    }

                    #painelVisual img {
                        object-position: center;
                        object-fit: cover;
                    }
                }
            </style>

        </div>
    </div>

    <script>
        var page_title = "Comércios à Venda";
    </script>


<?php
}
?>