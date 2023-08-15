<?php

$url_atual = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url_atual, '?gratis') !== false) {
    /////////////////GRATIS START
?>

    <div style="width: 100%;max-width: 1100px;margin: auto;padding: 60px 0;">

        <style>
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
                overflow: hidden !important;
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
                overflow: hidden !important;
                margin: auto;

            }



            #iPesquisarConsultor {
                border: 0;
                width: 603px;
                height: 412px;
                overflow: hidden !important;
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
                padding: 1em
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
                margin-top: 55px
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


            #iPesquisarConsultor {
                max-width: 555px;
            }

            #iPesquisarConsultor {
                margin-bottom: 40px;
                margin-top: 30px;
            }

            #input_files_a>div>div {
                display: grid;
                padding: 5px;
                padding-bottom: 0
            }

            input,
            textarea,
            select {
                border: 1px solid #ccc;
                padding: 10px 10px;
            }

            /**/
        </style>

        <script>
            ////
            //Popup API
            function popupA(status, txt) {

                if (document.querySelector("#popup") != undefined) {
                    document.querySelector("#popup").remove()
                }

                if (status == true) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
              <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #0b7;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
                      <span>✅</span>
                      <span style="color: #fff;font-family: verdana;font-size: 14px;" >` + txt + `</span>
              </div>
              `)
                }

                if (status == false) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
              <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #c03;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
                      <span>⚠️</span>
                      <span style="color: #fff;font-family: verdana;font-size: 14px;" >` + txt + `</span>
              </div>
              `)
                }

                setTimeout(function() {
                    if (document.querySelector("#popup") != undefined) {
                        document.querySelector("#popup").style.opacity = 0;
                    }
                }, 1000)

                setTimeout(function() {
                    if (document.querySelector("#popup") != undefined) {
                        document.querySelector("#popup").remove()
                    }
                }, 2000)

            }
            ////



            // function codigo_consultor_() {
            //     if (document.querySelector(".codigo_consultor").value.length > 3) {

            //         let ffnome = undefined

            //         var cod_ins = document.querySelector(".codigo_consultor").value

            //         $.ajax({
            //             url: 'https://senae.com.br/scripts/consultores/getconsultor.php/?c=' + cod_ins,
            //             dataType: 'json',
            //             success: function(resposta) {
            //                 ffnome = resposta.nome
            //             },
            //             complete: function(data) {
            //                 validCod();
            //             }
            //         });

            //         function validCod() {
            //             console.log(ffnome)

            //             if (ffnome == undefined) {
            //                 popupA(false, "Código do Contador inválido!")
            //             } else {
            //                 document.querySelector(".bk_fm").classList.remove("bk_fm")
            //                 popupA(true, "Código do Contador validado com Sucesso!")
            //                 localStorage.setItem("consultorCod", cod_ins)
            //             }

            //         }

            //     }
            // }
        </script>

        <script src="https://senae.com.br/scripts/includes/setCidade.js"></script>

        <script>
            function getLocationCep() {
                $.ajax({

                    url: 'https://viacep.com.br/ws/' + $(".cep").val() + '/json/',
                    dataType: 'json',
                    success: function(resposta) {

                        $(".uf").val(resposta.uf);
                        setcidad();
                        $(".rua").val(resposta.logradouro);
                        $(".complemento").val(resposta.complemento);
                        $(".bairro").val(resposta.bairro);
                        $(".cidade").val(resposta.localidade);
                        $("#numero").focus();

                    }
                });
            }
        </script>

        <script>
            function preview_image(elem) {
                var tgt = elem.target || window.event.srcElement,
                    files = tgt.files;

                if (FileReader && files && files.length) {
                    var fr = new FileReader();
                    fr.onload = function() {
                        elem.previousElementSibling.style.backgroundImage = "url(" + fr.result + ")"
                        elem.previousElementSibling.style.color = "#0000"
                    }
                    fr.readAsDataURL(files[0]);
                }
            }
        </script>

        <form class="ob_hd" id="adicionar_comercio" method="POST" action="https://senae.com.br/scripts/cadastro/cadastrar_parceria.php?site_contador=<?= $cod_contador; ?>" enctype="multipart/form-data">
            <div>

                <div class="bk_fm" style="display: flex;flex-direction: column;">

                    <span style="font-size:20px;margin-left:15px;text-align: center;padding-bottom: 25px;margin: 0;display:block">Preencha com os dados do seu Comércio</span>

                    <input placeholder="Anunciante" class="anunciante" type="text" name="anunciante">
                    <input placeholder=" Fone " class="fone" type="text" name="fone">
                    <input placeholder=" E-mail " class="email" type="text" name="email">
                    <input placeholder="Título da Parceria ou Sociedade" class="titulo" type="text" name="titulo">
                    <input type="hidden" name="codigo_consultor" value="<?php echo $cod_contador; ?>">
                    <textarea placeholder="Descrição" name="descr" id="descr" class="descr" cols="30" rows="10"></textarea>



                    <input onchange="setcidad()" onfocusout="getLocationCep()" placeholder="CEP" class="cep" type="text" name="cep">



                    <select onchange="setcidad()" class="uf" type="text" name="uf">
                        <option value="0">Estado</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="PR">PR</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                    <select class="cidade" type="text" name="cidade">
                        <option value="0">Cidade</option>
                    </select>
                    <input placeholder="Bairro" class="bairro" type="text" name="bairro">
                    <input placeholder="Rua" class="rua" type="text" name="rua">
                    <input placeholder="Número e Complemento" class="numero" type="text" name="numero">



                    <input class="pix" type="hidden" value="pix0" name="pix">
                    <input class="nome_contador" type="hidden" value="" name="nome_contador">
                    <div class="botoes">
                        <button class="salvar" type="submit" name="adicionar" style="pointer-events: all;">Adicionar</button><br>
                        <input class="reset" type="reset" name="limpar" value="Limpar" style="height: max-content !important;">
                    </div>
                </div>
            </div>
        </form>

        <style>
            input,
            textarea,
            select {
                border: 1px solid #ccc;
                padding: 10px 10px;
            }

            @media only screen and (max-width: 600px) {
                #adicionar_comercio {
                    padding: 0 20px !important;
                }

                #input_files_a {
                    display: flex;
                    flex-direction: row;
                }

                #input_files_a>div {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                }

                #input_files_a>div>div {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin: 5px;
                    margin-left: 5px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    width: 100%;
                    margin: 7px !important;
                }
            }
        </style>

    </div>
    <script>
        var page_title = "Anunciar Parceria ou Sociedade";
    </script>

    <?php
    ///////////////GRATIS END

} else {

    if (strpos($url_atual, '?pago') !== false) {
        /////////////////PAGO START
    ?>
        <div style="width: 100%;max-width: 1100px;margin: auto;padding: 60px 0;">

            <style>
                form a:hover {
                    color: #3ae !important;
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

                @media only screen and (min-width: 600px) {
                    .bk_fm_ok {
                        margin-top: 0 !important;
                    }

                    #adicionar_comercio>div>div {
                        margin-bottom: 20px !important;
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
                    overflow: hidden !important;
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
                    overflow: hidden !important;
                    margin: auto;

                }



                #iPesquisarConsultor {
                    border: 0;
                    width: 603px;
                    height: 412px;
                    overflow: hidden !important;
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
                    padding: 1em
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
                    margin-top: 55px
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

                #iPesquisarConsultor {
                    max-width: 555px;
                }

                #iPesquisarConsultor {
                    margin-bottom: 40px;
                    margin-top: 30px;
                }

                #input_files_a>div>div {
                    display: grid;
                    padding: 5px;
                    padding-bottom: 0
                }

                /**/
                .bk_fm input,
                .bk_fm textarea,
                .bk_fm select,
                .bk_fm button,
                .bk_fm #input_files_a,
                .bk_fm .botoes {
                    pointer-events: none !important;
                }

                .bk_fm {
                    cursor: not-allowed;
                    opacity: .4
                }

                /**/
            </style>


            <form class="ob_hd" id="adicionar_comercio" method="POST" action="https://senae.com.br/scripts/cadastro/cadastrar_parceria.php?site_contador=<?= $cod_contador; ?>" enctype="multipart/form-data">
                <div>

                    <div style="margin-left: 15px;">
                        <span>Como você não é Cliente de um de nossos Consultores, será cobrado um valor mensal de R$350,00 para publicarmos seu anúncio que terá validade por 30 dias.</span>
                        <br><br>
                        <span>Assim que Recebermos o seu PIX Publicaremos o seu Comércio. </span>
                        <br><br>
                        <span>Mande o PIX para o <b>CPF: 962.727.679-00</b>.</span>
                        <br><br>
                        <span>Obrigado e Boas Vendas! </span>
                        <br><br>
                        <span>Após efetuar o Pagamento, nos envie o comprovante pelo WhatsApp: <a href="https://wa.me/5541988074190">(41) 9.8807-4190 </a> com o nome do Anunciante. </span>
                        <br><br>
                    </div>

                    <span style="font-size:20px;margin-left:15px;text-align: center;padding-bottom: 25px;margin: 0;display:block">Preencha com os dados do seu Comércio</span>

                    <div class="bk_fm_ok" style="display: flex;flex-direction: column;margin-top: 50px;">


                        <input placeholder="Anunciante" class="anunciante" type="text" name="anunciante">
                        <input placeholder=" Fone " class="fone" type="text" name="fone">
                        <input placeholder=" E-mail " class="email" type="text" name="email">
                        <input placeholder="Título da Parceria ou Sociedade" class="titulo" type="text" name="titulo">
                        <input type="hidden" name="codigo_consultor" value="<?php echo $cod_contador; ?>">
                        <textarea placeholder="Descrição" name="descr" id="descr" class="descr" cols="30" rows="10"></textarea>

                        <input onchange="setcidad()" onfocusout="getLocationCep()" placeholder="CEP" class="cep" type="text" name="cep">

                        <select onchange="setcidad()" class="uf" type="text" name="uf">
                            <option value="0">Estado</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                        <select class="cidade" type="text" name="cidade">
                            <option value="0">Cidade</option>
                        </select>
                        <input placeholder="Bairro" class="bairro" type="text" name="bairro">
                        <input placeholder="Rua" class="rua" type="text" name="rua">
                        <input placeholder="Número e Complemento" class="numero" type="text" name="numero">



                        <input class="nome_contador" type="hidden" value="" name="nome_contador">
                        <input class="cod_contador" type="hidden" value="" name="cod_contador">
                        <input class="pix" type="hidden" value="pix1" name="pix">



                        <div class="botoes">
                            <button class="salvar" type="submit" name="adicionar" style="pointer-events: all;">Adicionar</button><br>
                            <input class="reset" type="reset" name="limpar" value="Limpar" style="height: max-content !important;">
                        </div>
                    </div>
                </div>
            </form>



            <style>
                input,
                textarea,
                select {
                    border: 1px solid #ccc;
                    padding: 10px 10px;
                }

                @media only screen and (max-width: 600px) {
                    #adicionar_comercio {
                        padding: 0 20px !important;
                    }

                    #input_files_a {
                        display: flex;
                        flex-direction: row;
                    }

                    #input_files_a>div {
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                    }

                    #input_files_a>div>div {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        margin: 5px;
                        margin-left: 5px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        width: 100%;
                        margin: 7px !important;
                    }
                }
            </style>


            <script>
                ////
                //Popup API
                function popupA(status, txt) {

                    if (document.querySelector("#popup") != undefined) {
                        document.querySelector("#popup").remove()
                    }

                    if (status == true) {
                        document.querySelector("body").insertAdjacentHTML("beforeend", `
              <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #0b7;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
                      <span>✅</span>
                      <span style="color: #fff;font-family: verdana;font-size: 14px;" >` + txt + `</span>
              </div>
              `)
                    }

                    if (status == false) {
                        document.querySelector("body").insertAdjacentHTML("beforeend", `
              <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #c03;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
                      <span>⚠️</span>
                      <span style="color: #fff;font-family: verdana;font-size: 14px;" >` + txt + `</span>
              </div>
              `)
                    }

                    setTimeout(function() {
                        if (document.querySelector("#popup") != undefined) {
                            document.querySelector("#popup").style.opacity = 0;
                        }
                    }, 1000)

                    setTimeout(function() {
                        if (document.querySelector("#popup") != undefined) {
                            document.querySelector("#popup").remove()
                        }
                    }, 2000)

                }
                ////



                // function codigo_consultor_() {
                //     if (document.querySelector(".codigo_consultor").value.length > 3) {

                //         let ffnome = undefined

                //         var cod_ins = document.querySelector(".codigo_consultor").value

                //         $.ajax({
                //             url: 'https://senae.com.br/scripts/consultores/getconsultor.php/?c=' + cod_ins,
                //             dataType: 'json',
                //             success: function(resposta) {
                //                 ffnome = resposta.nome
                //             },
                //             complete: function(data) {
                //                 validCod();
                //             }
                //         });

                //         function validCod() {
                //             console.log(ffnome)

                //             if (ffnome == undefined) {
                //                 popupA(false, "Código do Contador inválido!")
                //             } else {
                //                 document.querySelector(".bk_fm").classList.remove("bk_fm")
                //                 popupA(true, "Código do Contador validado com Sucesso!")
                //                 localStorage.setItem("consultorCod", cod_ins)
                //             }

                //         }

                //     }
                // }
            </script>

            <script src="https://senae.com.br/scripts/includes/setCidade.js"></script>

            <script>
                function getLocationCep() {
                    $.ajax({

                        url: 'https://viacep.com.br/ws/' + $(".cep").val() + '/json/',
                        dataType: 'json',
                        success: function(resposta) {

                            $(".uf").val(resposta.uf);
                            setcidad();
                            $(".rua").val(resposta.logradouro);
                            $(".complemento").val(resposta.complemento);
                            $(".bairro").val(resposta.bairro);
                            $(".cidade").val(resposta.localidade);
                            $("#numero").focus();

                        }
                    });
                }
            </script>

            <script>
                function preview_image(elem) {
                    var tgt = elem.target || window.event.srcElement,
                        files = tgt.files;

                    if (FileReader && files && files.length) {
                        var fr = new FileReader();
                        fr.onload = function() {
                            elem.previousElementSibling.style.backgroundImage = "url(" + fr.result + ")"
                            elem.previousElementSibling.style.color = "#0000"
                        }
                        fr.readAsDataURL(files[0]);
                    }
                }
            </script>

        </div>

    <?php
        /////////////////PAGO END
    } else {

    ?>


        <div style="width: 100%;max-width: 1100px;margin: auto;padding-top: 40px;">
            <style>
                #anunciar p {
                    margin: 2em 0;
                    font-size: 25px;
                    line-height: 30px;
                }

                #anunciar button:hover {
                    filter: saturate(1.2);
                    cursor: pointer;
                    opacity: .8;
                }

                #anunciar>p {
                    margin-bottom: 25px !important;
                }

                #anunciar>p u {
                    margin-top: 40px;
                    display: block;
                }
            </style>
            <div id="anunciar">

                <b style="font-size:44px;text-align:center;color:#444">Parcerias e Sociedades em Curitiba - ANUNCIAR</b>

                <p>Todos os Serviços do SENAE são Gratuitos para quem já é Cliente de um de nossos Consultores de Negócios. (CONTADORES CADASTRADOS)</p>

                <p>Se você já é Cliente de um Contador Credenciado pelo SENAE pode Anunciar sua Parceria ou Sociedade pois será vista por Milhares de Internautas, pois nosso Portal é voltado Exclusivamente para Empreendedores e Empresários.</p>

                <p>Se você não é Cliente de um dos nossos Consultores, precisará pagar uma Taxa de Publicação no valor Mensal de R$ 350,00.</p>

                <p><b><u>ESCOLHA SUA OPÇÃO:</u></b></p>

                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/anunciar/?gratis"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:2em;margin-top:2em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;position: relative;">SOU CLIENTE DE UM CONSULTOR E TENHO O CÓDIGO DE ACESSO PARA PUBLICAR GRÁTIS</button></a>

                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/anunciar/?pago"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:0em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;width: 100%;position: relative;margin-bottom: 50px;">NÃO SOU CLIENTE DE UM CONSULTOR VOU PRECISAR PAGAR PUBLICAÇÃO MENSAL POR R$ 350,00</button></a>


            </div>
            <script>
                if (window.innerWidth < 600) {
                    document.querySelector("#anunciar > b").textContent = document.querySelector("#anunciar > b").textContent.replaceAll(" - ", " ")
                }
            </script>
            <style>
                #anunciar>b {
                    display: block;
                    text-align: center !important;
                }

                * {
                    outline: none !important
                }


                @media only screen and (max-width: 600px) {
                    #anunciar>b {
                        display: block;
                        text-align: center !important;
                    }

                    #input_files_a {
                        display: flex !important;
                        flex-direction: row !important
                    }

                    #input_files_a>div {
                        display: flex !important;
                        flex-direction: row !important;
                        flex-wrap: wrap !important
                    }

                    #anunciar p {
                        text-align: left !important;
                        font-size: 16px !important;
                        padding: 0 20px !important;
                        line-height: 23px !important;
                        margin-top: 20px !important;
                    }

                    #anunciar {
                        padding: 0 20px !important;
                    }

                    #anunciar button {
                        margin-top: 10px !important;
                    }
                }

                #anunciar button {
                    width: 100%;
                    margin-top: 20px !important;
                    margin-bottom: 20px !important;
                }

                #anunciar {
                    margin-bottom: 30px
                }
            </style>
        </div>

        <script>
            var page_title = "Anunciar Parceria ou Sociedade";
        </script>

<?php
    }
}
?>