<?php // require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ 
?>
<?php



echo "  
";
?>

<style>
    @media only screen and (max-width: 600px) {
        #hm_lt_bn {
            display: none !important;
        }
    }

    @media only screen and (min-width: 600px) {
        #hm_lt_bn_mb {
            display: none !important;
        }
    }
</style>

<script>
    document.querySelector('title').textContent = '<?php echo $nome; ?>'
</script>

<div id='bn_hm_a'>
    <img loading='lazy' style='width: 100%;' src='https://senae.org/imgs/banner_e.webp' alt='Contador Credenciado do SENAE'>
</div>
<div id='fm_tx_hm_a'>



    <div id='hm_lt_bn' style='display: flex;align-items: center;justify-content: center;position: relative;'>
        <?php
        if ($plano == 1) {
        ?>
            <div><img loading='lazy' alt='Logo Senae' src='https://senae.com.br/imgs/logo_senae_a.webp?<?php echo time(); ?>' style='position: absolute;left: 1em;top: 1.5em;width: 230px;'></div>
            <div style='position: absolute;width: 100%;display: flex;height: 100%;display: flex;align-items: center;flex-wrap: nowrap;/*! justify-content: space-between; */'>
                <img loading='lazy' alt='Senae Consultor Credenciado' src='https://senae.com.br/scripts/contadores/includes/imgs/banner-texto-contadores.webp?1661806059' style='width: 50%;margin-left: 20px;margin-right: -20px;margin-top: 105px;max-height: 300px;'>
                <img loading='lazy' alt='Senae Consultor Credenciado' src='https://senae.com.br/scripts/contadores/includes/imgs/banner-selo-contadores.webp?1661806059' style='width: 47%;margin-top: -5px;max-height: 464px;'>
            </div>
            <!-- <div id='validade' style='position: absolute;bottom: 15px;left: 30px;font-size: 30px;padding-bottom: 10px;width: calc(100% - 60px);'>
            <span style='color: #fff;'>Certificado Válido até:</span> 
            <b style='color: orange;'>31/12/2023</b>
        </div> -->
        <?php
        }
        ?>
    </div>


    <div id='hm_lt_bn_mb' style='display: flex;align-items: center;justify-content: center;position: relative;flex-direction: column;padding: 0 20px;padding-top: 20px;border-bottom: 7px solid #fff;padding-bottom: 20px;'>
        <div style='display: flex;justify-content: space-between;width: 100%;'>
            <img loading='lazy' alt='Logo Senae' src='https://senae.com.br/scripts/contadores/includes/imgs/logo_senae_e.png?1661803748' style='width: 240px;'>
        </div>

        <h1 style='color: #fff;font-size: 17px !important;'>CONSULTOR CREDENCIADO</h1>


        <div style='width: 100%;height: 100%;display: flex;align-items: center;flex-wrap: nowrap;padding: 1em 0;justify-content: center;'>
            <img loading='lazy' alt='Senae Consultor Credenciado' src='https://senae.com.br/scripts/contadores/includes/imgs/banner-texto-contadores.webp?1661803748' style='width: 70%;padding: 0 30px;'>

        </div>
        <!-- <div id='validade' style='font-size: 15px;padding-bottom: 10px;'>
            <span style='color: #fff;'>Certificado Válido até:</span>
            <b style='color: orange;'>31/12/2023</b>
        </div> -->
    </div>
    <div id="hm_lt_bn_mb_2">
        <style>
            b {
                font-size: inherit !important;

            }
        </style>

        <h2 class='hd_mb' style='color: #e6a120;font-family: arial;text-align: center;'>TIRE SUAS DÚVIDAS GRÁTIS<br> <?php if ($plano == 1) {
                                                                                                                            echo 'COM O CONSULTOR!';
                                                                                                                        } ?></h2>

        <h2 class='hd_dk' style='color: #e6a120;font-family: arial;margin-left: 18px;'>TIRE SUAS DÚVIDAS GRÁTIS<br><?php if ($plano == 1) {
                                                                                                                        echo 'COM O CONSULTOR!';
                                                                                                                    } ?></h2>


        <form method="post" action="https://senae.com.br/scripts/contadores/includes/contato/contato.php?<?=time()?>" style="padding-bottom: 30px;">
            <div style="padding-top: 0;">
                <div style="display: grid;margin-left: 20px;width: calc(60% - 40px);display: flex;flex-direction: column;justify-content: space-between;padding-right: 00px;margin-right: 15px;">
                    <input required="" name="nome" type="text" placeholder="Nome" style="height: 41px !important;padding-left: 1em;font-size: 17px;margin-bottom: 7px;">
                    <input required="" name="email" type="text" placeholder="Email" style="height: 41px !important;padding-left: 1em;font-size: 17px;margin-bottom: 7px;">
                    <input name="telefone" id="telefone" type="text" placeholder="Telefone" maxlength="15" onkeyup="handlePhone(event)" style="height: 41px !important;padding-left: 1em;font-size: 17px;margin-bottom: 7px;">
                    <input name="cm_pd_aj" type="text" placeholder="Título do Assunto" style="height: 41px !important;padding-left: 1em;font-size: 17px;">
                    <input required="" name="genForm" type="hidden" value="<?php echo $id; ?>">
                </div>
                <div style="width: 100%;padding-right: 00px;">
                    <textarea name="mensagem" id="" rows="7" style="margin: 0;padding: 1em;font-family: verdana;font-size: 11px;color: #555;width: 36em;font-size: 17px;width: calc(100% - 60px);height: calc(100% - 36px);" cols="45"></textarea>
                </div>
            </div>

            <div style="display: flex;width: calc(100% - 40px);align-items: center;justify-content: center;padding: 15px 20px;">
                <?php if ($plano == 1) : ?>
                    <div style="color: #fff;height: 4em;font-size: 20px;display: flex;align-items: center;flex-direction: column;justify-content: center;text-align: center;width: 100%;">
                        <span>Ou Solicite o seu CÓDIGO de Acesso.</span>
                        <span>Com ele você terá Acesso à todos os Serviços Gratuitos do SENAE.</span>
                    </div>
                <?php endif ?>
            </div>

            <input type="submit" value="Enviar" onclick="" style="height: 51px;background: #e6a120;border: 0;margin: 1em auto;display: block;color: #fff;font-weight: 999;margin: 1em 20px;width: calc(100% - 40px);margin-top: 30px;font-size: 29px;margin-bottom: 0px;margin-top: 0;height: 50px !important;font-size: 25px;">
        </form>


        <?php


        $url_contador = $url;


        ?>

        <script>
            var handlePhone = (event) => {
                let input = event.target
                input.value = phoneMask(input.value)

                if (document.querySelector("#telefone").value.length < 14) {
                    document.querySelector("#telefone").style.outline = "1px solid red"
                } else {
                    document.querySelector("#telefone").style.outline = "none"
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
            var url_contador = "<?php echo $url_contador; ?>"
        </script>


        <?php



        echo "

             
    </div>
</div>

    <div>";

        if ($plano == 2) {
            include('/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/index/tenha_seu_negocio.php');
        ?>
            <style>
                #fm_tx_hm_a {
                    margin-bottom: 7px
                }
            </style>
        <?php
        }

        include('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/blocos_home.php');

        ?>

        <?php
        // include('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/tenha_seu_negocio.php');



        if ($plano == 1) {
            include('/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/index/tenha_seu_negocio.php');
        }

        ?>


        <style>
            /*imgZoom*/
            .img_hov_zoom>div>div>div {
                height: auto;
                overflow: hidden;
                border-radius: 1em
            }

            .img_hov_zoom img {
                transition: transform .5s ease;
                transition: 0.5s;
                margin: 0;
                cursor: pointer
            }

            .img_hov_zoom img:hover {
                transform: scale(1.25);
                opacity: .75
            }

            .expand_next .act {
                rotate: -90deg !important;
            }

            #title_block2 {
                display: none
            }

            .cd_hm__lst h2 {
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;

            }

            .cd_hm__lst h2 u {
                font-family: Helvetica, Arial, sans-serif;
                font-weight: 555 !important;
            }
        </style>

        <?php





        echo "
     
    </div>
    <div>

    
    ";

        include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/materias/materias_home.php";

        ?>



        <?php

        // include('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/blocos_home.php');
        // include('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/tenha_seu_negocio.php');
        // include('/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/materias.php');
        echo "

</div>


";
        ?>




        <!-- <script>//BANNER A SLIDER
        var counter_a = 1
        var list_banners_a = [
            'https://senae.com.br/wp-content/uploads/2021/12/promo_contab.webp', 
            'https://senae.com.br/wp-content/uploads/2021/12/abra_sua_em.webp', 
            'https://senae.com.br/wp-content/uploads/2021/12/equipe_prof.webp']

            list_banners_a = ['https://senae.com.br/imgs/banner_a6.webp', 'https://senae.com.br/imgs/banner_a6.webp', 'https://senae.com.br/imgs/banner_a6.webp']
        setInterval(function () {

            document.querySelector('#bn_hm_a img').src = list_banners_a[counter_a]
            if (counter_a == 2) {
                counter_a = 0
            } else {
                counter_a = counter_a + 1
            }
        }, 3000)
    </script> -->
        <script>
            var date = new Date()
            //document.querySelector('#validade b').textContent = '31/12/' + (date.getFullYear() +1)
        </script>

        <div id="fl-bt" class="wa_bt_ft">

            <div id="share" class="" style="display: none;">
                <button class="share-btn" style="padding: 0;">
                    <i class="fas fa-share-alt" aria-hidden="true" style="background: #f5f5f5;color: #555;border-radius: 1em;box-shadow: 1px 1px 5px 0px #2225;transition: .2s;padding: 5px;text-decoration: none;display: inherit;outline: none;line-height: 30px;font-size: 34px;padding: 15px;"></i>
                </button>
                <div id="bl_bg" class=""></div>
                <div class="share-options">
                    <p class="title">Compartilhar</p>
                    <div class="social-media">

                        <div>
                            <button class="social-media-btn copiar_link" style="background: #8F9CAD;"><i aria-hidden="true" class="fa fa-copy"></i></button>
                            <span>Copiar Link</span>
                        </div>
                        <div>
                            <button class="social-media-btn share_whatsapp" style="background: #25D366;"><i aria-hidden="true" class="fab fa-whatsapp"></i></button>
                            <span>WhatsApp</span>
                        </div>
                        <div>
                            <button class="social-media-btn share_facebook" style="background: #1877F2;"><i aria-hidden="true" class="fab fa-facebook"></i></button>
                            <span>Facebook</span>
                        </div>
                        <div>
                            <button class="social-media-btn share_mail" style="background: #D55523;"><i aria-hidden="true" class="fa fa-envelope"></i></button>
                            <span>E-mail</span>
                        </div>

                        <div>
                            <button class="social-media-btn share_mais" style="background: #596371;"><i aria-hidden="true" class="fa fa-ellipsis-h"></i></button>
                            <span>Mais</span>
                        </div>

                    </div>
                    <div class="link-container">
                        <p class="link">https://example.com/share</p>
                        <button class="copy-btn">copy</button>
                    </div>
                </div>
            </div>
        </div>



        <script>
            window.onload = function() {
                // if (window.innerWidth >= 600) {

                //     if (document.querySelector('.wa_bt_ft_mobile') != undefined) {
                //         document.querySelector('.wa_bt_ft_mobile').remove()
                //     }

                // }
                // if (window.innerWidth < 600) {
                //     document.querySelector('.wa_bt_ft_desktp').remove()
                // }
            }

            /**/

            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100 || $(window).scrollTop() <= 110) {
                    //document.querySelector('#fl-bt').classList.add('wa_bt_ft')
                } else {
                    document.querySelector('#fl-bt').classList.remove('wa_bt_ft')
                }
            });
        </script>
        <script>
            //Popup API
            function popupA(status, txt) {

                if (document.querySelector("#popup") != undefined) {
                    document.querySelector("#popup").remove()
                }

                if (status == true) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
            <div id="popup" style="position: fixed;right: 1em;bottom: 1em;z-index: 999;background: #0b7;padding: 20px;border-radius: 5px 5px 5px 5px;transition: 1s;">
                    <span></span>
                    <span style="color: #fff;font-family: verdana;font-size: 14px;" >` + txt + `</span>
            </div>
            `)
                }

                if (status == false) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
            <div id="popup" style="position: fixed;right: 1em;bottom: 1em;z-index: 999;background: #c03;padding: 20px;border-radius: 5px 5px 5px 5px;transition: 1s;">
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

            function cpy(t) {
                navigator.clipboard.writeText(t)
            }

            function closeShare() {
                shareOptions.classList.toggle('active');
                blackBackground.classList.toggle('active')
            }

            const shareBtn = document.querySelector('.share-btn');
            const shareOptions = document.querySelector('.share-options');
            const blackBackground = document.querySelector('#bl_bg')

            shareBtn.addEventListener('click', () => {
                closeShare()
            })

            blackBackground.addEventListener('click', () => {
                closeShare()
            })



            document.querySelector("#share .copiar_link").addEventListener("click", () => {
                cpy(window.location.href)
                popupA(true, "Copiado")
                closeShare()

            })

            document.querySelector(".share_whatsapp").addEventListener("click", () => {
                var url = window.location.href
                document.querySelector("body").insertAdjacentHTML("beforeend", `
            <a target="_blank" style="display:none" id="share_whatsapp" href="https://wa.me/?text=` + window.location.href + `"></a>
        `)
                document.querySelector("#share_whatsapp").click()
                closeShare()
                document.querySelector("#share_whatsapp")
            })

            document.querySelector(".share_facebook").addEventListener("click", () => {
                var url = window.location.href
                document.querySelector("body").insertAdjacentHTML("beforeend", `
  	<a target="_blank" style="display:none" id="share_facebook" href="https://www.facebook.com/dialog/share?app_id=87741124305&href=` + window.location.href + `%26feature%3Dshare&display=popup"></a>
  `)
                document.querySelector("#share_facebook").click()
                closeShare()
                document.querySelector("#share_facebook")
            })

            document.querySelector(".share_mail").addEventListener("click", () => {
                var url = window.location.href
                document.querySelector("body").insertAdjacentHTML("beforeend", `
  	<a target="_blank" style="display:none" id="share_mail" href="mailto:?body= ` + window.location.href + `"></a>
  `)
                document.querySelector("#share_mail").click()
                closeShare()
                document.querySelector("#share_mail")
            })

            document.querySelector(".share_mais").addEventListener("click", async () => {
                var nome_site = document.querySelector("#nome_contador").textContent;
                await navigator.share({
                    title: nome_site,
                    url: window.location.href
                });
            });
        </script>

        </body>

        </html>

        <?php





        ?>
        <?php // }else{header("location:https://senae.com.br");} 
        ?>

        <style>
            #hm_lt_bn_mb_2,
            #hm_lt_bn {
                background: linear-gradient(#0b446d, #022C3E) !important;
                ;
            }

            #hm_lt_bn {
                border-radius: 0px 5px 5px 0px;
                box-shadow: 0 0 5em inset #0005;
            }

            #hm_lt_bn_mb_2 {
                border-radius: 5px 0 0 5px;
                box-shadow: 0 0 5em inset #0005;
            }

            #hm_lt_bn_mb_2 input,
            #hm_lt_bn_mb_2 textarea {
                border-radius: 4px;
                border: 1px solid #fff;
                outline: none
            }

            #hm_lt_bn_mb_2 h2 {
                text-shadow: 1px 1px 2px #244774;
            }

            #wt_bt {
                display: none !important;
            }
        </style>