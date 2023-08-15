<style>
    #hd_nv_a>nav>ul {
        display: flex;
        align-items: center;
        justify-content: end
    }

    #hd_nv_a>nav>ul>li {
        padding-left: 2em;
        padding-right: 2em
    }

    .senae_header_img {
        height: auto !important
    }
</style>
<?php
if ($plano == 1) {
?>


    <div id="headder">
        <div id="senae-header">
            <a href="https://senae.com.br" style="padding-left: 12px;display: flex;"><img src="https://senae.com.br/imgs/logo_senae_c_b.webp" alt="Sebrae - Logo Senae - Serviço Nacional de Apoio ao Empreendedor" style="padding-top: 8px !important;"></a>
            <div>
                <h1><b>S</b>erviço <b>N</b>acional de <b>A</b>poio ao <b>E</b>mpreendedor</h1>
                <h2 class="o_mb" style="font-size: 7vw;font-weight: 777 !important;font-family: verdana;color: #0d0f17 !important;">Consultor Credenciado</h2>
                <h2 class="o_dt">Consultor Credenciado</h2>
            </div>
        </div>
        <div id="menu-a">
            <ul>
                <li><a target="_blank" href="https://senae.com.br/sebrae/consultoria-empresarial-gratuita/">Consultores</a></li>
                <li><a target="_blank" href="https://senae.com.br/sebrae/consultoria-juridica-gratuita/">Consultoria Jurídica</a></li>
                <li><a target="_blank" href="https://senae.com.br/sebrae/cursos-empresariais/cursos-gratis/">Cursos Grátis</a></li>
                <li><a target="_blank" href="https://senae.com.br/sebrae/fornecedores-em-destaque/">Fornecedores</a></li>
            </ul>
        </div>
    </div>

<?php
}
?>

<header>
    <div id='in_hd_a'>

        <?php


        global $lg_hd_a;
        if (isset($lg_hd_a)) {
            echo $lg_hd_a;
        } else {
        ?>



            <div class='lg_hd_a' style='background: linear-gradient(to right, #001A31 13%, #000 87%);filter: saturate(1.3);'>
                <a href='https://senae.org/<?php echo $url; ?>/' style='text-decoration: none;'>

                    <div style='width: max-content;padding: 0px ;cursor: pointer;padding-top: 15px;'>
                        <i style="height: 2px;background: linear-gradient(to right, #715923, #956719);width: calc(100% + 50px);display: flex;margin-left: -27px;"></i>

                        <div style='display: flex;align-items: center;'>

                            <div style='transform: rotatey(17deg);margin: 7px 0;'>

                                <span id='nome_contador' style='font-size: 26px;font-family:Times New Roman;background: linear-gradient(to bottom, #FEF9AF 32%, #F2CF76 50%, #D88904 74%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;padding: 5px 0;text-transform: uppercase;'><b style='font-size: 5vw;'><?php echo $nome; ?></b></span>
                            </div>
                        </div>
                        <i style="height: 2px;background: linear-gradient(to right, #715923, #956719);width: calc(100% + 50px);display: flex;margin-left: -27px;"></i>
                    </div>

                </a>
            </div>


        <?php
        }
        ?>

        <?php

        global $nome_mobile;

        //echo 'x'.$nome_mobile;

        if ($nome_mobile == "") {
            $nome_mobile = $nome;
        }

        ?>

        <script>
            if (window.innerWidth < 600) {
                document.querySelector("#nome_contador b").textContent = "<?php echo $nome_mobile; ?>"
            }

            var contador_logo = document.querySelector("#nome_contador b").textContent.split(" ")

            var contador_logo_processada = ""

            for (i = 0; i < contador_logo.length; i++) {

                if (contador_logo[i].length > 2) {

                    var palava_atual = contador_logo[i].split("")
                    palava_atual[0] = "<b style='font-size:150% !important'>" + palava_atual[0] + "</b>"

                    contador_logo_processada = contador_logo_processada + palava_atual.join("") + " "

                } else {
                    contador_logo_processada = contador_logo_processada + contador_logo[i].split("") + " "
                }


            }
            document.querySelector("#nome_contador").innerHTML = contador_logo_processada
        </script>

        <div class='fn_hd_a' style='margin-right: -85px;'>
            <span>
                <a style='font-size: 24px!important;font-family: tahoma;' target='_blank' href='tel:<?php echo $fone; ?>'><?php echo $fone; ?></a>
            </span>
        </div>
        <div class='en_hd_a' style='padding-right: 25px;'>
            <span><?php echo $rua; ?>, <?php echo $numero; ?><br> <?php echo $complemento; ?><br> <?php echo $bairro; ?> - <?php echo $cidade; ?>/<?php echo $uf; ?></span>
            <!-- <span class='em_hd_a'><a target='_blank' href='mailto:<?php echo $email; ?>'><?php echo $email; ?></a></span> -->
        </div>
    </div>



    <div id='mobMenu' class='hd_dk' style='height: 2em;position: relative;text-align: center;padding-right: 60px;display: flex;align-items: center;justify-content: center;padding-top: 15px;margin-bottom: -1px;'>
        <span style='color: #ccc;padding-right: 0;font-size: 15px;text-align: center;'><?php echo $rua; ?>, <?php echo $numero; ?><br> <?php echo $complemento; ?> - <?php echo $bairro; ?> - <?php echo $cidade; ?></span>
        <button class='menu navMobOn' style='display: contents;' onclick='togleMobMenu();this.classList.toggle(`opened`);this.setAttribute(`aria-expanded`, this.classList.contains(`opened`))' aria-label='Main Menu' aria-expanded='true'>
            <svg width='100' height='100' viewBox='0 0 100 100' style='top: -10;margin-top:20px'>
                <path class='line line1' d='M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058'>
                </path>
                <path class='line line2' d='M 20,50 H 80'></path>
                <path class='line line3' d='M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942'>
                </path>
            </svg>
        </button>
    </div>

    <div id='navMobMenu'>
        <navm>
            <ul>
                <!-- <li>
                    <a target='_blank' href='https://senae.com.br/<?php //echo $url; 
                                                                    ?>/como-funciona'>
                        Como Funciona</a>
                </li> -->
                <li>
                    Negócios <ul>
                        <!-- <li>
                            <a target='_blank' href='https://senae.com.br/sebrae/tenha-seu-proprio-negocio/ideias-de-negocios/abertura-de-empresa-gratis/'>
                                Abertura de Empresa Grátis</a>
                        </li> -->
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/'>
                                1000 Idéias de Negócios</a>
                        </li>
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa/'>
                                Negócios para Trabalhar em Casa</a>
                        </li>
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro/'>
                                Negócios com Pouco Dinheiro</a>
                        </li>
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/franquias/'>
                                Franquias</a>
                        </li>
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/'>
                                Sociedades / Parcerias</a>
                        </li>
                        <li>
                            <a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/'>
                                Comércios à Venda</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a target='_blank' href='https://senae.org/<?php echo $url; ?>/servicos-planos'>
                        Serviços / Planos</a>
                </li>
                <!-- <li>
                    <a target='_blank' href='https://senae.com.br/<?php //echo $url; 
                                                                    ?>/vantagens'>
                        Vantagens</a>
                </li> -->
                <li>
                    <a target='_blank' href='https://senae.org/<?php echo $url; ?>/depoimentos'>
                        Depoimentos</a>
                </li>
                <li>
                    <a target='_blank' href='https://senae.org/<?= $url_contador ?>/materias/'>
                        Matérias</a>
                </li>
                <li>
                    <a target='_blank' href='https://senae.org/<?php echo $url; ?>/contato'>
                        Contato</a>
                </li>
            </ul>
        </navm>
    </div>

    <div id='hd_nv_a' style="z-index: 10;position: relative;">
        <nav>
            <ul>
                <!-- <li><a target='_blank' href='https://senae.com.br/<?php //echo $url; 
                                                                        ?>/como-funciona'>Como Funciona</a></li> -->
                <li>Negócios
                    <ul>
                        <!-- <li><a target='_blank' href='https://senae.org/<?php //echo $url; 
                                                                            ?>/abertura-de-empresa-gratis/'>Abertura de Empresa Grátis</a></li> -->
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/'>1000
                                Idéias de Negócios</a></li>
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa/'>Negócios para
                                Trabalhar em Casa</a></li>
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro/'>Negócios
                                com Pouco Dinheiro</a></li>
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/franquias/'>Franquias</a></li>
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/'>Sociedades /
                                Parcerias</a></li>
                        <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/'>Comércios à
                                Venda</a></li>

                    </ul>
                </li>
                <li><a target='_blank' href='https://senae.org/<?php echo $url; ?>/servicos-planos'>Serviços / Planos</a>
                    <!-- <li><a target='_blank' href='https://senae.com.br/<?php //echo $url; 
                                                                            ?>/vantagens'>Vantagens</a> -->
                <li><a target='_blank' href='https://senae.org/<?php echo $url; ?>/depoimentos'>Depoimentos</a>
                <li><a target='_blank' href='https://senae.org/<?= $url_contador ?>/materias/'>Matérias</a></li>

                <?php
                if ($plano == 1) {
                ?>
                    <li><a target='_blank' href='https://senae.org/<?php echo $url; ?>/contato'>Contato</a>
                    <?php
                }
                    ?>


            </ul>
        </nav>
    </div>
    <script>
        /*Click td = click a*/
        for (i = 0; i < document.querySelectorAll('li a').length; i++) {
            document.querySelectorAll('li a')[i].style.pointerEvents = 'none';
            document.querySelectorAll('li a')[i].parentElement.onclick = function() {
                zzz(this)
            }
        }

        function zzz(t) {
            t.children[0].click()
        }
    </script>
</header>