<?php

$url_atual = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url_atual, '?restituir') !== false) {
  ////start RESTITUIR
?>



  <div id="content" style="max-width: 1100px;width: 100%;margin: auto;">
    <style>
      @media only screen and (max-width: 600px) {
        #content {
          padding: 1em
        }
      }

      .formSenaeSbm {
        padding-top: 15px
      }

      #contato input,
      #contato textarea {
        border-radius: 7px
      }

      #submit {
        width: 100%;
        display: flex;
        justify-content: end
      }

      #submit input {
        margin-top: 15px;
        background: #073466;
        color: #fff;
      }

      #submit input:hover {
        background: #0B4F9A;
      }

      #contato div {
        padding-top: 15px !important;
      }
    </style>

    <h1 style="font-size:46px">Recuperação Fiscal Contato</h1>

    <form id="contato" method="POST" action="https://senae.com.br/scripts/email/enviar_email.php?fm=recuperacao-fiscal&email">

      <div>
        <label>Seu Nome</label>
        <input name="nome" type="text">
      </div>

      <div>
        <label>Whats</label>
        <input name="whats" type="text">
      </div>

      <div>
        <label>Seu E-mail</label>
        <input name="hr" type="text">
        <input name="email" type="text" style="display:none">
        <input name="email_contador" id="email_contador" type="text" value="<?php echo $email; ?>" style="display:none">
        <input name="cod_contador" id="url_contador" type="text" value="<?php echo $cod_contador; ?>" style="display:none">
      </div>

      <div>
        <label>Nome da Empresa</label>
        <input name="nome_empresa" type="text">
      </div>

      <div>
        <label>CNPJ</label>
        <input name="cnpj" type="text">
      </div>

      <div id="sm_segmento">
        <label>Ramo de Atividade</label>
        <select name="ramo" style="border-radius: 7px;">
          <option value="Adega">Adega</option>
          <option value="Autopeças">Autopeças</option>
          <option value="Bares/Restaurantes">Bares/Restaurantes</option>
          <option value="Casa de show">Casa de show</option>
          <option value="Centro automotivo">Centro automotivo</option>
          <option value="Farmácias">Farmácias</option>
          <option value="Loja de conveniencia">Loja de conveniencia</option>
          <option value="Mercados/Mercearias">Mercados/Mercearias</option>
          <option value="Perfumaria">Perfumaria</option>
          <option value="Petshop">Petshop</option>
        </select>
      </div>

      <div>
        <label>Faturamento Mensal</label>
        <input onkeypress="return(moeda(this,`.`,`,`,event))" name="fatramento_mensal" type="text">
      </div>

      <div id="submit">
        <input value="Enviar" type="submit" style="width: 120px;display: flex;align-items: center;justify-content: center;height: 50px !important;margin-bottom: 40px;width: 100% !important;">
      </div>

    </form>

    <!-- [mensagem_enviado_com_sucesso] -->

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
      document.querySelector("#email_contador").value = window.location.href.split("?email=")[1]
    </script>


  </div>

  <style>
    input,
    textarea,
    select {
      width: 100%;
      border: 1px solid #ccc;
      margin-top: 10px;
      padding: 10px 15px;
      font-size: 16px;
    }

    input,
    textarea {
      width: calc(100% - 30px);
    }

    select {
      padding: 15px 20px;
    }

    #content {
      padding: 0 20px !important;
      width: calc(100% - 40px) !important
    }

    #contato input,
    textarea {
      padding: 5px 15px !important;
      width: calc(100% - 30px) !important;
    }

    h1 {
      text-align: center !important;
    }

    h2 {
      line-height: 1.25em !important;
      text-align: center
    }
  </style>




<?php
  ///end RESTITUIR
} else {
?>



  <img decoding="async" class="senae_header_img" src="https://senae.com.br/imgs/porque%20trocar%20de%20contador_b.webp" alt="Senae - Serviço Nacional de Apoio ao Empreendedor" loading="lazy" width="100%" height="100%">

  <style>
    @media only screen and (max-width: 600px) {
      #content_trocar {
        padding-left: 20px !important;
        padding-right: 20px !important;

      }
    }

    #texto_a p {
      color: #30455cdd !important;
      line-height: 26px !important;
      margin-top: 3px !important;
    }
  </style>

  <div style="max-width: 1100px;margin: auto;padding-bottom:50px" id="content_trocar">



    <div id="texto_a">
      <h1 class="o_mb" style="text-align: center;margin-top: 25px;">VANTAGENS EM TROCAR DE CONTADOR</h1>
      <h3 id="title_m" style="font-size: 32px;font-weight: 777;color: #4e5367 !important;">04 Motivos para você:</h3>
      <p>01- Porque o Consultor do SENAE além de fazer a tua Contabilidade vai lhe prestar Consultoria de Negócios Grátis.</p>
      <b>
        <p>02- Faz você pagar menos Impostos dentro da Lei.<br>Consulte abaixo a Redução de Impostos que você terá com um Consultor do SENAE</p>
      </b>
      <p>03- O Consultor do SENAE tem o Melhor Preço do Mercado para os Serviços Contábeis, além de ter a opção da Contabilidade Digital.</p>
      <b>
        <p>04- Ele pode te Restituir parte dos Impostos pagos durante os últimos 05 anos. (Tudo dentro da Legislação) com Honorários de 30 % do valor Restituido.</p>
      </b>
    </div>

    <style>
      #tabela_vantagens {
        display: flex;
        flex-direction: column;
        max-width: 1100px;
        width: 100%
      }

      #tabela_vantagens>div {
        display: flex;
        flex-direction: row
      }

      #tabela_vantagens p {
        margin: 2px 0 !important;
        background: #f5f5f5;
        padding: 10px 20px;
        width: 800px;
        border-radius: 6px 0 0 6px;
        border: 2px solid #5479B8;
        border-right: 0;
        color: #0B4F9A !important;
      }

      #tabela_vantagens>div>div {
        margin: 2px 0;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
      }

      #tabela_vantagens .false {
        border: 2px solid #5479B8;
        border-left: 0;
        border-right: 0;
        border-left: 2px solid #5479B8 !important;
        width: 150px;
      }

      #tabela_vantagens .false b {
        color: #fff !important;
        background: #F00;
        height: 20px;
        width: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 55px;
        font-size: 13.5px;
        border: 2px solid #fff !important;
        outline: 1px solid red
      }

      #tabela_vantagens .true {
        border: 2px solid #5479B8;
        border-left: 0;
        border-radius: 0 6px 6px 0;
        width: 150px;
        border-left: 2px solid #5479B8 !important;
      }

      #tabela_vantagens .true i {
        background: #fff;
        border-radius: 55px;
        align-items: center;
        justify-content: center;
        display: flex;
      }

      #tabela_head .false_ {
        width: 150px;
        border: 2px solid #5479B8;
        border-left-color: #5479B8;
        border-right-color: #fff;
        text-align: center
      }

      #tabela_head .true_ {
        width: 150px;
        border: 2px solid #5479B8;
        border-left-color: #5479B8;
        border-radius: 0 6px 6px 0 !important;
        text-align: center
      }

      #tabela_head>p {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 555
      }

      #tabela_vantagens p {
        align-items: center;
        /* justify-content: center; */
        display: flex
      }

      @media only screen and (max-width: 600px) {
        #economia>div:nth-child(2)>div:nth-child(1)>div:nth-child(3) {
          padding-top: 20px !important;
          margin-top: 20px
        }

        #tabela_vantagens .false,
        #tabela_vantagens .false_ {
          display: none !important
        }

        #tabela_vantagens {
          padding: 0 0px
        }

        #tabela_head {
          display: none !important;
        }

      }
    </style>


    <div id="tabela_vantagens" style="display: flex;">
      <h1 class="o_mb h_dt" style="text-align: center;">Motivos para você Trocar de Contador:</h1>
      <div id="tabela_head">
        <p style="text-align: center;">Motivos para você Trocar de Contador:</p>
        <div class="false_">
          <b>Contador<br>não<br>Credenciado</b>
        </div>
        <div class="true_">
          <b>Contador<br>Credenciado<br>SENAE</b>
        </div>
      </div>

      <div>
        <p>Contabilidade e Consultoria de Negócios</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Menos Impostos dentro da Lei</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Recuperação dos Impostos pagos a mais</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Melhor Custo Benefício em Serviços Contábeis</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Consultoria Jurídica Empresarial e Física Grátis</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Site Profissional Grátis</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>APP de Delivery Grátis para Economizar com iFood (Em Breve)</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Loja Virtual para você Vender pela Internet (Em Breve)</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Anúncio de Pizzaria Grátis na Internet</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Consultoria para Abrir e Comprar Franquias</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Anunciar seu Comércio à Venda Grátis</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Formar Parcerias, Sociedades ou ter Investidores</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
      <div>
        <p>Receber Artigos Semanais de: Gestão, Marketing, Vendas, Planejamento, etc</p>
        <div class="false"><b>X</b></div>
        <div class="true"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
      </div>
    </div>


    <?php /* SIMULADOR */ //require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/simulador.php';
    // BEGIN CONTENT SIMULADOR
    ?>


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
            mensagem_enviada()
          }
        })
      }
    </script>

    <div id="simulador_p" style="display: flex;align-items: center;justify-content: center;padding: 3em 0;flex-direction: column;">

      <h2 style="display: block;text-align: center;margin: 0;margin-bottom: 30px;">Simule quanto você pode Recuperar de <br>Impostos Pagos a Maior nos Últimos 05 anos.</h2>

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


    <style>
      @media only screen and (max-width: 600px) {
        #p_lucro {
          margin-top: 0 !important;
        }
      }
    </style>



    <div id="economia" style="max-width: 500px;margin: auto;">
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
          <div id="p_lucro" style="width: 500px;border: 2px solid #002867;border-top: 0;padding: 25px;border-radius: 0 0 5px 5px;width: calc(100% - 51px);">
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
                  <input onkeypress="return(moeda(this,`.`,`,`,event))" name="valor_contab_s" id="valor_contab_s" type="text" placeholder="" value="" style="border: 0;text-align: center;font-weight: 555;font-size: 24px;padding-bottom: 2px;display: flex;color: #30455C;width: 100%;height:   42px !important;">
                </div>
                <span style="font-size: 17px;color: #30455cdd !important;">4. Quantos sócios/funcionários têm na sua empresa?</span>
                <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;width: 100%;">
                  <button class="subtract" style="padding: 0 15px;">-</button>
                  <input name="soc_func_s" id="soc_func_s" placeholder="0" type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;">
                  <button class="add" style="padding: 0 15px;">+</button>
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
                  <input name="valor_contab_p" id="valor_contab_p" type="text" placeholder="" value="" style="border: 0;text-align: center;font-weight: 555;font-size: 24px;padding-bottom: 2px;display: flex;color: #30455C;width: 100%;height: 42px !important;">
                </div>
                <span style="font-size: 17px;color: #30455cdd !important;">4. Quantos sócios/funcionários têm na sua empresa?</span>
                <div style="display: flex;align-items: center;justify-content: center;border-bottom: 2px solid #3ae;margin-bottom: 30px;">
                  <button class="subtract" style="padding: 0 15px;cursor: pointer;">-</button>
                  <input name="soc_func_p" id="soc_func_p" placeholder="0" type="text" style="border: 0;text-align: center;color: #30455C;font-size: 24px;font-weight: 555;width: 100%;">
                  <button class="add" style="padding: 0 15px;cursor: pointer;">+</button>
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
    </div>

    <script>
      window.addEventListener("load", function() {
        $("input").val("")
        $("textarea").val("")
        $("select").val("")
      }, false);


      // Seleciona os elementos do input e dos botões
      const input_soc_func = document.querySelector('#soc_func_s');
      const addButton = document.querySelector('.add');
      const subtractButton = document.querySelector('.subtract');

      // Adiciona eventos de clique aos botões
      addButton.addEventListener('click', () => {
        // Obtém o valor atual do input
        let currentValue = Number(input_soc_func.value);

        // Adiciona 1 ao valor atual
        currentValue += 1;

        // Atualiza o valor do input
        input_soc_func.value = currentValue;
      });

      subtractButton.addEventListener('click', () => {
        // Obtém o valor atual do input
        let currentValue = Number(input_soc_func.value);

        if (currentValue > 0) {

          // Subtrai 1 do valor atual
          currentValue -= 1;
          // Atualiza o valor do input
          input_soc_func.value = currentValue;
        }


      });
    </script>


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

        #sm_segmento {
          padding: 0 30px;
        }
      }

      #simulador select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
      }

      #abrir_empresa_form>div>h3 {
        display: none;
      }

      #abrir_empresa_form {
        margin-top: 0 !important;
      }

      #lucro_s input {
        height: 35px !important;
      }

      #lucro_p input {
        height: 35px !important;
      }

      #escolha_seu_plano {
        margin-bottom: 48px
      }

      #abrir_empresa_form {
        margin-bottom: 48px
      }

      @media only screen and (max-width: 600px) {
        #abrir_empresa_form input {
          width: calc(100% - 20px) !important;
        }
      }
    </style>



    <?php
    // END CONTENT SIMULADOR
    ?>


  </div>

  <?php require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/includes/abrir_empresa_gratis.php' ?>

  <script>
    var page_title = "Porque Trocar de Contador";
  </script>
  <style>
    #escolha_seu_plano .plano_a {
      width: calc(100% - 50px) !important;
    }
  </style>

<?php
}
?>