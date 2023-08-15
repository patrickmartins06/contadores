<img class="senae_header_img" src="https://senae.org/imgs/ideias de negocios_b.webp">

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
    body h1 {
      font-family: verdana;
    }

    .cards_center_block {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .cards_center_block img {
      width: 100%;
      margin-bottom: 20px;
      border-radius: 1em;
      border: 2.3px solid #36f;
      box-shadow: 0 0 1em #0005;
      margin-top: 45px;
    }

    .texto_a h1 {
      text-align: center;
      margin-bottom: 45px;
    }

    .texto_a p {
      text-align: center
    }

    .texto_a {
      display: flex;
      flex-direction: column;
      align-items: center
    }

    .texto_a p {
      font-size: 29px !important;
      width: 100%;
      max-width: 700px;
      text-align: left;
      font-weight: 555;
      color: #3E4349 !important;
    }

    @media only screen and (max-width: 600px) {
      .cards_center_block {
        justify-content: center;

      }

      #content {
        padding: 0 20px
      }

      .texto_a h1 {
        margin-bottom: 30px !important;
        margin-top: 15px
      }
    }
  </style>

  <style>
    #fm_a form {
      display: grid
    }

    #fm_a input {
      height: 3em;
      width: 100%
    }

    #fm_a textarea {
      height: 10em
    }

    #fm_a input,
    #fm_a textarea {
      margin: .5em 0;
      border: 1px solid #ccc;
      border-radius: 9px;
      padding: 1em
    }
  </style>

  <div class="texto_a">
    <h1 class="o_mb" style="text-align: center;margin-top: 25px;padding: 0 20px !important;"> IDÉIAS DE NEGÓCIOS </h1>
    <div style="margin-top:00px;width: 100%;">
      <!-- [pesquisar_consultor] -->
    </div>

  </div>

  <script>
    function set_entrar_conato_val() {
      if (localStorage.getItem("consultorNome") != null) {
        document.querySelector(".consultor").value = "CONSULTOR: " + localStorage.getItem("consultorNome")
        document.querySelector(".idConsultor").value = localStorage.getItem("consultorCod")
      }
    }
    // window.onload = function() {
    //   set_entrar_conato_val()
    //   if (localStorage.getItem("consultorNome") != null) {
    //     document.querySelector("#contato").style.display = "grid"
    //   } else {
    //     //document.querySelector("#contato").style.display = "none"
    //   }
    // }
  </script>

  <?php include "/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/mensagem_enviado_com_sucesso.php"; ?>

  <div class="cards_center_block">
    <a id="_1000_ideias" target="_blank" href="https://senae.com.br/sebrae/tenha-seu-proprio-negocio/ideias-de-negocios/1000-ideias-de-negocios/"><img src="https://senae.org/imgs/1000-ideias-de-negocios-card.webp" alt="Sebrae - Mil Ideias de Negócios" title="Sebrae - Mil Ideias de Negócios"></a>
    <a id="trabalhar_em_casa" target="_blank" href="https://senae.com.br/sebrae/negocios-para-trabalhar-em-casa/"><img src="https://senae.org/imgs/negocios-para-trabalhar-em-casa.webp" alt="Sebrae - Negócios para Trabalhar em Casa" title="Sebrae - Negócios para Trabalhar em Casa"></a>
    <a id="pouco_dinheiro" target="_blank" href="https://senae.com.br/sebrae/negocios-com-pouco-dinheiro/"><img src="https://senae.org/imgs/negocios-com-pouco-dinheiro-card.webp" alt="Sebrae - Negócios com Pouco Dinheiro" title="Sebrae - Negócios com Pouco Dinheiro"></a>
    <a id="franquias" target="_blank" href="https://senae.com.br/sebrae/franquias/"><img src="https://senae.org/imgs/franquias-c.webp" alt="Sebrae - Franquias" title="Sebrae - Franquias"></a>
    <a id="comercios" target="_blank" href="https://senae.com.br/sebrae/comercios-a-venda/"><img src="https://senae.org/imgs/comercios-a-venda-c.webp" alt="Sebrae - Comércios à Venda" title="Sebrae - Comércios à Venda"></a>
    <a id="parcerias" target="_blank" href="https://senae.com.br/sebrae/parcerias-e-sociedades/"><img src="https://senae.org/imgs/parcerias-e-sociedades-c.webp" alt="Sebrae - Sociedades e Parcerias" title="Sebrae - Sociedades e Parcerias"></a>
  </div>

  <div id="fm_a" style="width: 100%;">
    <form method="POST" action="https://senae.com.br/scripts/email/enviar_email.php?fm=ideias-de-negocios" id="contato" enctype="multipart/form-data" style="">
      <h2 style="margin-top:30px">Preencha o Formulário para ter seu Próprio Negócio</h2>
      <input onchange="defineEmail()" name="nome" class="nome" placeholder="Seu Nome">
      <input onchange="defineEmail()" name="whats" class="whats" placeholder="Seu Whats">
      <input onchange="defineEmail()" name="email" class="email" placeholder="Seu E-mail">
      <!-- <label class="nomeConsultorForm">
        <span>
          <input disabled="" name="consultor" class="consultor" placeholder="Nome do Consultor"><br>
        </span>
      </label> -->
      <input onchange="defineEmail()" name="assunto" class="assunto" placeholder="Assunto">
      <textarea style="width: 100%;" onchange="defineEmail()" name="mensagem" class="mensagem" placeholder="Sua Mensagem"></textarea>
      <input value="<?php echo $cod_contador; ?>" type="hidden" name="idConsultor" class="idConsultor">
      <span>
        <button onclick="submitForm_a()" style="background: #0b4e9a;color: #fff;float: right;width: 9em;margin: .5em 0;border: 1px solid #ccc;border-bottom-color: rgb(204, 204, 204);border-bottom-style: solid;border-bottom-width: 1px;border-radius: 9px;padding: .5em;font-weight: 555;font-weight: 777;border: 0;padding: 20px 30px;">Enviar</button>
      </span>
    </form>
  </div>

</div>



<style>
  /**/
  .cards_center_block {
    display: grid;
    grid-template: auto / auto auto auto;
    margin-bottom: 50px
  }

  @media only screen and (max-width: 600px) {
    .cards_center_block {
      display: grid;
      grid-template: auto / auto
    }

  }

  /**/
  .cont_info p {
    font-size: 16px !important;
  }

  .escolher_contador>div p {
    font-weight: 111;
    font-size: 20px !important;
  }

  .escolher_contador h3 {
    margin-top: 0 !important;
  }

  @media only screen and (max-width: 600px) {

    .escolher_contador {
      margin-top: 25px !important;
    }

  }

  #contato button {
    margin-bottom: 50px !important;
  }
</style>


<script>
  window.addEventListener("load", function() {
    if (url_contador != undefined) {
      var _1000_ideias = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/1000-ideias-de-negocios/"
      var trabalhar_em_casa = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/negocios-para-trabalhar-em-casa/"
      var pouco_dinheiro = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/negocios-com-pouco-dinheiro/"
      var franquias = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/franquias/"
      var comercios = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/"
      var parcerias = "https://senae.org/" + url_contador + "/consultoria-de-negocios/ideias-de-negocios/parcerias-e-sociedades/"

      document.querySelector("#_1000_ideias").setAttribute("href", _1000_ideias)
      document.querySelector("#trabalhar_em_casa").setAttribute("href", trabalhar_em_casa)
      document.querySelector("#pouco_dinheiro").setAttribute("href", pouco_dinheiro)
      document.querySelector("#franquias").setAttribute("href", franquias)
      document.querySelector("#comercios").setAttribute("href", comercios)
      document.querySelector("#parcerias").setAttribute("href", parcerias)
    }
  }, false);
</script>
<script>
  var page_title = "Ideias de Negócios";
</script>

<style>
  @media only screen and (max-width: 600px) {
    .texto_a h1 {
      margin-bottom: 0 !important;
      margin-top: 30px !important;
    }

    .cards_center_block {
      margin-bottom: 0
    }

    #contato h2 {
      margin-top: 0 !important;
      text-align: center;
    }

    #contato input,
    #contato textarea {
      width: calc(100% - 35px) !important;
    }

    #contato {
      padding: 15px
    }

    #contato button {
      margin-bottom: 20px !important;
    }
  }
</style>
