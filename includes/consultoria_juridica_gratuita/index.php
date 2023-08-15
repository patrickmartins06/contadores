<?php

$url_atual = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url_atual, '?formulario') !== false) {
    ////start FORMULARIO
?>

    <div id="content" style="width: 100%;max-width: 1100px;margin: auto;padding: 40px 0;">

        <style>
            .nomeConsultorForm {
                display: block ruby;
                position: relative
            }

            .nomeConsultorForm sp {
                position: absolute;
                bottom: .125em;
                right: 0;
                font-size: 20px;
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
        </style>
        <style>
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

            .nomeConsultorForm {
                display: nones;
            }

            #iPesquisarConsultor {
                transition: 0.5s;
                border-radius: 1em
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



            function codigo_consultor_() {
                if (document.querySelector(".codigo_consultor").value.length > 3) {

                    let ffnome = undefined

                    var cod_ins = document.querySelector(".codigo_consultor").value

                    $.ajax({
                        url: 'https://senae.com.br/scripts/consultores/getconsultor.php/?c=' + cod_ins,
                        dataType: 'json',
                        success: function(resposta) {
                            ffnome = resposta.nome
                        },
                        complete: function(data) {
                            validCod();
                        }
                    });

                    function validCod() {
                        console.log(ffnome)

                        if (ffnome == undefined) {
                            popupA(false, "Código do Contador inválido!")
                        } else {
                            document.querySelector(".bk_fm").classList.remove("bk_fm")
                            popupA(true, "Código do Contador validado com Sucesso!")
                            localStorage.setItem("consultorCod", cod_ins)
                        }

                    }

                }
            }
        </script>

        <div id="c_j_f">
            <h3 style="font-family:verdana;font-size: 24px;">Fale com um Advogado</h3>
            <form method="POST" action="https://senae.com.br/scripts/email/enviar_email.php?fm=consultoria-juridica" id="contato" enctype="multipart/form-data">
                <input placeholder="Código do Consultor" class="codigo_consultor" value="<?php echo $cod_contador; ?>" type="hidden" name="codigo_consultor">
                <div class="bk_fm">
                    <input onchange="defineEmail()" name="nome" class="nome" placeholder="Seu Nome">
                    <input onchange="defineEmail()" name="hr" class="hr" placeholder="Seu E-mail*">
                    <input type="hidden" name="email" class="email">
                    <input onchange="defineEmail()" name="fone" class="fone" placeholder="Seu Telefone">
                    <input onchange="defineEmail()" name="assunto" class="assunto" placeholder="Assunto">
                    <input type="hidden" onchange="defineEmail()" name="title" class="title" value="Consultoria Jurídica Gratuíta">
                    <input value="<?= $cod_contador ?>" type="hidden" name="idConsultor" class="idConsultor">

                    <input type="hidden" value="<?= $cod_contador ?>" name="cod_acesso" class="cod_acesso" placeholder="Código de Acesso">
                    <textarea onchange="defineEmail()" name="mensagem" class="mensagem" placeholder="Qual a sua Dúvida?" style="width: 100%;"></textarea>
                    <input class="pix" type="hidden" value="pix0" name="pix">
                    <span>
                        <button onclick="submitForm_a()" type="button" style="background: #0b4e9a;color: #fff;float: right;width: 9em;margin: .5em 0;border: 1px solid #ccc;border-bottom-color: rgb(204, 204, 204);border-bottom-style: solid;border-bottom-width: 1px;border-radius: 9px;padding: .5em;font-weight: 555;">Enviar</button>
                    </span>
                </div>
            </form>
        </div>


        <div style="display: flex;flex-direction: column;align-items: center;margin-top: 55px;font-size:20px;line-height:23px;">
            <h2>Diferenças entre ASSESSORIA e CONSULTORIA </h2>
            <p style="margin-top: 5px;">A maior e mais relevante Diferença entre um Consultor e um Assessor é:</p>
            <p style="margin-top: 20px;">O Consultor aponta as Soluções, mas não se envolve na execução delas, enquanto o Assessor além de apontar a Solução, também se envolve para resolver o problema.</p>
        </div>


        <div id="areas_atuacao">

            <hr>


            <style>
                #areas_atuacao h2 {
                    margin-top: 30px;
                }

                #areas_atuacao ul {
                    list-style: none;
                    padding: 0;

                    column-count: 4;
                    color: #0B4F9A;

                }

                #areas_atuacao li {
                    line-height: 20px;
                    padding: 7px 5px;
                    width: 184px;
                    cursor: default;
                    transition: .3s
                }

                #areas_atuacao li:hover {
                    color: #3ae;
                }

                #areas_atuacao hr {
                    margin-top: 25px;

                }

                @media only screen and (max-width: 600px) {
                    #main {
                        padding: 0 25px !important;
                    }

                    #main h3,
                    #main h2,
                    #main h1 {
                        text-align: center !important;

                    }

                    #areas_atuacao ul {
                        display: flex !important;
                        ;
                        flex-direction: column !important;
                    }
                }
            </style>
            <h2>Áreas de Atuação</h1>
                <ul>
                    <li>Acidente de Trabalho</li>
                    <li>Acidente de Trânsito</li>
                    <li>Acúmulo ou Desvio de Função</li>
                    <li>Adicionais de Risco</li>
                    <li>Aposentadoria</li>
                    <li>Assédio Moral no Trabalho</li>
                    <li>Atraso na Entrega de Imóvel</li>
                    <li>Atraso, Defeito e Troca de Produto</li>
                    <li>Audiência de Custódia</li>
                    <li>Auxílio-Doença</li>
                    <li>Auxílio-reclusão</li>
                    <li>Cartão de Crédito</li>
                    <li>Cobrança Indevida ou Abusiva</li>
                    <li>Compra e Venda de Imóveis</li>
                    <li>Compra e Venda e Transferência de Veículo</li>
                    <li>Concessionárias de Água e Luz</li>
                    <li>Concessionárias de Veículo</li>
                    <li>Concurso Público</li>
                    <li>Consórcio</li>
                    <li>Crimes Contra a Honra</li>
                    <li>Demanda de Empregador</li>
                    <li>Despejo</li>
                    <li>Direito Administrativo</li>
                    <li>Direito Civil</li>
                    <li>Direito Constitucional</li>
                    <li>Direito de Família</li>
                    <li>Direito de Propriedade</li>
                    <li>Direito do Consumidor</li>
                    <li>Direito do Trabalho</li>
                    <li>Direito Empresarial</li>
                    <li>Direito Financeiro</li>
                    <li>Direito Imobiliário</li>
                    <li>Direito Internacional</li>
                    <li>Direito Penal</li>
                    <li>Direito Previdenciário</li>
                    <li>Direito Tributário</li>
                    <li>Dívida Ativa</li>
                    <li>Divórcio</li>
                    <li>DPVAT</li>
                    <li>Dupla Nacionalidade</li>
                    <li>Empregada Gestante</li>
                    <li>Empréstimo</li>
                    <li>Execução Fiscal</li>
                    <li>Falência e Recuperação Judicial</li>
                    <li>Férias</li>
                    <li>FIES</li>
                    <li>Financiamento Imobiliário</li>
                    <li>Financiamento</li>
                    <li>Guarda</li>
                    <li>Homicídio</li>
                    <li>Instituições de Ensino</li>
                    <li>Inventário</li>
                    <li>Isenção Tributária</li>
                    <li>Lei Seca</li>
                    <li>Licitação</li>
                    <li>Multa e Apreensão da CNH e Problemas Administrativos</li>
                    <li>Negativação</li>
                    <li>Operadoras de Telefonia</li>
                    <li>Pensão Alimentícia</li>
                    <li>Pensão por Morte</li>
                    <li>Plano de Saúde</li>
                    <li>Posse de Imóvel</li>
                    <li>Problemas com Banco</li>
                    <li>Problemas com Voo</li>
                    <li>Quebra do Contrato de Locação</li>
                    <li>Reclamação Trabalhista</li>
                    <li>Reconhecimento de Paternidade</li>
                    <li>Registro Civil</li>
                    <li>Salário</li>
                    <li>Servidor Público</li>
                    <li>Trânsito</li>
                    <li>Usucapião</li>
                    <li>Violência Sexual</li>
                    <li>Visto Internacional</li>
                    <li>Vizinhança e Condomínio</li>
                </ul>

        </div>

        <script>
            //function sendMail(t,a,m){$.post('https://senae.com.br/scripts/email/sender.php',{to:t,subject:a,message:m})}
            //sendMail("senae@senae.com.br","Titulo","Texto Mensagem")
        </script>
        <script>
            function defineEmail() {
                if (localStorage.getItem("advogadoId") == null) {
                    //consultor null > procurar novo
                    /*ScrollToSmooth*/
                    document.querySelector('#pesquisar_consultor_34123').scrollIntoView({
                        behavior: 'smooth'
                    });
                    /*noPost*/
                    document.querySelector(".submit").style.pointerEvents = 'none'
                    /*Alert*/
                    boxS = document.querySelector("#iPesquisarConsultor");
                    setTimeout(function() {
                        boxS.style.boxShadow = "red 0px 0em 0em 0em"
                    }, 250);
                    boxS.style.boxShadow = "red 0px 0em 0em .4em"
                } else {
                    //consultor ok > set localStorage Save
                    document.querySelector(".idConsultor").value = localStorage.getItem("advogadoId")
                    document.querySelector(".submit").style.pointerEvents = 'all'
                }
            }

            function submitForm_a() {
                //Validar Campos antes de enviar Formulário
                if (document.querySelector(".nome").value == "" || document.querySelector(".hr").value == "" || document.querySelector(".mensagem").value == "") {
                    popupA(false, "Preencha todos os campos Obrigatórios com *")
                } else {
                    document.querySelector(".idConsultor").value = localStorage.getItem("consultorCod")
                    document.querySelector("#contato").submit()
                }
            }
        </script>

        <style>
            #content {
                padding: 0 20px !important;
                width: calc(100% - 40px) !important
            }

            #contato input,
            textarea {
                padding: 5px 15px !important;
                width: calc(100% - 30px) !important;
            }

            h3 {
                text-align: center
            }

            h2 {
                line-height: 1.25em !important;
                text-align: center
            }
        </style>

        <!-- [mensagem_enviado_com_sucesso] -->

    </div>

<?php

    //////////End FORMULÁRIO
} else {
?>

    <div>
        <img class="senae_header_img" src="https://senae.org/imgs/consultoria%20juridica%20gratuita_b.webp">

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


            <style>
                #anunciar p {
                    margin: 2em 0;
                    font-size: 20px;
                    line-height: 30px;
                }

                #anunciar button:hover {
                    filter: saturate(1.2);
                    cursor: pointer;
                    opacity: .8;
                }

                #anunciar button {
                    min-height: 130px
                }

                /**/

                #areas_atuacao h2 {
                    margin-top: 30px;
                }

                #areas_atuacao ul {
                    list-style: none;
                    padding: 0;

                    column-count: 4;
                    color: #0B4F9A;

                }

                #areas_atuacao li {
                    line-height: 20px;
                    padding: 7px 5px;
                    width: 184px;
                    cursor: default;
                    transition: .3s
                }

                #areas_atuacao li:hover {
                    color: #3ae;
                }

                #areas_atuacao hr {
                    margin-top: 25px;
                }

                @media only screen and (max-width: 600px) {
                    #main {
                        padding: 0 25px !important;
                    }

                    #main h3,
                    #main h2,
                    #main h1 {
                        text-align: center !important;
                    }

                    #areas_atuacao ul {
                        display: flex !important;
                        ;
                        flex-direction: column !important;
                    }
                }
            </style>

            <style>
                .nomeConsultorForm {
                    display: block ruby;
                    position: relative
                }

                .nomeConsultorForm sp {
                    position: absolute;
                    bottom: .125em;
                    right: 0;
                    font-size: 20px;
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
            </style>
            <style>
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

                .nomeConsultorForm {
                    display: nones;
                }

                #iPesquisarConsultor {
                    transition: 0.5s;
                    border-radius: 1em
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

            <style>
                #content {
                    padding: 0 20px !important;
                    width: calc(100% - 40px) !important
                }

                #contato input,
                textarea {
                    padding: 5px 15px !important;
                    width: calc(100% - 30px) !important;
                }

                h3 {
                    text-align: center
                }

                h2 {
                    line-height: 1.25em !important;
                    text-align: center
                }
            </style>

            <style>
                #areas_atuacao h2 {
                    margin-top: 30px;
                }

                #areas_atuacao ul {
                    list-style: none;
                    padding: 0;

                    column-count: 4;
                    color: #0B4F9A;

                }

                #areas_atuacao li {
                    line-height: 20px;
                    padding: 7px 5px;
                    width: 184px;
                    cursor: default;
                    transition: .3s
                }

                #areas_atuacao li:hover {
                    color: #3ae;
                }

                #areas_atuacao hr {
                    margin-top: 25px;

                }

                @media only screen and (max-width: 600px) {
                    #main {
                        padding: 0 25px !important;
                    }

                    #main h3,
                    #main h2,
                    #main h1 {
                        text-align: center !important;

                    }

                    #areas_atuacao ul {
                        display: flex !important;
                        ;
                        flex-direction: column !important;
                    }
                }
            </style>

            <style>
                #diferencas {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-top: 55px;
                }

                #diferencas p {
                    margin: 0;
                    margin-top: 5px;
                    text-align: left;
                    width: 100%;
                    color: #30455cdd !important
                }
            </style>


            <div id="anunciar">
                <h1 class="o_mb" style="text-align: center;margin-top: 25px;padding: 0 20px !important;"> CONSULTORIA JURÍDICA GRATUITA </h1>



                <div id="c_j_f">
                    <h3 style="font-family:verdana;font-size: 24px;text-align:left">Fale com um Advogado</h3>
                    <form method="POST" action="https://senae.com.br/scripts/email/enviar_email.php?fm=consultoria-juridica_c" id="contato" enctype="multipart/form-data">
                        <input placeholder="Código do Consultor" class="codigo_consultor" value="<?php echo $cod_contador; ?>" type="hidden" name="codigo_consultor">
                        <div class="bk_fm">
                            <input onchange="defineEmail()" name="nome" class="nome" placeholder="Seu Nome">
                            <input onchange="defineEmail()" name="hr" class="hr" placeholder="Seu E-mail*">
                            <input type="hidden" name="email" class="email">
                            <input onchange="defineEmail()" name="fone" class="fone" placeholder="Seu Telefone">
                            <input onchange="defineEmail()" name="assunto" class="assunto" placeholder="Assunto">
                            <input type="hidden" onchange="defineEmail()" name="title" class="title" value="Consultoria Jurídica Gratuíta">
                            <input value="<?= $cod_contador ?>" type="hidden" name="idConsultor" class="idConsultor">

                            <input type="hidden" value="<?= $cod_contador ?>" name="cod_acesso" class="cod_acesso" placeholder="Código de Acesso">
                            <textarea onchange="defineEmail()" name="mensagem" class="mensagem" placeholder="Qual a sua Dúvida?" style="width: 100%;"></textarea>
                            <input class="pix" type="hidden" value="pix0" name="pix">
                            <span>
                                <button onclick="submitForm_a()" type="button" style="background: #0b4e9a;color: #fff;float: right;width: 9em;margin: .5em 0;border: 1px solid #ccc;border-bottom-color: rgb(204, 204, 204);border-bottom-style: solid;border-bottom-width: 1px;border-radius: 9px;padding: .5em;font-weight: 555;min-height:5px">Enviar</button>
                            </span>
                        </div>
                    </form>
                </div>

                <script>
                    function defineEmail() {
                        if (localStorage.getItem("advogadoId") == null) {
                            //consultor null > procurar novo
                            /*ScrollToSmooth*/
                            document.querySelector('#pesquisar_consultor_34123').scrollIntoView({
                                behavior: 'smooth'
                            });
                            /*noPost*/
                            document.querySelector(".submit").style.pointerEvents = 'none'
                            /*Alert*/
                            boxS = document.querySelector("#iPesquisarConsultor");
                            setTimeout(function() {
                                boxS.style.boxShadow = "red 0px 0em 0em 0em"
                            }, 250);
                            boxS.style.boxShadow = "red 0px 0em 0em .4em"
                        } else {
                            //consultor ok > set localStorage Save
                            document.querySelector(".idConsultor").value = localStorage.getItem("advogadoId")
                            document.querySelector(".submit").style.pointerEvents = 'all'
                        }
                    }

                    function submitForm_a() {
                        //Validar Campos antes de enviar Formulário
                        if (document.querySelector(".nome").value == "" || document.querySelector(".hr").value == "" || document.querySelector(".mensagem").value == "") {
                            popupA(false, "Preencha todos os campos Obrigatórios com *")
                        } else {
                            document.querySelector(".idConsultor").value = localStorage.getItem("consultorCod")
                            document.querySelector("#contato").submit()
                        }
                    }
                </script>

                <!-- <p>Todos os Serviços do <b>SENAE</b> são Gratuitos para quem já é Cliente de um de nossos Consultores de Negócios. <span class="o_dt">(CONTADORES CADASTRADOS)</span></p>
                <br>
                <p style="margin-top: 14px;">Se você já é Cliente de um Contador Credenciado pelo <b>SENAE</b> pode fazer sua Consulta Gratuitamente.</p> -->



                <!-- <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/consultoria-juridica-gratuita/?formulario" style=""><button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:2em;margin-top:2em;background: #f5f5f5;color: #04a;border: 2px solid #0044AA;font-weight: 111;box-shadow: 0 0 4px -2px;position: relative;">SOU CLIENTE DE UM CONSULTOR E TENHO O CÓDIGO DE ACESSO PARA FAZER A CONSULTORIA GRÁTIS
                        <i style="font-style: normal;position: absolute;right: 0;padding: 5px 15px;border: 2px solid #04a;background: orange;color: #fff;border-color: #00000012;border-radius: 10px 0 10px 0;pointer-events: none;font-size: 16px;bottom: 0;">Acessar</i>
                    </button>
                </a>


                <a target="_blank" href="https://senae.org/<?php echo $url_contador; ?>/porque-trocar-de-contador/" style="">
                    <button style="font-size: 23px;padding: 1em;border-radius: 12px;transition: .3s;margin-bottom:0em;background: #f5f5f5;color: #04a;border: 2px solid #0044AA;font-weight: 111;box-shadow: 0 0 4px -2px;width: 100%;position: relative;">PRETENDO TROCAR DE CONTADOR PARA TER CONSULTORIA JURÍDICA GRATUITA.
                        <i style="font-style: normal;position: absolute;right: 0;padding: 5px 15px;border: 2px solid #04a;background: orange;color: #fff;border-color: #00000012;border-radius: 10px 0 10px 0;pointer-events: none;font-size: 16px;bottom: 0;">Acessar</i>
                    </button>

                </a> -->
                <div id="diferencas">
                    <h2>Diferenças entre ASSESSORIA e CONSULTORIA </h2>
                    <p>A maior e mais relevante Diferença entre um Consultor e um Assessor é:</p>
                    <p>O Consultor aponta as Soluções, mas não se envolve na execução delas, enquanto o Assessor além de apontar a Solução, também se envolve para resolver o problema.</p>

                    <p>Lembrando que o SENAE, não presta Serviços de Consultoria ou Assessoria Jurídica.</p>
                    <p>Apenas encaminha para os Advogados Cadastrados as suas Dúvidas e Perguntas sobre questões Jurídicas.</p>
                </div>
            </div>


            <div id="areas_atuacao">
                <hr>
                <h2>Áreas de Atuação</h2>
                <div id="areas_at">
                    <div>
                        <div>
                            <h4>Direito do Trabalho</h4>
                        </div>
                        <span>Adicionais de Risco</span>
                        <span>Reclamação Trabalhista</span>
                        <span>Salário</span>
                        <span>Demanda de Empregador</span>
                        <span>Direito do Trabalho</span>
                        <span>Acidente de Trabalho</span>
                        <span>Assédio Moral no Trabalho</span>
                        <span>Férias</span>
                        <span>Empregada Gestante</span>
                        <span>Acúmulo ou Desvio de Função</span>
                    </div>

                    <div>
                        <div>
                            <h4>Trânsito</h4>
                        </div>
                        <span>Acidente de Trânsito</span>
                        <span>Lei Seca</span>
                        <span>DPVAT</span>
                        <span>Compra e Venda e Transferência de Veículo</span>
                        <span>Multa e Apreensão da CNH e Problemas Administrativos</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Administrativo</h4>
                        </div>
                        <span>Servidor Público</span>
                        <span>Concurso Público</span>
                        <span>Licitação</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Civil</h4>
                        </div>
                        <span>Vizinhança e Condomínio</span>
                        <span>Consórcio</span>
                        <span>Execução Fiscal</span>
                        <span>Cartão de Crédito</span>
                        <span>FIES</span>
                        <span>Plano de Saúde</span>
                        <span>Posse de Imóvel</span>
                        <span>Falência e Recuperação Judicial</span>
                        <span>Direito Empresarial</span>
                        <span>Usucapião</span>
                        <span>Registro Civil</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Constitucional</h4>
                        </div>
                        <span>FIES</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito de Família</h4>
                        </div>
                        <span>Divórcio</span>
                        <span>Guarda</span>
                        <span>Pensão Alimentícia</span>
                        <span>Reconhecimento de Paternidade</span>
                        <span>Inventário</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito de Propriedade</h4>
                        </div>
                        <span>Despejo</span>
                        <span>Usucapião</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito do Consumidor</h4>
                        </div>
                        <span>Problemas com Voo</span>
                        <span>Cartão de Crédito
                            <span>Concessionárias de Veículo</span>
                            <span>Atraso, Defeito e Troca de Produto</span>
                            <span>Empréstimo</span>
                            <span>Instituições de Ensino</span>
                            <span>Financiamento</span>
                            <span>Consórcio</span>
                            <span>Concessionárias de Água e Luz</span>
                            <span>Problemas com Banco</span>
                            <span>Cobrança Indevida ou Abusiva</span>
                            <span>Plano de Saúde</span>
                            <span>Operadoras de Telefonia</span>
                            <span>Direito do Consumidor</span>
                            <span>Negativação</span>
                        </span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Empresarial</h4>
                        </div>
                        <span>Falência e Recuperação Judicial</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Financeiro</h4>
                        </div>
                        <span>FIES</span>
                        <span>Financiamento</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Imobiliário</h4>
                        </div>
                        <span>Despejo</span>
                        <span>Compra e Venda de Imóveis</span>
                        <span>Financiamento Imobiliário</span>
                        <span>Quebra do Contrato de Locação</span>
                        <span>Atraso na Entrega de Imóvel</span>
                        <span>Usucapião
                        </span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Internacional</h4>
                        </div>
                        <span>Visto Internacional</span>
                        <span>Dupla Nacionalidade</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Penal</h4>
                        </div>
                        <span>Audiência de Custódia</span>
                        <span>Homicídio</span>
                        <span>Crimes Contra a Honra</span>
                        <span>Violência Sexual</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Previdenciário</h4>
                        </div>
                        <span>Auxílio-Doença</span>
                        <span>Auxílio-reclusão</span>
                        <span>Aposentadoria</span>
                        <span>Pensão por Morte</span>
                    </div>

                    <div>
                        <div>
                            <h4>Direito Tributário</h4>
                        </div>
                        <span>Dívida Ativa</span>
                        <span>Isenção Tributária</span>
                        <span>Execução Fiscal</span>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media only screen and (max-width: 600px) {
                #anunciar b u {
                    width: calc(100% - 40px);
                    text-align: center;
                    position: absolute;
                    text-decoration: none
                }
            }

            #anunciar button:hover {
                background: #0044AA !important;
                color: #fff !important
            }
        </style>


        <style>
            #areas_at {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                height: 1000px;



            }

            #areas_at span {
                margin-bottom: 10px !important;
                display: block;
                color: #3ae;
            }

            #areas_at>div {
                width: 250px
            }

            #areas_at h4 {
                color: #05a !important;
                margin-top: 15px;
                margin-bottom: 15px
            }

            @media only screen and (max-width: 1100px) {
                #areas_at {
                    height: 1350px;
                }

                #areas_atuacao {
                    max-width: 825px;
                    margin: auto
                }

                #areas_at span {
                    margin-bottom: 10px !important;
                }

            }

            @media only screen and (max-width: 750px) {
                #areas_at {
                    height: 1850px;
                }

                #areas_atuacao {
                    max-width: 500px;
                    margin: auto;
                }

                #areas_at span {
                    margin-bottom: 10px !important;
                }

            }

            @media only screen and (max-width: 750px) {
                #areas_at {
                    height: max-content;
                }

                #areas_atuacao {
                    max-width: 250px;
                    margin: auto;
                    margin-bottom: 50px
                }

                #areas_at span {
                    margin-bottom: 10px !important;
                }

            }

            #areas_at span {
                font-family: Helvetica, Arial, sans-serif;
                line-height: 27.2px
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

            @media only screen and (max-width: 600px) {
                #diferencas {
                    margin-top: 20px
                }
            }
        </style>
    </div>


<?php
}
?>
<script>
    var page_title = "Consultoria Jurídica Gratuita"
</script>