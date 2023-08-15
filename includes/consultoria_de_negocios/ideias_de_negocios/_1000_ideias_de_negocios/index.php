<?php



$current_url = $_SERVER['REQUEST_URI'];
$question_mark_pos = strpos($current_url, '?');
if ($question_mark_pos !== false) {
    $query_string = substr($current_url, $question_mark_pos + 1);
    if (!empty($query_string)) {
        //"A URL atual contém uma query string";


        $query_string = rtrim($_SERVER['QUERY_STRING'], '/');

        global $conn;

        $sql = "SELECT post_title, post_content FROM wp_posts WHERE post_name = ? AND post_status = 'publish'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $query_string);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
?>
                <div id="mil_ideias">
                    <?= $row["post_content"] ?>
                </div>
                <style>
                    #mil_ideias {
                        margin: auto;
                        width: 100%;
                        max-width: 1100px;
                        padding-top: 40px
                    }

                    #mil_ideias figure {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    #mil_ideias img {
                        border-radius: 10px
                    }

                    #mil_ideias h1,
                    #mil_ideias h2,
                    #mil_ideias h3 {
                        text-align: center
                    }

                    #mil_ideias h1 {
                        font-size: 30px !important;
                    }

                    #mil_ideias h2 {
                        font-size: 27px !important;
                    }

                    #mil_ideias h3 {
                        font-size: 25px !important;
                    }

                    #mil_ideias p {
                        color: #30455cdd !important
                    }

                    .saiba_mais_mil_ideias a {
                        width: 100%;
                        display: flex;
                        background: #0000 !important;
                    }

                    #mil_ideias a strong {
                        border-radius: 9px;
                        background: linear-gradient(135deg, rgb(0, 162, 255) 0%, rgb(29, 53, 205) 100%);
                        border-width: 0;
                        color: #fff;
                        font-family: inherit;
                        font-size: inherit;
                        line-height: inherit;
                        padding: calc(0.667em + 2px) calc(1.333em + 2px);
                        text-decoration: none;
                        margin-left: auto !important;
                        margin-right: 0 !important;
                        height: 32px;
                        display: flex;
                        align-items: center;
                        justify-content: center
                    }

                    #mil_ideias img {
                        width: 999px
                    }

                    footer {
                        margin-top: 50px !important
                    }

                    @media only screen and (max-width: 600px) {

                        form,
                        #mil_ideias {
                            width: calc(100% - 40px) !important;
                        }

                        form input,
                        form textarea {
                            width: calc(100% - 40px) !important;
                            padding: 10px 20px !important;
                        }

                        #mil_ideias figure {
                            margin: 0
                        }

                        #mil_ideias img {
                            width: 100% !important;
                        }
                    }
                </style>

                <script>
                    document.querySelector("title").textContent = "<?= $row["post_title"] ?>";
                </script>
    <?php
            }
        } else {
            // "Nenhum resultado encontrado.";
        }

        require('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/kit_ideias_negocios_contador.php');
    } else {
        //"A URL atual não contém uma query string";
    }
} else {

    ?>







    <?php //require('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/kit_ideias_negocios_contador.php'); ?>

    <div id="content_a">

        <h1>
            1.000 Idéias de Negócios
        </h1>

        <div id="negocios_exemplo">

            <div>
                <h3>Pizzaria</h3>
                <img src="https://senae.org/imgs/pizzaria-dest.jpg" alt="Pizzaria">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-uma-pizzaria/"></a>
            </div>
            <div>
                <h3>Academia</h3>
                <img src="https://senae.org/imgs/academia-dest.jpg" alt="Academia">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-uma-academia"></a>
            </div>
            <div>
                <h3>Padaria</h3>
                <img src="https://senae.org/imgs/panificadora-dest.jpg" alt="Padaria">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-uma-padaria"></a>
            </div>
            <div>
                <h3>Bar</h3>
                <img src="https://senae.org/imgs/bar-dest.jpg" alt="Bar">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-um-bar"></a>
            </div>
            <div>
                <h3>Lanchonete</h3>
                <img src="https://senae.org/imgs/lanchonete-dest.jpg" alt="Lanchonete">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-uma-lanchonete"></a>
            </div>
            <div>
                <h3>Salão de Beleza</h3>
                <img src="https://senae.org/imgs/salao-de-beleza-dest.jpg" alt="Salão de Beleza">
                <a target="_blank" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios?como-abrir-um-salao-de-beleza"></a>
            </div>

        </div>



        <style>
            * {
                transition: .3s
            }

            #negocios_exemplo {
                display: grid;
                grid-template-columns: auto auto auto;

            }

            #negocios_exemplo>div {
                padding: 10px;
                position: relative;
                cursor: pointer
            }

            #negocios_exemplo>div img {
                max-width: 100%;
                max-height: 225px;
                border-radius: 20px;
                object-fit: cover;
                object-position: center;

            }

            #negocios_exemplo h3 {
                position: absolute;
                bottom: 0;
                left: 10px;
                background: red;
                width: calc(100% - 25px);
                text-align: center;
                padding: 5px 0;
                color: #333;
                background: #fff5;
                color: #fff;
                text-shadow: 0 0 5px #000;
                pointer-events: none;
                font-size: 25px;
                z-index: 9999
            }

            #negocios_exemplo div:hover img {
                filter: saturate(1.4)
            }

            #negocios_exemplo a {
                width: calc(100% - 25px);
                height: calc(100% - 25px);
                position: absolute;
                z-index: 99;
                left: 10px;
                border-radius: 20px
            }
        </style>



        <h2 style="text-align:center">1.000 IDÉIAS DE NEGÓCIOS PARA VOCÊ SE INSPIRAR E VIR NOS PROCURAR PARA ORIENTAÇÕES</h2>




        <style>
            #segmento .itens {
                display: grid;
                grid-template: auto / auto auto auto;
                margin-bottom: 15px
            }

            #segmento .item {
                display: flex;
                flex-direction: row;
                width: 100%;
                margin-bottom: 45px;
            }

            #segmento .item div {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                width: 100%;
                padding: 0 15px;
                padding-right: 55px
            }

            #segmento .item img {
                width: 90px;
            }

            #segmento .item h4 {
                margin-bottom: 5px;
                text-align: center;
                font-size: 18px;
                font-weight: 155 !important;
            }

            #segmento .item select {
                border-radius: 5px;
                font-size: 13px;
            }

            @media only screen and (max-width: 600px) {
                #segmento .itens {
                    display: grid;
                    grid-template: auto / auto;
                    margin-bottom: 15px
                }
            }
        </style>



        <!-- <h3>Encontre por Segmento</h3> -->

        <div id="mil-ideias">
            <h3>A</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-abajures/">Abajures</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-abatedouro-de-frango/">Abatedouro de frango</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-abatedouro-de-suinos/">Abatedouro de suínos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-academia/">Academia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-academia-de-artes-marciais/">Academia de artes marciais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-academia-de-lutas/">Academia de lutas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-acaraje/">Acarajé</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-acougue/">Açougue</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-adega-de-bebidas/">Adega de bebidas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-adestramento-de-caes/">Adestramento de cães</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-adestramento-de-caes/">Adestramento de cães</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-administradora-de-condominios/">Administradora de condomínios</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-agroturismo/">Agencia de agro turismo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-casamento/">Agencia de casamento</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-conteudo/">Agencia de conteúdo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-cuidadores-de-idosos/">Agencia de cuidadores de idosos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-ecoturismo/">Agencia de ecoturismo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-empregos/">Agencia de empregos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-intercambio-cultural/">Agencia de intercambio cultural</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-marketing-e-propaganda/">Agencia de marketing e propaganda</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-modelo/">Agencia de modelo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-publicidade-e-propaganda/">Agencia de publicidade e propaganda</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-recepcionistas-de-eventos/">Agencia de recepcionistas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-servicos-de-diaristas/">Agencia de serviços de diaristas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-turismo/">Agencia de turismo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-virtual-de-emprego/">Agencia virtual de emprego</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-virtual-de-empregos/">Agencia virtual de empregos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-agencia-de-babas/">Agencias de babas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-agricultura-organica/">Agricultura orgânica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-albergue/">Albergue</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-alfaiataria/">Alfaiataria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-andaimes/">Aluguel de andaimes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-aluguel-de-maquinas-para-obras/">Aluguel de maquinas para obras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-aluguel-de-roupas-de-festa/">Aluguel de roupas de festa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-aluguel-de-trajes-para-casamento/">Aluguel de trajes para casamento</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-automacao-comercial/">Automação comercial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-aluguel-de-utensilios-para-festas-e-eventos/">Aluguel de utensílios para festas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-animacao-de-eventos-infantis/">Animação de eventos infantis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-antiquario-passo-a-passo-e-dicas-praticas/">Antiquário</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-instalacao-de-ar-condicionado-em-veiculos/">Ar condicionado de veículos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-artefatos-de-acrilico/">Artefatos de acrílico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-artesanato/">Artesanato</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-artesanato-na-internet/">Artesanato </a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-artigos-de-aventura/">Artigos de aventura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-artigos-de-ceramica/">Artigos de cerâmica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-artigos-para-churrasco/">Artigos para churrasco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-assessoria-de-imprensa/">Assessoria de imprensa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-assessoria-de-imprensa/">Assessoria de imprensa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-assistencia-de-eletroeletronicos/">Assistência de eletroeletrônicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-assistencia-tecnica-de-computadores/">Assistência técnica de computadores</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-assistencia-tecnica-em-eletroeletronicos/">Assistência técnica em eletroeletrônicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-assistencia-tecnica-para-celulares">Assistência técnica para celulares</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-atacadista-de-produtos-para-papelaria/">Atacadista para papelaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-atacado-de-brinquedos/">Atacado de brinquedos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-atelie-de-costura/">Ateliê de costura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-empresa-de-aulas-de-equitacao/">Aulas de equitação</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-aulas-de-ingles-via-skype/">Aulas de inglês via skype</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-aulas-particulares/">Aulas particulares</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-auto-eletrica/">Auto elétrica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-autopecas/">Auto peça</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-autoescola/">Auto-escola</a><br>
            </div>
            <h3>B</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-banca-de-revistas/">Banca de revistas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-bar/">Bar</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-barbearia/">Barbearia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-bazar-de-roupas-usadas/">Bazar de roupas usadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-beneficiamento-de-graos/">Beneficiamento de grãos e cereais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-beneficiamento-de-legumes/">Beneficiamento de legumes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-bercario-ou-creche/">Berçário ou creche</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-bicicletaria/">Bicicletaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-blindagem-de-veiculos/">Blindagem de veículos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-blocos-de-concreto/">Blocos de concreto</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-boate/">Boate</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-boliche/">Boliche</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-bolsas-artesanais/">Bolsas artesanais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-bombas-hidraulicas/">Bombas hidráulicas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-bomboniere/">Bomboniere</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-bordados-computadorizados/">Bordados computadorizados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-borracharia/">Borracharia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-borracharia/">Borracharia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-boutique-de-bolsas-femininas/">Boutique de bolsas femininas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-brecho/">Brechó</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-brecho-infantil/">Brechó infantil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-brinquedos-pedagogicos/">Brinquedos pedagógicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-brinquedoteca/">Brinquedoteca</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-buffet/">Buffet</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-buffet-de-churrasco/">Buffet de churrasco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-buffet-de-festas/">Buffet de festas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-butique-de-carne-branca/">Butique de carne branca</a><br>
            </div>
            <h3>C</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-cachacaria/">Cachaçaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-cafeteria/">Cafeteria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-call-center/">Call center</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-camping/">Camping</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-campo-de-paintball/">Campo de paintball</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-canetas-odontologicas/">Canetas odontológicas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-canil/">Canil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-cardapio-para-pizzaria/">Cardápio para pizzaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-acai/">Carrinho de açaí</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-batata-frita/">Carrinho de batata frita</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-cachorro-quente/">Carrinho de cachorro quente</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-chopp/">Carrinho de chopp</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-churrasco/">Carrinho de churrasco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-coco/">Carrinho de coco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-espetinho/">Carrinho de espetinhos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-lanches/">Carrinho de lanches</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-pastel/">Carrinho de pastel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-picole/">Carrinho de picolé</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-pipoca/">Carrinho de pipoca</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-pizza/">Carrinho de pizza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-sorvete/">Carrinho de sorvete</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-carrinho-de-tapioca/">Carrinho de tapioca</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-carro-de-som-para-publicidade/">Carro de som para publicidade</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-artigos-de-pesca/">Casa de artigos de pesca</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-carnes/">Casa de carnes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-eventos-e-espetaculos/">Casa de eventos e espetáculos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-festas/">Casa de festas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-materiais-eletricos/">Casa de materiais elétricos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-produtos-agropecuarios/">Casa de produtos agropecuários</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-repouso/">Casa de repouso</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-especializada-em-salgados/">Casa de salgados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-sanduiches/">Casa de sanduíches</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-tintas/">Casa de tintas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-de-video-games/">Casa de vídeo games</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-casa-loterica/">Casa lotérica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-cemiterio-de-animais/">Cemitério de animais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-cemiterios-e-crematorios-de-animais/">Cemitérios e crematórios de animais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-centro-automotivo/">Centro automotivo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-centro-de-atividades-para-terceira-idade">Centro de atividades para idosos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-centro-de-ioga/">Centro de ioga</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-cestas-comemorativas/">Cestas comemorativas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-cestas-de-cafe-da-manha/">Cestas de café da manha</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-chocolateria/">Chocolateria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-choperia/">Choperia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-churrascaria/">Churrascaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-cinema/">Cinema</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-audiometria/">Clinica de audiometria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-estetica/">Clinica de estética</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-estetica-para-animais/">Clinica de estética para animais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-fisioterapia/">Clinica de fisioterapia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-massagem/">Clinica de massagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-de-terapia-oriental/">Clinica de terapia oriental</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-medica/">Clinica medica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-clinica-veterinaria/">Clinica veterinária</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-cobranca/">Cobrança</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-coletores-de-energia-solar/">Coletores de energia solar</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-colonia-de-ferias/">Colônia de ferias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-colonia-de-ferias/">Colônia de ferias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-ambulante/">Comercio ambulante</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-couro/">Comercio de couro</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-frango-assado/">Comercio de frango assado</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-grama/">Comercio de grama</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-joias/">Comercio de jóias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-mel">Comercio de mel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-comercio-de-queijos-e-vinhos/">Comercio de queijos e vinhos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-franquias-de-cafeterias/">Como abrir franquias de cafeterias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-patos/">Como criar patos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-e-ser-freelancer/">Como ser freelancer</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-comunicacao-visual/">Comunicação visual</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-confeccao/">Confecção</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-confeccao-de-artigos-de-cama-mesa-e-banho/">Confecção de artigos de cama mesa e banho</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-confeccao-de-camisetas/">Confecção de camisetas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-confeccao-de-enxovais-personalizados/">Confecção de enxovais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-confeccao-de-jeans/">Confecção de jeans</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-confeccao-de-vestidos-de-noivas/">Confecção de vestidos de noivas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-confeitaria/">Confeitaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-construtora/">Construtora</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-consultoria-de-moda/">Consultoria de moda</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-consultoria-rural/">Consultoria rural</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-consultorio-de-acupuntura/">Consultório de acupuntura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-consultorio-odontologico/">Consultório odontológico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-correspondencia-bancaria/">Correspondente bancário</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-correspondente-bancario/">Correspondente bancário</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-corretora-de-seguros/">Corretora de seguros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-cozinha-industrial/">Cozinha industrial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-cozinha-industrial/">Cozinha industrial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-creche/">Creche</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-creperia/">Creperia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-abelhas/">Criação de abelhas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-animais-silvestres-em-cativeiro/">Criação de animais silvestres</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-aves-ornamentais/">Criação de aves ornamentais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-avestruz/">Criação de avestruz</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-cabras/">Criação de cabras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-camarao/">Criação de camarão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-carneiros/">Criação de carneiros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-cavalos/">Criação de cavalos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-chinchila/">Criação de chinchila</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-cobras/">Criação de cobras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-coelhos/">Criação de coelhos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-codornas/">Criação de cordornas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-curio/">Criação de curió</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-frangos-de-granja/">Criação de frangos de granja</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-galinhas-caipiras/">Criação de galinhas caipiras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-galinhas-poedeiras/">Criação de galinhas poedeiras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-gansos/">Criação de gansos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-jacares/">Criação de jacarés 2</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-marrecos/">Criação de marrecos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-minhocas/">Criação de minhocas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-peixes/">Criação de peixes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-porcos-ou-suinocultura/">Criação de porcos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-ras/">Criação de rãs</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-criacao-de-sites/">Criação de sites</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-suinos/">Criação de suínos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-criacao-de-tilapias-e-trutas/">Criação de tilápias e trutas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-cromagem/">Cromagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-curso-de-artesanato/">Curso de artesanato</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-curso-de-culinaria/">Curso de culinária</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-curso-de-informatica-para-a-terceira-idade">Curso de informática para idosos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-curso-de-pintura/">Curso de pintura de imóveis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-curso-para-concursos/">Curso para concursos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-curso-para-eletricistas/">Curso para eletricistas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-curso-pre-vestibular/">Curso pré vestibular</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-cursos-tecnicos/">Cursos técnicos</a><br>
            </div>
            <h3>D</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-decoracao-de-festa-infantil/">Decoração de festa infantil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-decoracao-em-gesso/">Decoração em gesso</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-dedetizacao/">Dedetização</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-delicatessen/">Delicatessen</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-delivery-de-lingerie/">Delivery de lingerie</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-descupinizacao/">Descupinizacão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-detetive-particular/">Detetive particular</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-digitalizacao-de-documentos/">Digitalização de documentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-disk-cacamba/">Disk caçamba</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-disk-cerveja-ou-disk-bebidas/">Disk cerveja</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-disk-gas/">Disk gás</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-disk-limpa-fossa/">Disk limpa fossa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-entrega-de-refeicoes/">Disk refeições</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-distribuicao-de-panfletos/">Distribuição de panfletos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-agua-mineral/">Distribuidora de água mineral</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-balas-e-doces/">Distribuidora de balas e doces</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-bebidas">Distribuidora de bebidas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-bebidas/">Distribuidora de bebidas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-bijuterias/">Distribuidora de bijuterias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-medicamentos/">Distribuidora de medicamentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-distribuidora-de-sucos/">Distribuidora de sucos</a><br>
            </div>
            <h3>E</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-editora/">Editora</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-editoracao-eletronica/">Editoração eletrônica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-embalagens-delivery/">Embalagens delivery</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-emprestimo/">Empréstimo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-servico-de-encanador/">Encanador</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-equipamentos-para-shows/">Equipamentos para shows</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-artes/">Escola de artes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-danca-de-salao/">Escola de dança de salão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-educacao-infantil-2/">Escola de educação infantil 2</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-idiomas/">Escola de idiomas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-informatica/">Escola de informática</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-manequim-e-modelo-fotografico/">Escola de manequim e modelo fotográfico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-musica/">Escola de musica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escolinha-de-natacao/">Escola de natação</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-teatro/">Escola de teatro</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-infantil/">Escola infantil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola/">Escola particular</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escolinha-de-futebol-infantil/">Escolinha de futebol infantil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escolta-de-cargas/">Escolta de cargas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-advocacia/">Escritório de advocacia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-arquitetura/">Escritório de arquitetura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-cobranca/">Escritório de cobrança</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-consultoria/">Escritório de consultoria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-contabilidade/">Escritório de contabilidade</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-escritorio-de-decoracao/">Escritório de decoração</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-escritorio-virtual/">Escritório virtual</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estacionamento/">Estacionamento</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-estampagem-em-placas-de-automovel/">Estampagem em placas de automóvel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-estamparia/">Estamparia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-de-danca/">Estúdio de dança</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-de-gravacao/">Estúdio de gravação</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-de-pilates/">Estúdio de pilates</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-de-tatuagem/">Estúdio de tatuagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-de-yoga/">Estúdio de yoga</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-fotografico/">Estúdio fotográfico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-estudio-musical/">Estúdio musical</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-exportacao-comercial/">Exportação comercial</a><br>
            </div>
            <h3>F</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-adesivos-plasticos/">Fabrica de adesivos plásticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-alimentos-chips/">Fabrica de alimentos chips</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-industria-de-artefatos-de-aluminio/">Fábrica de artefatos de alumínio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-bananas-passas/">Fabrica de bananas passas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-bijuterias/">Fabrica de bijuterias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-biscoitos/">Fabrica de biscoitos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-bolsas-de-couro/">Fabrica de bolsas de couro</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-bones/">Fabrica de bonés</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-brindes/">Fabrica de brindes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-brinquedos/">Fabrica de brinquedos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-brinquedos-de-madeira/">Fabrica de brinquedos de madeira</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-caiaques/">Fabrica de caiaques</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-caixas-de-papelao/">Fabrica de caixas de papelão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-caixas-de-papelao/">Fabrica de caixas de papelão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-calcados/">Fabrica de calcados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-caldo-de-cana/">Fabrica de caldo de cana</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-canudinhos-de-plastico/">Fabrica de canudos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-carimbos/">Fabrica de carimbos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-chinelos/">Fabrica de chinelos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-chocolates/">Fabrica de chocolates</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-colchoes-de-espuma/">Fabrica de colchões de espuma</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-copos-descartaveis/">Fabrica de copos descartáveis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-descartaveis-de-aluminio/">Fabrica de descartáveis de alumínio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-doces/">Fabrica de doces</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-doces-caseiros/">Fabrica de doces caseiros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-embalagens-para-presente/">Fabrica de embalagens para presente</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-esquadrias-de-madeira/">Fabrica de esquadrias de madeira</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-fertilizantes-agricolas/">Fabrica de fertilizantes agrícolas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-fogos-de-artificio/">Fabrica de fogos de artifício</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-frutas-desidratadas/">Fabrica de frutas desidratadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-gelo/">Fabrica de gelo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-iogurte/">Fabrica de iogurte</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-isopor/">Fabrica de isopor</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-isopor-2/">Fabrica de isopor 2</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-licores/">Fabrica de licores</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-mesas-de-bilhar/">Fabrica de mesas de bilhar</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-oleo-de-coco/">Fabrica de óleo de coco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-ovos-de-pascoa/">Fabrica de ovos de páscoa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-panelas/">Fabrica de panelas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-pao-de-queijo/">Fabrica de pão de queijo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-pecas-de-porcelana/">Fábrica de peças de porcelana</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-perfumes/">Fabrica de perfumes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-pipoca-de-micro-ondas/">Fabrica de pipoca de microondas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-pisos-ceramicos/">Fabrica de pisos cerâmicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-polpa-de-frutas-congeladas/">Fabrica de polpa de frutas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-prancha-de-surf/">Fabrica de prancha de surf</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-prendedores-de-roupa/">Fabrica de prendedores de roupa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-queijos/">Fabrica de queijos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-redes-esportivas/">Fabrica de redes esportivas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-refrigerantes/">Fábrica de refrigerantes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-rejuntes-e-revestimentos-ceramicos/">Fabrica de rejuntes e revestimentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-roupas-para-caes/">Fabrica de roupas para cães</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sabao-em-po/">Fabrica de sabão em pó</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sacolas-de-papel/">Fabrica de sacolas de papel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sacolas-plasticas/">Fabrica de sacolas plásticas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sacolas-recicladas/">Fabrica de sacolas recicladas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sacos-de-lixo/">Fabrica de sacos de lixo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sacos-de-papel/">Fabrica de sacos de papel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-sais-de-banho/">Fabrica de sais de banho</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-temperos/">Fabrica de temperos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-uniformes/">Fábrica de uniformes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-vassouras/">Fabrica de vassouras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-velas/">Fabrica de velas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabricacao-de-bombons-recheados/">Fabricação de bombons</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-empresa-de-fabricacao-e-venda-de-piscinas/">Fabricação de piscinas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-fabricas-de-botinas/">Fabricas de botinas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-tijolo-ecologico/">Fabricas de tijolos ecológicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-fabrica-de-adesivos/">Fábrica de adesivos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-farmacia/">Farmácia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-financeira/">Financeira</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-floricultura/">Floricultura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-fornecimento-de-merenda-escolar/">Fornecimento de merenda escolar</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-fotografo-empresarial/">Fotografo empresarial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-fotografo-freelancer/">Fotografo freelancer</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-frango-caipira/">Frango caipira</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-cinema/">Franquia de cinema</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-lava-jato-moderno/">Franquia de lava jato moderno</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-loja-virtual/">Franquia de loja virtual</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-perfumes/">Franquia de perfumes no brasil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-pizzas-pre-assadas/">Franquia de pizzas pré assadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-franquia-de-restaurante/">Franquia de restaurante</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-franquias-de-pasteis-prontos/">Franquias de pasteis prontos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-funeraria/">Funerária</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-funilaria-e-pintura/">Funilaria e pintura</a><br>
            </div>
            <h3>G</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-galeria-de-arte/">Galeria de arte</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-galeria-de-arte/">Galeria de arte</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-galinhas-poedeiras/">Galinhas poedeiras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-grafica/">Gráfica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-grafica-rapida/">Gráfica rápida</a><br>
            </div>
            <h3>H</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-escola-de-natacao-e-hidroginastica/">Hidroginástica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-horticultura/">Horticultura</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-hotel/">Hostel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-hotel-fazenda/">Hotel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-hotel-fazenda/">Hotel fazenda</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-hotel-para-caes/">Hotel para cães</a><br>
            </div>
            <h3>I</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-iluminacao-de-festas/">Iluminação de festas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-imas-promocionais/">Imas promocionais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-imobiliaria/">Imobiliária</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-industria-de-ceramica/">Indústria de cerâmica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-instalacao-de-redes-de-protecao/">Instalação de redes de proteção</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-instituto-de-beleza/">Instituto de beleza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-insulfilm/">Insulfilm</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-interprete-freelancer/">Interprete</a><br>
            </div>
            <h3>J</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-jardinagem/">Jardinagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-joalheria/">Joalheria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-jornalista-freelancer/">jornalista freelancer</a><br>
            </div>
            <h3>K</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-kit-festa/">Kit festa</a><br>
            </div>
            <h3>L</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-laboratorio-de-analises-clinicas/">Laboratório de análises clínicas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-laboratorio-de-protese-dentaria/">Laboratório de prótese dentaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-lan-house/">Lan house</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-lanchonete/">Lanchonete</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-lava-jato/">Lava jato</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-lava-jato-para-caminhoes/">Lava jato para caminhões</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-lava-rapido-a-seco/">Lava rápido a seco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-lavagem-de-tapetes-e-estofados-a-seco/">Lavagem de tapetes e estofados a seco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-lavanderia/">Lavanderia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-servico-de-limpeza-de-janelas/">Limpeza de janelas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-limpeza-de-piscinas/">Limpeza de piscinas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-limpeza-e-conservacao/">Limpeza e conservação</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-livraria/">Livraria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-equipamentos-para-construcao-civil/">Locação de equipamentos para construção civil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-locacao-de-games/">Locação de games</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-locacao-de-vans/">Locação de vans</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-brinquedos/">Locadora de brinquedos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-filmes/">Locadora de filmes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-locadora-de-veiculos/">Locadora de veículos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-10-reais/">Loja de 10 reais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-alimentos-congelados/">Loja de alimentos congelados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-aluguel-de-fantasias/">Loja de aluguel de fantasias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-aluguel-de-roupas-de-epoca/">Loja de aluguel de roupas de época</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-loja-de-aluguel-de-vestido-de-noiva/">Loja de aluguel de vestido de noiva</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-aluguel-para-festas/">Loja de aluguel para festas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-animais/">Loja de animais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-antenas-parabolicas/">Loja de antenas parabólicas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-armarinhos-e-aviamentos/">Loja de armarinhos e aviamentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artesanato/">Loja de artesanato</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-de-camping/">Loja de artigos de camping</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-esportivos/">Loja de artigos esportivos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-bebes/">Loja de artigos para bebes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-bebes/">Loja de artigos para bebes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-casa/">Loja de artigos para casa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-confeitaria/">Loja de artigos para confeitaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-cozinha/">Loja de artigos para cozinha</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-decoracao/">Loja de artigos para decoração</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-noivas/">Loja de artigos para noivas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-piscinas/">Loja de artigos para piscinas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-recem-nascidos/">Loja de artigos para recém nascidos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-artigos-para-turistas/">Loja de artigos para turistas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-bateria/">Loja de bateria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-bicicletas/">Loja de bicicleta</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-bijuterias/">Loja de bijuterias</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-bolsas-e-calcados-femininos/">Loja de bolsas e calcados femininos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-suprimentos-para-bordados/">Loja de bordados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-brindes-ecologicos/">Loja de brindes ecológicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-brinquedos/">Loja de brinquedos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-calcados/">Loja de calcados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-cama-mesa-e-banho/">Loja de cama mesa e banho</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-camping/">Loja de camping</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-carimbos/">Loja de carimbos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-conveniencia/">Loja de conveniência </a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-cosmeticos/">Loja de cosméticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-cozinhas-planejadas/">Loja de cozinhas planejadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-doces/">Loja de doces</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-eletrodomesticos/">Loja de eletrodomésticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-eletroeletronicos/">Loja de eletroeletrônicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-embalagens/">Loja de embalagens</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-empadas/">Loja de empadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-enxovais-para-bebe/">Loja de enxovais para bebe</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-equipamentos-para-seguranca-no-trabalho/">Loja de equipamentos de segurança</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-equipamentos-de-seguranca/">Loja de equipamentos de segurança</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-ferragens/">Loja de ferragens</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-frios/">Loja de frios</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-hidraulica/">Loja de hidráulica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-informatica/">Loja de informática</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-instrumentos-musicais/">Loja de instrumentos musicais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-lavagem-de-estofados/">Loja de lavagem de estofados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-materiais-de-limpeza/">Loja de materiais de limpeza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-materiais-para-artesanato/">Loja de materiais para artesanato</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-moda-intima/">Loja de moda intima</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-motos/">Loja de motos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-moveis/">Loja de moveis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-moveis-usados/">Loja de moveis usados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-persianascortina/">Loja de persianas e cortina</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-piercing/">Loja de piercing</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-plantas-e-flores-artificiais/">Loja de plantas e flores artificiais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-pneus/">Loja de pneus</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-preco-unico/">Loja de preço único</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-presentes/">Loja de presentes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-presentes/">Loja de presentes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-de-limpeza/">Loja de produtos de limpeza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-dieteticos/">Loja de produtos dietéticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-esotericos/">Loja de produtos esotéricos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-hospitalares-e-ortopedicos/">Loja de produtos hospitalares e ortopédicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-naturais/">Loja de produtos naturais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-naturais-e-integrais/">Loja de produtos naturais e integrais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-nauticos/">Loja de produtos náuticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-para-lutas-e-artes-marciais/">Loja de produtos para lutas e artes marciais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-produtos-para-salao-de-beleza/">Loja de produtos para salão de beleza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-racao/">Loja de ração</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-recarga-de-cartuchos/">Loja de recarga de cartuchos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-restauracao-de-moveis/">Loja de restauração de moveis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-revelacao-de-fotos-digitais/">Loja de revelação de fotos digitais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-femininas/">Loja de roupa feminina</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-de-sucesso/">Loja de roupas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-de-grifes-famosas/">Loja de roupas de grifes famosas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-de-praia/">Loja de roupas de praia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-com-roupas-de-tamanhos-grandes/">Loja de roupas de tamanhos grandes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-evangelicas/">Loja de roupas evangélicas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-infantis/">Loja de roupas infantis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-roupas-para-gestantes/">Loja de roupas para gestantes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-suplementos/">Loja de suplementos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-loja-de-surfwear/">Loja de surfwear</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-tecidos/">Loja de tecidos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-tecidos-2/">Loja de tecidos 2</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-utilidades-domesticas/">Loja de utilidades domésticas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-veiculos-usados/">Loja de veículos usados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-de-veiculos-usados/">Loja de veículos usados 2</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-virtual/">Loja virtual</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-loja-virtual-de-roupas/">Loja virtual de roupas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-lojas-de-biquinis/">Lojas de biquínis</a><br>
            </div>
            <h3>M</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-empresas-de-limpeza-e-manutencao-de-condominios/">Manutenção de condomínios</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-manutencao-de-extintores-de-incendio/">Manutenção de extintores de incêndio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-manutencao-residencial/">Manutenção residencial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-terceirizacao-de-mao-de-obra-para-eventos/">Mao de obra para eventos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-fabricacao-de-sandalias/">Máquina de fazer sandália</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-maquina-de-fraldas-descartaveis/">Maquina de fraldas descartáveis</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-de-gravar-chaveiros/">Maquina de gravar chaveiros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-passar-roupa/">Maquina de passar roupa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocios-de-camisetas-personalizadas/">Máquina de personalizar camisetas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-salgados/">Máquina de salgados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-maquinas-de-autosservico/">Maquinas de auto-serviço</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-marcenaria/">Marcenaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-marchetaria/">Marchetaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-marido-a-domicilio/">Marido a domicilio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-marmitaria/">Marmitex delivery</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-marmoraria/">Marmoraria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-servico-de-massagem-terapeutica/">Massagem terapêutica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-massas-congeladas/">Massas congeladas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-mercadinho/">Mercadinho</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-mercearia/">Mercearia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-microcervejaria/">Micro cervejaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-monitoramento-eletronico/">Monitoramento eletrônico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-motel/">Motel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-mudancas/">Mudanças</a><br>
            </div>
            <h3>O</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-oficina-de-conserto-de-videogame/">Oficina de conserto de videogame</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-oficina-de-molduras/">Oficina de molduras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-oficina-de-roupas/">Oficina de roupas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-oficina-mecanica/">Oficina mecânica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-olaria/">Olaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-organizacao-de-casamentos/">Organização de casamentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-organizacao-de-casamentos/">Organização de casamentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-organizacao-de-casamentos/">Organização de casamentos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-organizacao-de-eventos/">Organização de eventos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-organizadora-de-rodeio/">Organização de rodeio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-servicos-de-organizacao-domestica-e-pessoal">Organização domestica e pessoal</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-otica/">Ótica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-outdoor/">Outdoor</a><br>
            </div>
            <h3>P</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-padaria/">Padaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-paisagismo-e-jardinagem">Paisagismo e jardinagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-paisagismo-e-jardinagem/">Paisagismo e jardinagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-pamonharia-de-sucesso-passo-a-passo/">Pamonharia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-papelaria">Papelaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-servico-de-passear-com-cachorros/">Passear com cachorros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-passeios-de-ultraleve/">Passeios de ultraleve</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-passeios-turisticos/">Passeios turísticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-pastelaria-passo-a-passo/">Pastelaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-peixaria/">Peixaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-criacao-de-peixes/">Peixes ornamentais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-perfumaria/">Perfumaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-personal-shopper/">Personal shopping</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-personalizacao-de-veiculos/">Personalização de veículos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-pesca-e-camping/">Pesca e camping</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-pesque-e-pague/">Pesque e pague</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-pet-shop/">Pet shop</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-pet-shop-movel/">Pet shop móvel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-pintura-publicitaria/">Pintura publicitária</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-servico-de-pintura-residencial/">Pintura residencial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-pizzaria/">Pizzaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-pizzaria-delivery/">Pizzaria delivery</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-pizzas-pre-assadas/">Pizzas pré assadas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-planos-de-saude/">Planos de saúde</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-plantio-de-coco-verde/">Plantio de coco verde</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-pocos-artesianos/">Poços artesianos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-posto-de-gasolina/">Posto de gasolina</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-pousada/">Pousada</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-preparatorio-para-concursos/">Preparatório para concursos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-producao-de-alambrados/">Produção de alambrados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-banana-desidratada/">Produção de banana desidratada</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-producao-de-cenarios/">Produção de cenários</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-convites/">Produção de convites</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-producao-de-cosmeticos-e-perfumes-organicos/">Produção de cosméticos e perfumes orgânicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-producao-de-faixas-e-letreiros/">Produção de faixas e letreiros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-marmita-fit/">Produção de refeições em marmita</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-telhas-de-ceramica/">Produção de telhas de cerâmica</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-vegetais-desidratados/">Produção de vegetais desidratados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-producao-de-vinho-tinto/">Produção de vinho tinto</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-produtora-de-videos/">Produtora de vídeos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-produtos-importados/">Produtos importados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-produtos-odontologicos/">Produtos odontológicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-produtos-organicos/">Produtos orgânicos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-produtos-para-diabeticos/">Produtos para diabéticos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-tomate-seco/">Produzir tomate seco</a><br>
            </div>
            <h3>Q</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-quiosque-de-bordado/">Quiosque de bordado</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-quiosque-de-caldo-de-cana/">Quiosque de caldo de cana</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-quiosque-de-chaveiros/">Quiosque de chaveiros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-quiosque-de-chopp-brahma/">Quiosque de chopp brahma</a><br>
            </div>
            <h3>R</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-radio/">Radio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-rastreamento-veicular/">Rastreamento veicular</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-recauchutagem-de-pneus/">Recauchutagem de pneus</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-reciclagem-de-aluminio/">Reciclagem de alumínio</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-reciclagem-de-entulho/">Reciclagem de entulho</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-reciclagem-de-plastico/">Reciclagem de plástico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-recrutamento-e-selecao/">Recrutamento e seleção</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-servico-de-recuperacao-de-para-choques/">Recuperação de para choques</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-reforma-de-estofados/">Reforma de estofados</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-representacao-comercial/">Representação comercial</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-restaurante/">Restaurante</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-restaurante-a-la-carte/">Restaurante a la carte</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-restaurante-de-comida-japonesa/">Restaurante de comida japonesa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-restaurante-de-rodizio-de-massas/">Restaurante de rodízio de massas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-restaurante-self-service/">Restaurante self service</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-revisao-de-textos/">Revisão de textos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-revista-impressa/">Revista impressa</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-revistaria/">Revistaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-empresa-de-rochas-ornamentais/">Rochas ornamentais</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-rodizio-de-pizzas/">Rodízio de pizzas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-roupas-para-revender/">Roupas para revender</a><br>
            </div>
            <h3>S</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-sacolao-ou-hortifruti/">Sacolão</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-salao-de-beleza/">Salão de beleza</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-salao-de-beleza-masculino/">Salão de beleza masculino</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-salao-de-festas-para-aluguel/">Salão de festas para aluguel</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-salao-de-manicure/">Salão de manicure</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-sanduiche-natural/">Sanduíche natural</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-sanduiche-natural/">Sanduíche natural</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-sapataria/">Sapataria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-sebo/">Sebo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-sebo-de-livros/">Sebo de livros</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-secagem-e-armazenamento-de-cafe/">Secagem e armazenamento de café</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-seguranca-e-vigilancia/">Segurança e vigilância</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-seguranca-privada/">Segurança privada</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-serralheria/">Serralheria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-servico-de-garcom/">Serviço de garçom</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-servicos-de-entregas-rapidas/">Serviços de entregas rápidas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-servicos-de-instalacoes-eletricas/">Serviços de instalações elétricas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-servicos-de-motoboys/">Serviços de motoboys</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-sex-shop/">Sex shop</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-silk-screen-e-serigrafia/">Silk screen e serigrafia</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-site-de-compras-coletivas/">Site de compras coletivas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-site-de-jogos/">Site de jogos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-sorveteria/">Sorveteria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-sorveteria-self-service/">Sorveteria self service</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-squash-locacao-de-quadras/">Squash locação de quadras</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-stand-de-quick-massage/">Stand de quick massage</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-stands-ou-loja-de-cupcakes/">Stands ou loja de cupcakes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-supermercado/">Supermercado</a><br>
            </div>
            <h3>T</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-tabacaria/">Tabacaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-taxi-aereo/">Taxi aéreo</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-telemensagem/">Tele mensagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-telemarketing/">Telemarketing</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-tinturaria-e-beneficiamento-textil/">Tinturaria têxtil</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-toldos/">Toldos</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-traducao/">Tradução</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-traducao-simultanea/">Tradução simultânea</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-servico-de-transfer/">Transfer</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-transportadora/">Transportadora</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-transporte-escolar/">Transporte escolar</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-transporte-rodoviario/">Transporte rodoviário</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-venda-de-trufas/">Trufas</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-turismo-ecologico-para-criancas/">Turismo ecológico para crianças</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-turismo-rural/">Turismo rural</a><br>
            </div>
            <h3>U</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-usina-de-reciclagem-de-lixo--pet-vidro-e-papel/">Usina de reciclagem</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-usina-de-reciclagem-de-plastico/">Usina de reciclagem de plástico</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-usina-de-reciclagem-de-pneus/">Usina de reciclagem de pneus</a><br>
            </div>
            <h3>V</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-venda-de-agua-de-coco/">Venda de água de coco</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-empresa-de-venda-e-instalacao-de-carpetes/">Venda e instalação de carpetes</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-vendas-pela-internet/">Vendas pela internet</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-vending-machine/">Vending machines</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-uma-vidracaria/">Vidraçaria</a><br>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-viveiros-de-plantas/">Viveiros de plantas</a><br>
            </div>
            <h3>W</h3>
            <div>
                <a target="_blank" rel="noopener noreferrer" href="https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?como-abrir-um-negocio-de-web-designer/">Web designer</a><br>
                <br>
            </div>




        </div>
    </div>


    <style>
        #content_a {
            max-width: 1100px;
            width: 100%;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }


        #mil-ideias div a {
            color: #111;
            transition: 0.3s;
            line-height: 2em
        }

        #mil-ideias div a::before {
            content: '✓ ';
            font-weight: 999;
            color: #3af;
        }

        #mil-ideias div a {
            opacity: 0.7;
            text-shadow: 0px 0px 5px #3af1;
            border-bottom: 0px solid #3af5;
        }

        #mil-ideias div a:hover {
            opacity: 0.7;
            text-shadow: 0px 0px 5px #3af1;
            border-bottom: 1px solid #3af5;
        }

        #mil-ideias>div {
            -moz-column-count: 4;
            -moz-column-gap: 40px;
            -webkit-column-count: 4;
            -webkit-column-gap: 40px;
            column-count: 3;
            column-gap: 40px;
        }
    </style>


    <!-- <script>
    if (window.location.href.split("?")[1] != undefined) {
        document.querySelector("#content_a").style.display = "none"
        document.querySelector("#content_a").insertAdjacentHTML("afterend", `
        <iframe id="page_frame" src="` + 'https://senae.com.br/sebrae/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/?' + window.location.href.split("?")[1] + `" style="width: 100%;display: block;border: 0;height: 1000px;overflow: hidden !important;"></iframe>
            `)
    }
</script> -->
    <script>
        var page_title = "1000 Ideias de Negócios";
    </script>

    <style>
        @media only screen and (max-width: 600px) {
            #content_a h1 {
                text-align: center;
                margin: 35px 0;
            }

            #content_a {
                padding-bottom: 40px !important;
            }

            #content_a {
                padding: 0 15px;
                width: calc(100% - 30px)
            }

            #mil-ideias div {
                display: flex;
                flex-direction: column;
            }

            #negocios_exemplo {
                display: flex;
                flex-direction: column;
                text-align: center
            }

            #negocios_exemplo>div {
                padding: 0;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100% !important;
            }

            #negocios_exemplo h3 {
                width: 100% !important;
                margin-right: auto !important;
                left: 0
            }
        }

        @media only screen and (max-width: 600px) {
            form {
                width: calc(100% - 40px) !important;
            }

            form input,
            form textarea {
                width: calc(100% - 40px) !important;
                padding: 10px 20px !important;
            }
        }
    </style>

<?php
}
?>