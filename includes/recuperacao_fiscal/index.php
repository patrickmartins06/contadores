<img class="senae_header_img" src="https://senae.org/imgs/recuperacao%20fiscal.webp">

<div id="content" style="padding-bottom: 60px;">

    <style>
        .senae_header_img {
            margin-bottom: 50px !important;
            width: 100%;
            margin-left: 0
        }

        #content {
            max-width: 1100px;
            margin: auto;
            display: block;
            padding: 0 20px!important;
            width: calc(100% - 40px)!important;
            padding-bottom: 40px!important;
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
        #texto_a p {
            padding: 10px 0
        }

        #content {
            font-size: 20px
        }
    </style>


    <div id="texto_a">
        <h1 class="o_mb" style="text-align: center;margin-top: 25px;padding: 0 20px !important;">RECUPERE PARTE DE SEUS IMPOSTOS PAGOS</h1>
        <p>De acordo com o Instituto Brasileiro de Planejamento e Tributação (IBPT), cerca de 95% das empresas pagam mais impostos do que deveriam. Isto porque, a legislação tributária brasileira é muito complexa, com mais de 40 mil leis tributárias em vigor.</p>
        <p>Estima-se que sejam criadas em torno de 46 novas leis tributárias todos os dias, sendo obrigação do contribuinte identificar a legislação aplicada à sua operação.</p>
        <p>O que poucos sabem é que é possível fazer a recuperação dos valores pagos indevidamente.</p>

        <p><b>SIMULE QUANTO SUA EMPRESA TEM LEGALMENTE PARA RECUPERAR.</b></p>

        <p style="margin-bottom: -25px;"><b>É UM DINHEIRO QUE VOCÊ NEM IMAGINAVA QUE PODIA TER PARA RECUPERAR.</b></p>
    </div>

    <?php /* SIMULADOR */ //require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/simulador.php';
    // BEGIN CONTENT SIMULADOR
    ?>

    <div>
        <script src='https://kit.fontawesome.com/704ff50790.js' crossorigin='anonymous'></script>

        <script>
            function consulta_enviada() {
                document.querySelector("body").insertAdjacentHTML("beforeend", `
                    <div id="consulta_enviada" style="position: fixed;left: 0;top: 0;width: calc(100% - 40px);height: calc(100% - 40px);background: #0009;z-index: 999;display: flex;align-items: center;justify-content: center;text-align: center;padding: 20px;color: #fff;font-size: 28px;">
                        <span style="backdrop-filter: blur(4px);border: 2px solid;border-radius: 5px;padding: 29px;max-width: 500px;background: #333;background: linear-gradient(#04A, #002051);position: relative;">Consulta Enviada com Sucesso, lhe informaremos o quanto você irá economizar ao trocar de contador pelo Whatsapp.
                            <i onclick="this.parentElement.parentElement.remove()" class="fa fa-times" aria-hidden="true" style="cursor: pointer;background: red;padding: 5px;border-radius: 5px;top: -13px;position: absolute;right: -13px;font-size: 36px;width: 36px;"></i>
                        </span>
                    </div>
                `)
            }



            function send_pesquisa() {
                var regime_ = document.querySelector("#economia .mn_item.act").textContent;

                if (regime_ == "SIMPLES NACIONAL") {
                    var atividade_ = document.querySelector("#atividade_s").value
                    var valor_contab_ = document.querySelector("#valor_contab_s").value
                    var soc_func_ = document.querySelector("#soc_func_s").value
                    var fat_mens_ = document.querySelector("#fat_mens_s").value;

                    var nome_ = document.querySelector("#nome_s").value;
                    var whats_ = document.querySelector("#whats_s").value;
                    var email_ = document.querySelector("#email_s").value;
                } else {
                    var atividade_ = document.querySelector("#atividade_p").value
                    var valor_contab_ = document.querySelector("#valor_contab_p").value
                    var soc_func_ = document.querySelector("#soc_func_p").value
                    var fat_mens_ = document.querySelector("#fat_mens_p").value;

                    var nome_ = document.querySelector("#nome_p").value;
                    var whats_ = document.querySelector("#whats_p").value;
                    var email_ = document.querySelector("#email_p").value;
                }

                var email_contador = "<?php echo $email; ?>"

                $.ajax({
                    url: 'https://senae.org/includes/enviar_trocar_contador_economia.php?' + 'atividade_=' + atividade_ + '&' + 'valor_contab_=' + valor_contab_ + '&' + 'soc_func_=' + soc_func_ + '&' + 'fat_mens_=' + fat_mens_ + '&' + 'regime_=' + regime_ + '&' + 'nome_=' + nome_ + '&' + 'whats_=' + whats_ + '&' + 'email_=' + email_ + '&' + 'email_contador=' + email_contador + '&' + '<?php echo time(); ?>',
                    success: function(ret) {
                        console.log(ret)
                        consulta_enviada()
                    }
                })
            }
        </script>

        <div id="simulador_p" style="display: flex;align-items: center;justify-content: center;padding: 3em 0;">

            <style>
                * {
                    outline: none
                }

                #simulador {
                    display: flex;
                    flex-direction: column;
                    align-content: center;
                    justify-content: center;
                    width: 100%;
                    max-width: 500px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding-bottom: 25px;
                    color: #222
                }


                #sm_segmento select {
                    width: calc(100% - 60px);
                    font-size: 15px;
                    padding: 12px 0;
                    color: #333;
                    text-shadow: 0 1px 0 #fff;
                    font-weight: 777;
                    border: 0;
                    border-radius: 5px;
                    background: #f5f5f5;
                    border: 1px solid #ccc;
                    margin-top: 15px
                }

                #simulador h1 {
                    font-size: 20px;
                    font-weight: 333;
                    margin: 5px 0;
                    margin-top: 25px
                }

                #sm_botoes {
                    margin-top: 20px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0 30px;
                }

                #sm_botoes * {
                    margin: 10px;
                    width: 100%;
                    font-size: 17px;
                    padding: 12px 0;
                    background: orange;
                    border: 0;
                    border-radius: 5px;
                    color: #fff;
                    text-shadow: 1px 1px 0px #05a5;
                    font-weight: 777;
                    border: 2px solid #05a5;
                    border-left: 0;
                    border-top: 0;
                    cursor: pointer
                }

                #sm_botoes *:hover {
                    opacity: .75;

                }

                #sm_titulo,
                #sm_segmento_titulo {
                    text-align: center;
                }

                #sm_valor_vaturamento {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                #sm_segmento {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                #sm_botoes {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                }

                #sm_valor_vaturamento {
                    margin-top: 15px;
                    padding: 0 30px;
                }

                #sm_valor_vaturamento input,
                #sm_valor_vaturamento span {
                    height: 35px;
                    border: 0;
                    margin: 0 !important;
                    padding: 0 !important;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: #f5f5f5;
                    border: 1px solid #ccc;
                }

                #sm_valor_vaturamento input {
                    border-left: 0;
                    border-radius: 0 5px 5px 0;
                    width: 100%;
                    font-size: 15px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #333
                }

                #sm_valor_vaturamento span {
                    border-right: 0;
                    padding: 0 10px !important;
                    color: #888;
                    border-radius: 5px 0 0 5px
                }

                #close_x:hover {
                    opacity: .75;
                }
            </style>

            <script>
                function moeda(a, e, r, t) {
                    let n = "",
                        h = j = 0,
                        u = tamanho2 = 0,
                        l = ajd2 = "",
                        o = window.Event ? t.which : t.keyCode;
                    if (13 == o || 8 == o)
                        return !0;
                    if (n = String.fromCharCode(o),
                        -1 == "0123456789".indexOf(n))
                        return !1;
                    for (u = a.value.length,
                        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
                    ;
                    for (l = ""; h < u; h++)
                        -
                        1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
                    if (l += n,
                        0 == (u = l.length) && (a.value = ""),
                        1 == u && (a.value = "0" + r + "0" + l),
                        2 == u && (a.value = "0" + r + l),
                        u > 2) {
                        for (ajd2 = "",
                            j = 0,
                            h = u - 3; h >= 0; h--)
                            3 == j && (ajd2 += e,
                                j = 0),
                            ajd2 += l.charAt(h),
                            j++;
                        for (a.value = "",
                            tamanho2 = ajd2.length,
                            h = tamanho2 - 1; h >= 0; h--)
                            a.value += ajd2.charAt(h);
                        a.value += r + l.substr(u - 2, u)
                    }
                    return !1
                }
            </script>
            <script>
                function calcularCredito() {


                    var valueA = document.querySelector("#sm_valor_vaturamento input").value

                    var segmentoV = document.querySelector("#sm_segmento select").value

                    valueA = valueA.split(".").join("")

                    var ec_mensal = parseInt(valueA) * parseFloat(segmentoV)

                    var ec_apurad = ec_mensal * 60
                    ec_apurad = ec_apurad.toFixed(2).split(".").join(",")
                    ec_mensal = ec_mensal.toFixed(2).split(".").join(",")

                    if (document.querySelector("#sumilacao_popUp_p") != undefined) {
                        document.querySelector("#sumilacao_popUp_p").remove()
                    }
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
        
                <div id="sumilacao_popUp_p" style="position: fixed;left: 0;top: 0;display: flex;align-items: center;justify-content: center;width: 100%;height: 100%;">

                <div onclick="close_pop()" id="blackBack" style="position: fixed;width: 100%;height: 100%;background: #000a;"></div>

                <div id="simulacao_popUp" style="/*! position: fixed; */max-width: 450px;width: 100%;border: 1px solid #ccc;background: #f5f5f5;border-radius: 3px;z-index: 99999;">
                <div style="border-bottom: 1px solid #ccc;display: flex;justify-content: end;">
                <span onclick="close_pop()" id="close_x" style="color: #777;font-weight: 999;padding: 15px 20px;cursor: pointer;transition: 0.1s;">x</span>
                </div>
                <div style="display: flex;align-items: center;justify-content: center;padding: 5px 0;">
                <!-- <img loading="lazy" alt="Cifrão" width="500px" src="https://senae.com.br/sebrae/includes/imgs/icone.png" style="width: 95px;"> -->
                </div>
                <div style="display: flex;flex-direction: column;align-items: center;color: #0c0;font-size: 18px;padding-top: 15px;">
                <span>CRÉDITO APURADO R$ ` + ec_apurad + `</span>
                <span>ECONOMIA MENSAL R$ ` + ec_mensal + `</span>
                </div>
                <div style="color: #222;margin: 36px;">
                <p style="text-align: center;">OS VALORES SÃO ESTIMADOS COM BASE NO SEGMENTO DE ATUAÇÃO E FATURAMENTO, O VALOR REAL SERÁ APURADO APÓS O FECHAMENTO DO CONTRATO COM OS DADOS ORIGINAIS DA EMPRESA.</p>
                </div>
                </div>

                </div>
        
        `)

                }

                function close_pop() {

                    if (document.querySelector("#sumilacao_popUp_p") != undefined) {
                        document.querySelector("#sumilacao_popUp_p").remove()
                    }

                }
            </script>

            <div id="simulador">
                <div id="sm_titulo">
                    <h1>INFORME SEU FATURAMENTO MENSAL</h1>
                </div>
                <div id="sm_valor_vaturamento">
                    <span>R$</span>
                    <input style="height: 35px !important;" onkeypress="return(moeda(this,`.`,`,`,event))" type="text" placeholder="DIGITE AQUI">
                </div>
                <div id="sm_segmento_titulo">
                    <h1>QUAL É O SEU SEGMENTO?</h1>
                </div>
                <div id="sm_segmento" style="position: relative;">
                    <select style="padding-left: 10px;">
                        <option value="0.0043">Adega</option>
                        <option value="0.0050">Autopeças</option>
                        <option value="0.0016">Bares/Restaurantes</option>
                        <option value="0.0016">Casa de show</option>
                        <option value="0.0031">Centro automotivo</option>
                        <option value="0.0056">Farmacias</option>
                        <option value="0.0043">Loja de conveniencia</option>
                        <option value="0.0006">Mercados/Mercearias</option>
                        <option value="0.0053">Perfumaria</option>
                        <option value="0.0019">Petshop</option>
                    </select>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div id="sm_botoes">
                    <button onclick="calcularCredito()">CALCULAR SEU CREDITO!</button>
                    <a href="https://senae.org/<?php echo $url_contador; ?>/porque-trocar-de-contador/?restituir" target="_blank" rel="noopener noreferrer" style="text-align: center;">QUERO RESTITUIR AGORA!</a>
                </div>
            </div>
        </div>


        <style>
            #sm_segmento {
                position: relative;
            }

            #sm_segmento i {
                position: absolute !important;
                right: 45px;
                top: 28px;
                font-size: 14px;
                font-weight: 777;
                color: #3337;
                pointer-events: none;
            }

            #sm_segmento select {
                padding-left: 10px
            }
        </style>


        <!-- <div id="economia" style="max-width: 500px;margin: auto;margin-top: 50px;">
            <div>
                <h2 style="margin-top: 50px;margin-bottom: 40px;display: block;text-align: center;margin: 0;margin-bottom: 10px;">Veja o quanto você pode Economizar com a sua Contabilidade.</h2>
            </div>
            <div style="display: flex;">
                <div style="margin: auto;width: 100%;">
                    <p style="font-size: 17px;color: #30455cdd !important;">1. Selecione seu regime tributário atual</p>
                    <div style="display: flex;height: 80px;display: flex;width: calc(100% + 3px);">
                        <p id="mn_simples" onclick="simples_nacional()" style="height: 100%;align-items: center;justify-content: center;display: flex;/*! border: 2px solid #002867; *//*! border-bottom: 0; */width: 250px;cursor: pointer;font-size: 18px;font-weight: 555;color: #002867 !important;border-radius: 5px 5px 0 0;text-align: center;display: block;margin: 0;align-items: center;justify-content: center;display: flex;" class="mn_item act">SIMPLES NACIONAL</p>
                        <p id="mn_presumido" onclick="lucro_presumido()" style="height: 100%;display: flex;align-items: center;justify-content: center;/*! border-bottom: 2px solid #002867; */width: 250px;cursor: pointer;font-size: 18px;font-weight: 555;color: #002867 !important;border-radius: 5px 5px 0 0;text-align: center;display: block;margin: 0;display: flex;align-items: center;justify-content: center;" class="mn_item">LUCRO PRESUMIDO</p>
                    </div>
                    <div style="width: 500px;border: 2px solid #002867;border-top: 0;padding: 25px;border-radius: 0 0 5px 5px;width: calc(100% - 51px);/*! padding-top: 0; */">
                        <div id="lucro_s" style="display: flex;">
                            <div style="width: 100%;">
                                <span style="font-size: 17px;color: #30455cdd !important;">2. Qual a sua Atividade?</span>
                                <select name="atividade_s" id="atividade_s" style="margin-bottom: 30px;border: 0;border-bottom: 2px solid #3ae;text-align: center;color: #30455cdd !important;font-weight: 555;outline: none;margin-top:15px">
                                    <option disabled="disabled" value="0">Escolha sua Atividade</option>
                                    <option value="Serviços">Serviços</option>
                                    <option value="Comércio">Comércio</option>
                                    <option value="Serviços + Comércio">Serviços + Comércio</option>
                                    <option value="Indústria">Indústria</option>
                                </select>
                                <span style="font-size: 17px;color: #30455cdd !important;">3. Quanto você paga de contabilidade por mês?</span>
                                <div style="display: flex;border-bottom: 2px solid #3ae;margin-bottom: 30px;position: relative;width: 100%;">
                                    <b style="font-size: 24px;display: flex;align-items: end;position: absolute;margin-top: 5px;color: #30455C;">R$</b>
                                    <input name="valor_contab_s" id="valor_contab_s" type="text" placeholder="400" value="400" style="border: 0;text-align: center;font-weight: 555;font-size: 24px;padding-bottom: 2px;display: flex;color: #30455C;width: 100%;">
                                </div>
                                <span style="font-size: 17px;color: #30455cdd !important;">4. Quantos sócios/funcionários têm na sua empresa?</span>
                                <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;width: 100%;">
                                    <button style="padding: 0 15px;">-</button>
                                    <input name="soc_func_s" id="soc_func_s" placeholder="00" type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;">
                                    <button style="padding: 0 15px;">+</button>
                                </div>
                                <span style="font-size: 17px;color: #30455cdd !important;">5. Qual o faturamento mensal? </span>
                                <select name="fat_mens_s" id="fat_mens_s" style="margin-bottom: 30px;border: 0;border-bottom: 2px solid #3ae;text-align: center;outline: none;color: #30455C;font-weight: 555;">
                                    <option value="0" disabled="disabled">Escolha o Faturamento Mensal</option>
                                    <option value="Até R$ 25.000"> Até R$ 25.000</option>
                                    <option value="De R$ 25.000 a R$ 50.000"> De R$ 25.000 a R$ 50.000</option>
                                    <option value="De R$ 50.000 a R$ 100.000"> De R$ 50.000 a R$ 100.000 </option>
                                    <option value="De R$ 100.000 a R$ 150.000"> De R$ 100.000 a R$ 150.000 </option>
                                    <option value="De R$ 150.000 a R$ 200.000"> De R$ 150.000 a R$ 200.000 </option>
                                    <option value="De R$ 200.000 a R$ 1.000.000"> De R$ 200.000 a R$ 1.000.000 </option>
                                    <option value="Mais de R$ 1.000.000"> Mais de R$ 1.000.000 </option>
                                </select>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">6. Digite seu Nome</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;" placeholder="" id="nome_s" name="nome_s">

                                    </div>
                                </div>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">7. WhatsApp</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input type="tel" maxlength="15" onkeyup="handlePhone(event)" name="whats_s" id="whats_s" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;" placeholder="">

                                    </div>
                                </div>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">8. E-mail</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input name="email_s" id="email_s" type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;" placeholder="">

                                    </div>
                                </div>
                                <a onclick="send_pesquisa()" style="cursor:pointer;display: block;text-align: center;background: #3ae;border-radius: 5px;padding: 7px;background-color: #04f7f7;color: #002868;border: 1px solid #04f7f7;box-shadow: 4px 3px 15px 0 rgba(12,23,36,.1);font-size: 17px;font-weight: 555;margin-top: 10px;">Enviar</a>
                            </div>
                        </div>
                        <div id="lucro_p" style="display: none;">
                            <div style="width: 100%;">
                                <span style="font-size: 17px;color: #30455cdd !important;">2. Qual a sua Atividade?</span>
                                <select name="atividade_p" id="atividade_p" style="margin-bottom: 30px;border: 0;border-bottom: 2px solid #3ae;text-align: center;color: #30455cdd !important;font-weight: 555;outline: none;margin-top:15px">
                                    <option disabled="disabled" value="0">Escolha sua Atividade</option>
                                    <option value="Serviços">Serviços</option>
                                    <option value="Outras Atividades">Outras Atividades</option>
                                </select>
                                <span style="font-size: 17px;color: #30455cdd !important;">3. Quanto você paga de contabilidade por mês?</span>
                                <div style="display: flex;border-bottom: 2px solid #3ae;margin-bottom: 30px;position: relative;">
                                    <b style="font-size: 24px;display: flex;align-items: end;position: absolute;margin-top: 5px;color: #30455C;">R$</b>
                                    <input name="valor_contab_p" id="valor_contab_p" type="text" placeholder="400" value="400" style="border: 0;text-align: center;font-weight: 555;font-size: 24px;padding-bottom: 2px;display: flex;color: #30455C;width: 100%;">
                                </div>
                                <span style="font-size: 17px;color: #30455cdd !important;">4. Quantos sócios/funcionários têm na sua empresa?</span>
                                <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">
                                    <button style="padding: 0 15px;cursor: pointer;">-</button>
                                    <input name="soc_func_p" id="soc_func_p" placeholder="00" type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;">
                                    <button style="padding: 0 15px;cursor: pointer;">+</button>
                                </div>
                                <span style="font-size: 17px;color: #30455cdd !important;">5. Qual o faturamento mensal? </span>
                                <select name="fat_mens_p" id="fat_mens_p" style="margin-bottom: 30px;border: 0;border-bottom: 2px solid #3ae;text-align: center;outline: none;color: #30455C;font-weight: 555;">
                                    <option value="0" disabled="disabled">Escolha o Faturamento Mensal</option>
                                    <option value="Até R$ 25.000"> Até R$ 25.000</option>
                                    <option value="De R$ 25.000 a R$ 50.000"> De R$ 25.000 a R$ 50.000</option>
                                    <option value="De R$ 50.000 a R$ 100.000"> De R$ 50.000 a R$ 100.000 </option>
                                    <option value="De R$ 100.000 a R$ 150.000"> De R$ 100.000 a R$ 150.000 </option>
                                    <option value="De R$ 150.000 a R$ 200.000"> De R$ 150.000 a R$ 200.000 </option>
                                    <option value="De R$ 200.000 a R$ 1.000.000"> De R$ 200.000 a R$ 1.000.000 </option>
                                    <option value="Mais de R$ 1.000.000"> Mais de R$ 1.000.000 </option>
                                </select>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">6. Digite seu Nome</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;" placeholder="" id="nome_p" name="nome_p">

                                    </div>
                                </div>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">7. WhatsApp</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input type="tel" maxlength="15" onkeyup="handlePhone(event)" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;" placeholder="" id="whats_p" name="whats_p">

                                    </div>
                                </div>
                                <div>
                                    <span style="font-size: 17px;color: #30455cdd !important;">8. E-mail</span>
                                    <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">

                                        <input type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;" placeholder="" id="email_p" name="email_p">

                                    </div>
                                </div>
                                <a onclick="send_pesquisa()" style="cursor:pointer;display: block;text-align: center;background: #3ae;border-radius: 5px;padding: 7px;background-color: #04f7f7;color: #002868;border: 1px solid #04f7f7;box-shadow: 4px 3px 15px 0 rgba(12,23,36,.1);font-size: 17px;font-weight: 555;margin-top: 10px;">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->




        <script>
            function simples_nacional() {
                document.querySelector("#lucro_s").style.display = "flex";
                document.querySelector("#lucro_p").style.display = "none";
                document.querySelector("#mn_simples").classList.add("act")
                document.querySelector("#mn_presumido").classList.remove("act")
            }

            function lucro_presumido() {
                document.querySelector("#lucro_s").style.display = "none";
                document.querySelector("#lucro_p").style.display = "flex";
                document.querySelector("#mn_simples").classList.remove("act")
                document.querySelector("#mn_presumido").classList.add("act")
            }
        </script>

        <style>
            #economia .act {
                border: 2px solid #002867;
                border-bottom-color: rgb(0, 40, 103);
                border-bottom-style: solid;
                border-bottom-width: 2px;
                border-bottom: 0 !important;
                ;
            }

            #economia .mn_item {
                border-bottom: 2px solid;
            }
        </style>


        <script>
            function calc_regime() {
                var regime_ = document.querySelector("#economia .mn_item.act").textContent;

                if (regime_ == "SIMPLES NACIONAL") {
                    var atividade_ = document.querySelector("#atividade_s").value
                    var valor_contab_ = document.querySelector("#valor_contab_s").value
                    var soc_func_ = document.querySelector("#soc_func_s").value
                    var fat_mens_ = document.querySelector("#fat_mens_s").value;
                } else {
                    var atividade_ = document.querySelector("#atividade_p").value
                    var valor_contab_ = document.querySelector("#valor_contab_p").value
                    var soc_func_ = document.querySelector("#soc_func_p").value
                    var fat_mens_ = document.querySelector("#fat_mens_p").value;
                }

                $.ajax({
                    url: 'https://senae.com.br/scripts/email/enviar_trocar_contador_economia.php?' + 'atividade_=' + atividade_ + '&' + 'valor_contab_=' + valor_contab_ + '&' + 'soc_func_=' + soc_func_ + '&' + 'fat_mens_=' + fat_mens_ + '&' + 'regime_=' + regime_,
                    success: function(ret) {
                        console.log(ret)
                    }
                })
            }
        </script>

        <style>
            @media only screen and (max-width: 600px) {
                #economia span {
                    text-align: center
                }
            }

            #economia {
                max-width: 500px !important;
            }

            #economia select {
                height: 30px !important;
                background: #0000;
                display: block;
                width: 100%;
                font-size: 17px
            }

            #economia span {
                width: 100% !important;
                display: block !important;
            }

            #economia button {
                border: 0;
                background: 0;
                font-weight: 777 !important;
            }

            #economia button:hover {}

            @media only screen and (min-width: 600px) {
                .o_mb {
                    display: none;
                }
            }

            @media only screen and (max-width: 600px) {
                .senae_header_img {
                    display: none !important;
                }
            }

            #simulador select {
                -webkit-appearance: none;
                -moz-appearance: none;
                text-indent: 1px;
                text-overflow: '';
            }
        </style>

    </div>

    <?php
    // END CONTENT SIMULADOR
    ?>

    <!-- <div style="margin: 30px 20px;">
        [pesquisar_consultor]
    </div> -->

</div>

<style>
    @media only screen and (max-width: 600px) {
        #content {
            padding: 0;
        }

        #simulador_p {
            padding-bottom: 0 !important;
        }

        .consultores_list {
            padding-top: 5px !important;
        }

        .consultores_list h3 {
            margin-bottom: 30px !important;
            padding: 0 !important;
        }
    }

    @media only screen and (min-width: 600px) {
        #simulador_p {
            padding-bottom: 0 !important;
        }
    }
</style>