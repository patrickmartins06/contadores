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
            /* .bk_fm input,
        .bk_fm textarea,
        .bk_fm select,
        .bk_fm button,
        .bk_fm #input_files_a,
        .bk_fm .botoes {
            pointer-events: none !important;
        } */

            /* .bk_fm {
            cursor: not-allowed;
            opacity: .4
        } */

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

        <form class="ob_hd" id="adicionar_comercio" method="POST" action="https://senae.com.br/scripts/cadastro/cadastrar_comercio.php?site_contador=<?= $cod_contador; ?>" enctype="multipart/form-data">
            <div>
                <!-- <span style="font-size:20px;margin-left:15px">Preencha com os dados do seu Comércio</span> -->
                <!-- <input oninput="codigo_consultor_()" placeholder="Código do Consultor" class="codigo_consultor" type="text" name="codigo_consultor"> -->
                <div class="bk_fm" style="display: flex;flex-direction: column;">
                    <span style="font-size:20px;margin-left:15px;text-align: center;padding-bottom: 25px;margin: 0;display: block;">Preencha com os dados do seu Comércio</span>
                    <input placeholder="Nome da sua Empresa" class="nome_empresa" type="text" name="nome_empresa">
                    <input placeholder="Valor" class="valor" type="text" name="valor" style="font-size: inherit;">
                    <input oninput="check_exists()" placeholder="Título" class="titulo" style="text-align: left;" type="text" name="titulo">
                    <textarea placeholder="Descrição" name="descr" id="descr" class="descr" cols="30" rows="10"></textarea>

                    <div id="input_files_a">
                        <div style="display: flex;">
                            <div style="margin-left: 0;">
                                <span>Imagem 1</span>
                                <label for="img1">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" style="width: 100%;/*! margin: 2px 0 0 6px; */" id="img1" name="img1" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 2</span>
                                <label for="img2">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img2" name="img2" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 3</span>
                                <label for="img3">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img3" name="img3" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 4</span>
                                <label for="img4">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img4" name="img4" onchange="preview_image(this)">
                            </div>
                            <div style="margin-right: 0;">
                                <span>Imagem 5</span>
                                <label for="img5">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img5" name="img5" onchange="preview_image(this)">
                            </div>
                        </div>

                        <div style="display: flex;">
                            <div style="margin-left: auto;">
                                <span>Imagem 6</span>
                                <label for="img6">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img6" name="img6" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 7</span>
                                <label for="img7">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img7" name="img7" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 8</span>
                                <label for="img8">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img8" name="img8" onchange="preview_image(this)">
                            </div>
                            <div>
                                <span>Imagem 9</span>
                                <label for="img9">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img9" name="img9" onchange="preview_image(this)">
                            </div>
                            <div style="margin-right: 0;">
                                <span>Imagem 10</span>
                                <label for="img10">Carregar Imagem</label>
                                <input type="file" accept="image/png, image/jpeg" id="img10" name="img10" onchange="preview_image(this)">
                            </div>
                        </div>

                    </div>

                    <input onchange="setcidad()" placeholder="Nome do Anunciante" class="anunciante" type="text" name="anunciante">
                    <input placeholder="Fone" class="fone" type="text" name="fone">
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
                    <input class="codigo_consultor" type="hidden" value="<?= $cod_contador; ?>" name="codigo_consultor">
                    <input class="pix" type="hidden" value="pix0" name="pix">
                    <input class="nome_contador" type="hidden" value="" name="nome_contador">
                    <div class="botoes">
                        <button class="salvar" type="submit" name="adicionar" style="pointer-events: all;">Adicionar</button><br>
                        <input class="reset" type="reset" name="limpar" value="Limpar" style="height: max-content !important;">
                    </div>
                </div>
            </div>
        </form>


    </div>

    <style>
        input,
        textarea,
        select {
            border: 1px solid #ccc;
            padding: 10px 10px
        }

        input[type="file"] {
            padding: 0 !important;
            border: 0;
            margin-bottom: 0 !important;
            border-top: 1px solid #ccc;
            width: calc(100% + 0px);
            margin-left: -5px;
            border-radius: 0 !important;
            padding-top: 5px !important;
            padding-left: 5px !important;
            padding-right: 5px !important;
            background: #f5f5f5;
            border-radius: 0 0 9px 9px !important;
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
        var page_title = "Anunciar Comércio";
    </script>
<?php
    ///////////////GRATIS END

} else {
?>



    <?php
    if (strpos($url_atual, '?pago') !== false) {
        /////////////////PAGO START
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

                @media only screen and (min-width: 600px) {
                    .bk_fm {
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

                form a:hover {
                    color: #3ae !important;
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



                function codigo_consultor_() {
                    if (document.querySelector(".codigo_consultor").value.length > 3) {

                        if (localStorage.getItem("consultorCod") == document.querySelector(".codigo_consultor").value) {

                            document.querySelector(".bk_fm").classList.remove("bk_fm")

                            popupA(true, "Código do Contador validado com Sucesso!")

                        } else {

                            popupA(false, "Código do Contador inválido!")

                        }

                    }
                }
            </script>

            <script src="https://senae.com.br/scripts/includes/setCidade.js"></script>

            <script>
                //// 
                // Import JQUERY Dynamically 
                if (window.location.href.split("/")[window.location.href.split("/").length - 1] != "?fl_builder") {
                    var s = document.createElement('script');
                    s.setAttribute('src', 'https://code.jquery.com/jquery-3.6.0.min.js');
                    document.body.appendChild(s);
                }
                //// 

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

            <form class="ob_hd" id="adicionar_comercio" method="POST" action="https://senae.com.br/scripts/cadastro/cadastrar_comercio.php?site_contador=<?= $cod_contador; ?>" enctype="multipart/form-data">
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

                    <span style="font-size:20px;margin-left:15px;text-align: center;padding-bottom: 25px;margin: 0;display: block;">Preencha com os dados do seu Comércio</span>

                    <div class="bk_fm" style="display: flex;flex-direction: column;margin-top: 40px;">
                        <input placeholder="Nome da sua Empresa" class="nome_empresa" type="text" name="nome_empresa">
                        <input placeholder="Valor" class="valor" type="text" name="valor" style="font-size: inherit;">
                        <input oninput="check_exists()" placeholder="Título" class="titulo" style="text-align: left;" type="text" name="titulo">
                        <textarea placeholder="Descrição" name="descr" id="descr" class="descr" cols="30" rows="10"></textarea>

                        <div id="input_files_a">
                            <div style="display: flex;">
                                <div style="margin-left: 0;">
                                    <span>Imagem 1</span>
                                    <label for="img1">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" style="width: 100%;/*! margin: 2px 0 0 6px; */" id="img1" name="img1">
                                </div>
                                <div>
                                    <span>Imagem 2</span>
                                    <label for="img2">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img2" name="img2">
                                </div>
                                <div>
                                    <span>Imagem 3</span>
                                    <label for="img3">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img3" name="img3">
                                </div>
                                <div>
                                    <span>Imagem 4</span>
                                    <label for="img4">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img4" name="img4">
                                </div>
                                <div style="margin-right: 0;">
                                    <span>Imagem 5</span>
                                    <label for="img5">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img5" name="img5">
                                </div>
                            </div>

                            <div style="display: flex;">
                                <div style="margin-left: auto;">
                                    <span>Imagem 6</span>
                                    <label for="img6">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img6" name="img6">
                                </div>
                                <div>
                                    <span>Imagem 7</span>
                                    <label for="img7">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img7" name="img7">
                                </div>
                                <div>
                                    <span>Imagem 8</span>
                                    <label for="img8">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img8" name="img8">
                                </div>
                                <div>
                                    <span>Imagem 9</span>
                                    <label for="img9">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img9" name="img9">
                                </div>
                                <div style="margin-right: 0;">
                                    <span>Imagem 10</span>
                                    <label for="img10">Carregar Imagem</label>
                                    <input onchange="preview_image(this)" type="file" accept="image/png, image/jpeg" id="img10" name="img10">
                                </div>
                            </div>

                        </div>

                        <input onchange="setcidad()" placeholder="Nome do Anunciante" class="anunciante" type="text" name="anunciante">
                        <input placeholder="Fone" class="fone" type="text" name="fone">
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

                        <input class="cod_contador" type="hidden" value="<?= $cod_contador; ?>" name="cod_contador">
                        <input class="codigo_consultor" type="hidden" value="<?= $cod_contador; ?>" name="codigo_consultor">
                        <input class="pix" type="hidden" value="pix1" name="pix">



                        <div class="botoes">
                            <button class="salvar" type="submit" name="adicionar" style="pointer-events: all;">Adicionar</button><br>
                            <input class="reset" type="reset" name="limpar" value="Limpar" style="height: max-content !important;">
                        </div>
                    </div>
                </div>
            </form>

            <script>
                window.onload = function() {
                    if (localStorage.getItem("consultorNome") == null) {
                        //document.querySelector("#adicionar_comercio").style.display = "none"
                    } else {
                        //document.querySelector("#precisa_consultor_h1").style.display = "none"
                    }
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

        <style>
            input,
            textarea,
            select {
                border: 1px solid #ccc;
                padding: 10px 10px
            }

            input[type="file"] {
                padding: 0 !important;
                border: 0;
                margin-bottom: 0 !important;
                border-top: 1px solid #ccc;
                width: calc(100% + 0px);
                margin-left: -5px;
                border-radius: 0 !important;
                padding-top: 5px !important;
                padding-left: 5px !important;
                padding-right: 5px !important;
                background: #f5f5f5;
                border-radius: 0 0 9px 9px !important;
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
            var page_title = "Anunciar Comércio";
        </script>
    <?php

        ///////////////PAGO END
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
            </style>

            <div id="anunciar">
                <b style="font-size:44px;text-align:center;color:#444">Comércios à Venda - ANUNCIAR</b>

                <p>Todos os Serviços do SENAE são Gratuitos para quem já é Cliente de um de nossos Consultores de Negócios. (CONTADORES CADASTRADOS)</p>

                <p>Se você já é Cliente de um Contador Credenciado pelo SENAE pode Anunciar seu Estabelecimento Gratuitamente pois ele é visto por Milhares de Internautas, pois nosso Portal é voltado Exclusivamente para Empreendedores e Empresários.</p>

                <p>Se você não é Cliente de um dos nossos Consultores, precisará pagar uma Taxa de Publicação no valor Mensal de R$ 350,00.</p>

                <p><b><u>ESCOLHA SUA OPÇÃO:</u></b></p>

                <!-- <a target="_blank" href="https://senae.com.br/formulario/"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:2em;margin-top:2em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;position: relative;">SOU CLIENTE DE UM CONSULTOR E TENHO O CÓDIGO DE ACESSO PARA PUBLICAR GRÁTIS</button></a> -->
                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/?gratis"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:2em;margin-top:2em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;position: relative;">SOU CLIENTE DE UM CONSULTOR E TENHO O CÓDIGO DE ACESSO PARA PUBLICAR GRÁTIS</button></a>

                <!-- <a target="_blank" href="https://senae.com.br/formulario-pix/"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:0em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;width: 100%;position: relative;">NÃO SOU CLIENTE DE UM CONSULTOR VOU PRECISAR PAGAR PUBLICAÇÃO MENSAL POR R$ 350,00</button></a> -->
                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/?pago"><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:0em;background: #f5f5f5;color: #04a;border: 2px solid #0044aa;font-weight: 111;box-shadow: 0 0 4px -2px;width: 100%;position: relative;margin-bottom:50px">NÃO SOU CLIENTE DE UM CONSULTOR VOU PRECISAR PAGAR PUBLICAÇÃO MENSAL POR R$ 350,00</button></a>


            </div>
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
            <script>
                if (window.innerWidth < 600) {
                    document.querySelector("#anunciar > b").textContent = document.querySelector("#anunciar > b").textContent.replaceAll(" - ", " ")
                }
            </script>
            <style>
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

                @media only screen and (max-width: 600px) {
                    #anunciar button {
                        margin-bottom: 20px !important;
                    }

                    #anunciar {
                        margin-bottom: 30px !important;
                    }
                }
            </style>

        </div>
        <script>
            var page_title = "Anunciar Comércio ";
        </script>

<?php
    }
}
?>