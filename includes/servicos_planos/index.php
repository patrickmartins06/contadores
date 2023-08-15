<?php // require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ 
?>

<script>
    document.querySelector('title').textContent = '<?php echo $nome; ?> - Serviços / Planos'
</script>

<style>
    h1,
    h2,
    h3 {
        color: #3a3a3a
    }

    body {
        color: #5b5a5a;
        font-family: arial !important
    }

    p,
    b {
        font-size: 14px;
    }

    table {
        width: 100%;
    }

    tr {
        display: grid;
        grid-template: 5em / 33% 33% 33%;
    }

    td {
        border: 1px solid #aaa;
        display: table-cell;
        padding: 1em;
    }

    .nossa_equipe img {
        filter: saturate(0);
        transition: .3s;
        height: 136px;
    }

    .nossa_equipe img:hover {
        filter: saturate(1);
    }

    .nosso_escritorio div {
        background-size: 180%;
        transition: .5s;
    }

    .nosso_escritorio div:hover {
        background-size: 200%;
        cursor: pointer;
    }
</style>
<style>
    @media only screen and (max-width: 600px) {
        #ct_ {
            z-index: 2 !important;
            position: relative !important;
            background: #fff;
        }

        #ct_a {
            grid-template-columns: auto !important;
            margin-top: 0 !important;
            padding-top: 2em !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 80% !important;
            margin: 0 10% !important;
            background: #0000
        }

        #ct_a img,
        #ct_b img {
            width: 100% !important;
        }

        #ct_a h1,
        #ct_c h2 {
            text-align: center;
            padding: 0 !important;
        }

        #ct_a>div,
        #ct_b img {
            margin-left: 0 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        #ct_b {
            padding: 0 !important;
        }

        #ct_c>div {
            padding: 1% 10% !important;
            background: #0000;
        }

        #ct_c tr {
            grid-template: auto / 33% 33% 33% !important
        }

        #ct_d,
        #ct_e,
        #ct_f,
        #ct_g {
            padding: 2% 10% !important;
        }

        td {
            text-align: center !important;
            font-size: 14px !important;
            padding: 7px !important;
        }

        #ct_h {
            padding: 0 !important;
        }

        #ct_h>div {
            grid-template-columns: 50% 50% !important;
        }

        #ct_h img {
            width: 100% !important;
            height: 55% !important
        }

        #ct_i {
            padding: 0 !important;
        }

        #ct_i div {
            grid-template-columns: auto auto !important;
            width: 100% !important;
        }

        #ct_ h2 {
            text-align: center !important
        }
    }

    @media only screen and (min-width: 600px) {
        #ct_a {
            width: 100%;
            max-width: 1100px;
            padding-left: 1em !important;
            padding-right: 1em !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }
</style>

<div id='ct_' style='margin: auto;display: block;/*! padding: 0.5em 11em; */'>
    <div id='ct_a' style='margin: auto;display: grid;grid-template: auto / 50% 50%;margin-top: 2em;padding: 0.5em 11em;'>
        <img src='https://senae.org/imgs/servicos.jpg' alt='' style='margin: auto;display: block;width: 566px;'>
        <div style='margin-left: 2em;display: block;font-family: arial;'>
            <h1 style='font-weight: normal;font-size: 24px;font-family: arial;text-decoration:underline'>SERVIÇOS CONTÁBEIS EM GERAL</h1>
            <p>Serviços de Contabilidade em Geral</p>
            <p>(MEI, Micro, Pequena, Média e Grande Empresa)</p>
            <b>Departamento de Pessoal e Assessoria em RH</b>
            <p>Planejamento Tributário (Levantamentos de Impostos mais Baratos)</p>
            <b>Abertura e Encerramento de Empresas</b>
            <p>Livro Caixa de Profissionais Liberais (MÉDICOS)</p>
            <b>Condomínios</b>
            <p>Certidões Negativas</p>
            <b>Regularização de Alvarás</b>
            <p>Impostos de Renda pessoa Física e Jurídica</p>
        </div>
        <div style='margin-top: 2em;'>
            <h1 style='font-weight: normal;font-size: 24px;font-family: arial;text-decoration:underline'>SERVIÇOS COMPLEMENTARES</h1>
            <b>Declaração de Rendimentos</b>
            <p>Processo para Você Vender para o Governo/Licitações/Concorrência</p>
            <b>Processo para Financiamento Imobiliário e Despachante Imobiliário</b>
            <p>Processo PROGER para Financiamentos e Empréstimos para Capital de Giro, etc.</p>
            <b>Confecção de Contratos com Terceiros</b>
            <p>Confecção de Manuais de Funções Trabalhistas (Para que o Funcionário saiba todas as suas Atribuições)</p>
            <b>Acompanhamento do Plano de Negócios e de Viabilidade Econômica para fazer os acertos para sua Empresa Crescer.</b>
            <p>Assessoria para Implementação de Sistemas Administrativos e Gerenciais</p>
            <b>– Assessoria para Ações de Marketing e de Vendas</b>
            <p>– Formação de Grupos de Excursões para Feiras Negócios</p>
            <b>– Assessoria para Entrar em novos Mercados afins como Venda pela Internet, etc.</b>
            <p>– Entre muitos outros que pode Precisar. (Consulte Grátis)</p>
        </div>

        <div style='font-family: arial;margin-left: 2em;margin-top: 2em;'>

            <h1 style='font-weight: normal;font-size: 24px;font-family: arial;text-decoration:underline;padding-left:50px'>PRINCIPAIS MERCADOS</h1>

            <div style="padding-left:100px">
                <b> - Prestadores de Serviços</b>
                <p> - Profissionais de Saúde</p>
                <b> - Corretores de Imóveis</b>
                <p> - Corretores de Advogados</p>
                <b> - Arquitetos/Engenheiros</b>
                <p> - Empresas de Transporte</p>
                <b> - Corretores de Imóveis</b>
                <p> - Empresas Imobiliárias</p>
                <b> - Postos de Gasolina</b>
                <p> - Representações Comerciais</p>
                <!-- <b> - Abertura de Empresas Salão de Beleza</b> -->
                <!-- <p> - Pizzarias e Lanches em Geral</p> -->
                <b> - Restaurantes</b>
                <p> - Lojas e Comércios de Bairros</p>
                <b> - Vendas pela Internet</b>
            </div>

        </div>
    </div>
    <!-- <div id='ct_b' style='padding: 0.5em 11em;'>
        <a target='_blank' href='https://www.papira.com.br/afiliados/convidado/LAZARO232323'><img src='https://senae.com.br/wp-content/uploads/2021/10/baner.jpg' alt='Papira Gráfica 24h' style='display: block;margin: auto;padding: 2em;'></a>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/servicos2.jpg' alt='' style='width: 100%;'>
    </div> -->
    <br>
    <hr>
    <br>













    <div id="tab__">

        <div id="page_content">
            <script src="https://senae.com.br/scripts/includes/setCidade.js?<?php echo time(); ?>"></script>
            <div id="abrir_empresa_form">
                <div>
                    <h3 style="margin-top: 0;">Abrir Empresa - Grátis</h3>
                </div>
                <div class="fields">
                    <label class="   " for="nome">Nome Completo</label>
                    <input class="req" type=" text" name="nome" id="nome" onkeyup="handleNome()">
                    <label class="   " for="email">E-mail</label>
                    <input class="req" type="text" name="email" id="email" onkeyup="handleMail()">
                    <label class="   " for="celular">Celular</label>
                    <input class="req" type="tel" maxlength="15" onkeyup="handlePhone(event)" name="celular" id="celular">

                    <label for="atividade">Qual atividade você vai exercer ? </label>
                    <input class="req" type="text" name="atividade" id="atividade">

                    <label class="   " for="cep">CEP do endereço de registro da empresa</label>
                    <input onchange="setcidad()" placeholder="" maxlength="9" min="8" id="cep" class="cep" type="text" name="cep">

                    <label class="   " for="estado">Estado</label>
                    <select id="estado" onchange="setcidad()" class="uf estado" type="text" name="estado" required>
                        <option value="0">-</option>
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

                    <label class="   " for="cidade">Cidade</label>
                    <select id="cidade" class="cidade" type="text" name="cidade" required>
                        <option value="0">-</option>
                    </select>

                    <label class="   " for="bairro">Bairro</label>
                    <input id="bairro" placeholder="" class="bairro" type="text" name="bairro" required>

                    <label class="   " for="rua">Rua</label>
                    <input id="rua" class="req rua" type="text" name="rua" id="rua">
                    <label class="   " for="numero">Número</label>
                    <input class="req numero" type="text" name="numero" id="numero">


                    <label class="   " for="complemento">Complemento</label>
                    <input class="   " type="text" name="complemento" id="complemento">

                </div>

                <button onclick="avancar_a()">Avançar</button>
                <button onclick="fillAll()">Preencher</button>


            </div>

            <div id="escolha_seu_plano">

                <div class="titulo">
                    <h3>Escolha seu Plano</h3>
                    <p>Escolha abaixo um plano que atende às necessidades da sua empresa.</p>
                </div>

                <!-- <div id="porque_escolher">
                    <div class="toggle_head">
                        <p>
                            <b>Por que pagar por um plano se a abertura da empresa é gratuita? </b>
                            <i class="fas fa-chevron-left"></i>
                        </p>
                    </div>
                    <div class="toggle_content">
                        <p>Para a sua empresa ser aberta, ela precisa por lei, de um contador (Lei 10.406/02 - art. 1.179 do Código Civil).</p>
                        <p>O valor do plano escolhido agora é um adiantamento da sua primeira mensalidade como cliente.</p>
                        <p>Normalmente o processo burocrático completo de abertura custa em média R$ 1.500,00, mas não cobramos nada.</p>
                    </div>
                </div> -->

                <div id="tabela_d">

                    <div class="line_1">
                        <div class="info">
                            <div>
                                <!-- <b> Mais de 25% de desconto nos</b>
                        <b> planos Padrão e EXPERTS. </b> -->
                                <b style="font-size: 30px;">PLANOS</b>
                            </div>

                        </div>


                        <div class="plano_a">
                            <div>
                                <div>
                                    <h2>PLANO<br>I</h2>
                                </div>
                                <div>
                                    <span>a partir de</span>
                                    <span>R$ <span style="text-decoration-line: line-through;font-size: 35px;">310</span> por</span>
                                </div>
                                <div>
                                    <b>R$</b>
                                    <b class="valor">219</b>
                                    <span>/mês</span>
                                </div>
                                <div>
                                    <!-- <span>Atendimento via</span>
                            <span> WhatsApp até 22h.</span> -->
                                </div>
                                <div>
                                    <!-- <button onclick="contratar(219, 'I')">CONTRATAR</button> -->
                                </div>
                            </div>
                        </div>

                        <div class="plano_a">
                            <div>
                                <div>
                                    <h2>PLANO<br>II</h2>

                                </div>
                                <div>
                                    <span>a partir de</span>
                                    <span>R$ <span style="text-decoration-line: line-through;font-size: 35px;">589</span> por</span>
                                </div>
                                <div>
                                    <b>R$</b>
                                    <b class="valor">399</b>
                                    <span>/mês</span>
                                </div>
                                <div>
                                    <!-- <span>Assessor cuidando de</span>
                            <span>tudo para você.</span> -->
                                </div>
                                <div>
                                    <!-- <button onclick="contratar(399, 'II')">CONTRATAR</button> -->
                                </div>
                            </div>
                        </div>

                        <div class="plano_a">
                            <div>
                                <div>
                                    <h2>PLANO<br>III</h2>
                                </div>
                                <div>
                                    <span>a partir de</span>
                                    <span>R$ <span style="text-decoration-line: line-through;font-size: 35px;">889</span> por</span>
                                </div>
                                <div>
                                    <b>R$</b>
                                    <b class="valor">689</b>
                                    <span>/mês</span>
                                </div>
                                <div>
                                    <!-- <span>Assessoria + apoio na</span>
                            <span>gestão financeira.</span> -->
                                </div>
                                <div>
                                    <!-- <button onclick="contratar(689, 'III')">CONTRATAR</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Abertura sem sair de Casa </p>
                        </div>

                        <div class="check_a">
                            <i>x</i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info">

                            <p> Certificado Digital Gratuito </p>
                        </div>

                        <div class="check_a">
                            <i>x</i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Contabilidade Completa </p>
                        </div>

                        <div class="check_a">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Processo de Abertura Grátis </p>
                        </div>

                        <div class="check_a">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Atendimento Presencial </p>
                        </div>

                        <div class="check_a">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Consultoria de Negócios </p>
                        </div>

                        <div class="check_a">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>


                    <!-- <div class="line_2">

                <div class="info">
                    <p> Chat e E-mail (das 9h às 18h) </p>
                </div>

                <div class="check_a">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="check_b">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="check_c">
                    <i class="fas fa-check-circle"></i>
                </div>

            </div>


            <div class="line_2">

                <div class="info">
                    <p> WhatsApp (das 9h às 22h) </p>
                </div>

                <div class="check_a">
                    <i>x</i>
                </div>

                <div class="check_b">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="check_c">
                    <i class="fas fa-check-circle"></i>
                </div>

            </div>


            <div class="line_2">

                <div class="info">
                    <p> Telefone (das 9h às 22h) </p>
                </div>

                <div class="check_a">
                    <i>x</i>
                </div>

                <div class="check_b">
                    <i>x</i>
                </div>

                <div class="check_c">
                    <i class="fas fa-check-circle"></i>
                </div>

            </div>


            <div class="line_2">

                <div class="info info_q">
                    <i style="display:none">?</i>
                    <p> Contato direto com Assessor de seu segmento empresarial </p>
                </div>

                <div class="check_a">
                    <i>x</i>
                </div>

                <div class="check_b">
                    <i>x</i>
                </div>

                <div class="check_c">
                    <i class="fas fa-check-circle"></i>
                </div>

            </div>


            <div class="line_2">

                <div class="info">
                    <p> Conta PJ gratuita </p>
                </div>

                <div class="check_a">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="check_b">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="check_c">
                    <i class="fas fa-check-circle"></i>
                </div>

            </div> -->


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Uso Ilimitado do Emissor de NF’s </p>
                        </div>

                        <div class="check_a">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_b">
                            <i class="fas fa-check-circle"></i>
                        </div>

                        <div class="check_c">
                            <i class="fas fa-check-circle"></i>
                        </div>

                    </div>




                    <!-- <div class="line_2">

                <div class="info info_q">
                    <i style="display:none">?</i>
                    <p> Emissão de Notas Fiscais pela equipe Contabilizei </p>
                </div>

                <div class="check_a">
                    <i>x</i>
                </div>

                <div class="check_b">
                    <i>x</i>
                </div>

                <div class="check_c">
                    <span>Até 35 NFs/mês</span>
                </div>

            </div> -->


                    <div class="line_2">

                        <div class="info">
                            <p> Pró-labore dos Sócios </p>
                        </div>

                        <div class="check_a">
                            <span>Até 2 Sócios Grátis</span>
                        </div>

                        <div class="check_b">
                            <span>Até 2 Sócios grátis</span>
                        </div>

                        <div class="check_c">
                            <span>Até 3 Sócios Grátis</span>
                        </div>

                    </div>

                    <div class="line_2">

                        <div class="info">
                            <p> Folha de Pagamento </p>
                        </div>

                        <div class="check_a">
                            <span>Cobrado à Parte</span>
                        </div>

                        <div class="check_b">
                            <span>Cobrado à parte</span>
                        </div>

                        <div class="check_c">
                            <span>Até 1 Funcionários Grátis</span>
                        </div>

                    </div>


                    <div class="line_2">

                        <div class="info info_q">
                            <i style="display:none">?</i>
                            <p> Faturamento Mensal </p>
                        </div>

                        <div class="check_a">
                            <span>Até R$ 25.000</span>
                        </div>

                        <div class="check_b">
                            <span>Até R$ 50.000</span>
                        </div>

                        <div class="check_c">
                            <span>Até R$ 200.000</span>
                        </div>

                    </div>




                </div>






            </div>
        </div>



        <style>
            #page_content {
                width: 100%;
                max-width: 1100px;
                margin: auto;
                color: #30455c !important;
                padding-top: 60px;
                padding-bottom: 60px;
            }

            h3 {
                font-size: 23px;
            }

            #abrir_empresa_form {
                display: none
            }

            .fields {
                display: flex;
                flex-direction: column;
            }

            .fields input {
                display: flex;
                flex-direction: column;
                width: 100%;
                margin: auto;
                height: 2em;
                border-radius: 7px;
                border: 1px solid #3337;
                margin-bottom: 20px;
                padding-left: 10px;
                font-size: 15px;
                outline: none;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            label {
                margin-bottom: 7px;
                margin-left: 4px
            }

            .fields select {
                height: calc(2em + 14px);
                border: 1px solid #3337;
                border-radius: 7px;
                background: #fff;
                font-size: 15px;
                margin-bottom: 20px;
                padding: 5px;
                padding-left: 10px;
                width: calc(100% + 10px);

            }

            #escolha_seu_plano {
                /* display: none; */
            }

            #abrir_empresa_form button {
                margin-left: auto;
                display: block;
                margin-right: -10px;
                font-size: 20px;
                padding: 20px 30px;
                border: 0;
                border-radius: 7px;
                color: #fff;
                background: orange;
                cursor: pointer;
                transition: .3s;
                margin-top: 7px
            }

            #abrir_empresa_form button:hover {
                filter: saturate(3)
            }
        </style>

        <style>
            #tabela_d {
                display: flex;
                flex-direction: column;
                width: 100% !important;
            }

            #tabela_d>div {
                display: flex;
                flex-direction: row;

            }

            .line_1 .info {
                padding: 0 30px !important;
                width: calc(25% - 30px) !important;

            }

            .line_1 .info * {
                font-size: 17px;
            }

            #tabela_d .info {
                width: 25%;
                background: #f9f9f9;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                padding: 0 0px;
                border: 1px solid #0001;
                border-radius: 5px 0 0 5px;
                border-right: 0;
                margin-top: 5px;


            }

            #tabela_d .plano_a {
                width: calc(25% - 30px);
                background: #f9f9f9;
                border-top: 1px solid #0001;
                border-bottom: 1px solid #0001;
                text-align: center;
                padding: 30px;
                margin-top: 5px;
                border-left: 1px solid #3331
            }

            #tabela_d .plano_a:last-child {
                border-right: 1px solid #0001;
                border-radius: 0 5px 5px 0;
            }

            #tabela_d .plano_a>div>div {
                margin-bottom: 10px
            }

            #tabela_d .plano_a button {
                border: 0;
                background: orange;
                color: #fff;
                padding: 15px 20px;
                border-radius: 3px;
                font-size: 17px;
                cursor: pointer;
                transition: .3s
            }

            #tabela_d .plano_a button:hover {
                filter: saturate(4)
            }

            .info i {
                background: #f5f5f5;
                padding: 3px 8px;
                border-radius: 555px;
                color: #0005;
                font-style: normal;
                margin-right: 7px;
                box-shadow: 0 0 1px
            }

            #tabela_d .info>div {
                margin: 30px;
                text-align: center;
                font-size: 14px;
            }

            .info_q {
                display: flex;
                align-items: baseline !important;


            }

            .line_1 {
                width: 100%
            }


            .line_2 {
                width: 100%
            }

            #tabela_d .check_a,
            #tabela_d .check_b,
            #tabela_d .check_c {
                border-bottom: 1px solid #0001;
                border-top: 1px solid #0001;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #f9f9f9;
                margin-top: 5px;
                border-left: 1px solid #3331;
                width: 25%;
            }

            #tabela_d .check_c {
                border-right: 1px solid #0001;
                border-radius: 0 5px 5px 0;
            }

            .check_a i,
            .check_b i,
            .check_c i {
                color: #c00;
                font-style: normal;
                font-size: 25px
            }

            .fas.fa-check-circle {
                color: #0c7
            }

            .line_2 .info {
                width: calc(25% - 60px) !important;
                padding: 0 30px !important;
                text-align: center;
            }

            #porque_escolher {
                margin: 50px 0
            }

            #porque_escolher {
                color: #30455c
            }

            #porque_escolher b {
                color: #30455c;
                font-size: 20px
            }

            .titulo h3 {
                color: #30455c;
            }

            .titulo p {
                color: #30455c
            }

            .fillReq {
                border-color: red !important;
                outline: 2px solid red !important;
            }

            input {
                color: #30455c;
            }
        </style>

        <style>
            /* Mobile */
            @media only screen and (max-width: 600px) {
                #abrir_empresa_form {
                    padding: 0 20px
                }

                #abrir_empresa_form input {
                    width: calc(100% - 22px)
                }

                #abrir_empresa_form select {
                    width: calc(100% - 5px)
                }

                #abrir_empresa_form button {
                    margin-right: 5px
                }


                #escolha_seu_plano {
                    padding: 0 20px
                }

                #escolha_seu_plano .line_2 {
                    display: none;
                }

                #escolha_seu_plano .line_1 {
                    flex-direction: column !important;
                }

                #escolha_seu_plano .info,
                #escolha_seu_plano .plano_a {
                    width: calc(100% - 60px) !important;
                    border-right: 1px solid #3331 !important;
                    border-radius: 5px !important;
                    margin-bottom: 15px
                }
            }

            /**/

            input {
                color: #30455c;
            }

            .valor {
                color: #1f6ff0
            }

            .plano_a h2 {
                font-size: 48px;
                margin-bottom: 15px;
            }

            #tabela_d .plano_a button {
                border: 0;
                background: orange;
                color: #fff;
                padding: 15px 20px;
                border-radius: 3px;
                font-size: 27px;
                cursor: pointer;
                transition: .3s;
            }
        </style>


        <style>
            .toggle_head {
                padding-bottom: 15px;
                background: rgb(249, 249, 249);
                box-shadow: 0px 0px 15px -5px;
                border-radius: 5px;
                padding: 25px;
                z-index: 99;
                position: relative;
                margin-bottom: 1px;
                cursor: pointer;
                transition: .3s;
            }

            .toggle_content {
                background: rgb(249, 249, 249);
                box-shadow: 0px 0px 50px -18px;
                border-radius: 5px;
                padding: 25px;
            }

            .toggle_head p {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .toggle_head i {
                font-size: 23px;
                transition: .3s;
            }

            .toggle_head i.activ {
                rotate: -90deg
            }

            .toggle_head:hover {
                opacity: .75
            }

            .toggle_head {
                z-index: 1 !important;
            }

            #hd_nv_a>nav>ul {
                position: relative;
                z-index: 999999
            }
        </style>


        <script>
            function avancar_a() {

                var preenchido = 1
                for (i = 0; i < $(".req").length; i++) {
                    if ($(".req")[i].value == "") {
                        preenchido = 0
                        //$(".req")[i].addClass("fillReq")
                        document.querySelectorAll(".req")[i].classList.add("fillReq")
                        document.querySelectorAll(".req")[i].scrollIntoView()
                    } else {
                        if (document.querySelectorAll(".req")[i].classList.contains("fillReq")) {
                            document.querySelectorAll(".req")[i].classList.remove("fillReq")
                        }
                    }
                }

                if (preenchido == 0) {

                }

                if (preenchido == 1) {
                    $("#abrir_empresa_form").hide()
                    $("#escolha_seu_plano").show()
                    document.querySelector("#tab__").scrollIntoView()
                }


            }

            $("post")
        </script>


        <?php

        $fone_whats = str_replace(array(' ', '-', '"', '(', ')', ' ', '>'), ' ', $whatsapp);
        $fone_whats = str_replace(' ', '', $fone_whats);

        ?>


        <script>
            var el
            var val
            var plano = "x"
            var valor = 35

            function contratar(valor, plano) {
                el = event.srcElement


                var fone_contador = "<?php echo $fone_whats; ?>"
                var nome = $("#nome").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var email = $("#email").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var celular = $("#celular").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var atividade = $("#atividade").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var cep = $("#cep").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var rua = $("#rua").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var numero = $("#numero").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var complemento = $("#complemento").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var bairro = $("#bairro").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var cidade = $("#cidade").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")
                var estado = $("#estado").val().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replaceAll(" ", "%20")


                var link = "https://wa.me/55" + fone_contador + "?text=*Abertura%20de%20Empresa%20Gr%C3%A1tis*%0A%0ANome%3A%20" + nome + "%0AE-mail%3A%20" + email + "%0ACelular%3A%20" + celular + "%0A%0AAtividade%3A%20" + atividade + "%0ACep%3A%20" + cep + "%0ARua%3A%20" + rua + "%0AN%C3%BAmero%3A%20" + numero + "%0AComplemento%3A%20" + complemento + "%0ABairro%3A%20" + bairro + "%0ACidade%3A%20" + cidade + "%0AEstado%3A%20" + estado + "%0A%0APlano%3A%20" + plano + "%0AValor%3A%20R$%20" + valor + ",00"


                if ($("#alink")[0] != undefined) {
                    $("#alink")[0].remove()
                }
                document.querySelector("body").insertAdjacentHTML("beforeend", `
  	<a href="` + link + `" target="_blank" id="alink" style="display:none"></a>
  `)

                document.querySelector("#alink").click()

            }
        </script>

        <script>
            //Mascara Celular
            var handlePhone = (event) => {
                let input = event.target
                input.value = phoneMask(input.value)

                if (document.querySelector("#celular").value.length < 14) {
                    document.querySelector("#celular").style.outline = "1px solid red"
                } else {
                    document.querySelector("#celular").style.outline = "none"
                }

            }

            var phoneMask = (value) => {
                if (!value) return ""
                value = value.replace(/\D/g, '')
                value = value.replace(/(\d{2})(\d)/, "($1) $2")
                value = value.replace(/(\d)(\d{4})$/, "$1-$2")
                return value
            }
        </script>

        <script>
            function handleMail() {

                if (document.querySelector("#email").value.split(" ").length < 2) {

                    if (document.querySelector("#email").value.split("").indexOf("@") != -1) {
                        //@ not error
                        if (document.querySelector("#email").value.split("@")[1].split("").indexOf(".") != -1) {
                            //. not error
                            if (document.querySelector("#email").value.split("@")[1].split(".")[1].length > 0) {
                                //.com not error
                                document.querySelector("#email").style.outline = "none"
                            } else {
                                document.querySelector("#email").style.outline = "1px solid red"
                            }
                        } else {
                            document.querySelector("#email").style.outline = "1px solid red"

                        }
                    } else {
                        document.querySelector("#email").style.outline = "1px solid red"
                    }
                } else {
                    document.querySelector("#email").style.outline = "1px solid red"
                }

            }
        </script>

        <script>
            function handleNome() {

                if (document.querySelector("#nome").value.split(" ").length > 1) {
                    if (document.querySelector("#nome").value.split(" ")[1].length > 0) {
                        document.querySelector("#nome").style.outline = "none"
                    } else {
                        document.querySelector("#nome").style.outline = "1px solid red"
                    }
                } else {
                    document.querySelector("#nome").style.outline = "1px solid red"
                }

            }
        </script>

        <script>
            function fillAll() {
                getViacep()
                $("#nome").val("Lázaro de Oliveira")
                $("#email").val("patroas@agenciaempregadadomestica.com.br")
                $("#celular").val("(41) 98478-3923")
                $("#atividade").val("BAR")
                $("#cep").val("80330200")
                $("#rua").val("Rua Vieira Fazenda")
                $("#numero").val("1442")
                $("#complemento").val("Casa")
                $("#bairro").val("Portão")
                $("#cidade").val("Curitiba")
                $("#estado").val("PR")
            }


            document.addEventListener("keydown", function(event) {
                if (event.shiftKey && event.code === "Space") {
                    fillAll()
                }
            })
        </script>


        <script>
            $(".toggle_head").off("click")
            $(".toggle_head").on("click", function() {
                $(".toggle_content").slideToggle("slow")
                $(".toggle_head i").toggleClass("activ")
            })
            $(".toggle_content").slideToggle("slow")
        </script>

        <script type="text/javascript">
            $(".cep").focusout(function() {
                getViacep()
            });

            function getViacep() {

                if ($(".cep").val().length == 8) {

                    //Início do Comando AJA X
                    $.ajax({

                        //O campo URL diz o caminho de onde virá os dados
                        //É importante concatenar o valor digitado no CEP
                        url: 'https://viacep.com.br/ws/' + $('.cep').val() + '/json/',
                        //Aqui você deve preencher o tipo de dados que será lido,
                        //no caso, estamos lendo JSON.
                        dataType: 'json',
                        //SUCESS é referente a função que será executada caso
                        //ele consiga ler a fonte de dados com sucesso.
                        //O parâmetro dentro da função se refere ao nome da variável
                        //que você vai dar para ler esse objeto.
                        success: function(resposta) {
                            //Agora basta definir os valores que você deseja preencher
                            //automaticamente nos campos acima.

                            $(".uf").val(resposta.uf);
                            setcidad();
                            $(".rua").val(resposta.logradouro);
                            //$(".complemento").val(resposta.complemento);
                            $(".bairro").val(resposta.bairro);
                            $(".cidade").val(resposta.localidade);
                            //Vamos incluir para que o Número seja focado automaticamente
                            //melhorando a experiência do usuário
                            $("#numero").focus();
                        }
                    });
                }
            }
        </script>


    </div>










</div>

<?php // }else{header("location:https://senae.com.br");} 
?>

<script>var page_title = "Serviços e Planos";</script>