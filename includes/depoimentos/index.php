<?php // require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php 

echo "

        <script>
            document.querySelector('title').textContent = '$nome - Depoimentos'
        </script>

<style>

@media only screen and (max-width: 600px) {
    #depoimentos{
        padding: 2% 10%!important;
      }
      
      #depoimentos > div{
        grid-template-columns: auto!important;
        border-top: 1px solid #ddd;
        padding-top: 2em
      }
      
      #depoimentos p {
        line-height: 1.2em!important;
      }
      #depoimentos img{
        display: block;
        margin: auto;
      }
      #depoimentos h3, #depoimentos h2{
        text-align: center
      }
}
@media only screen and (max-width: 600px) {
    header{
        position: relative!important;
        z-index: 0!important;
      }
      #depoimentos{
        background: #fff;
        position: relative;
        z-index: 3!important;
      }
}

@media only screen and (min-width: 600px) {

    header{
        position: relative!important;
        z-index: 3!important;
      }
      #depoimentos{
        background: #fff;
        position: relative;
        z-index: 2!important;
      }
}
@media only screen and (min-width: 600px) {
    #depoimentos{
      width: 100%;
      max-width: 1100px;
      padding: 1em!important;;
      margin: auto;
    }
  }
  #depoimentos > div h3{
    text-decoration: underline;
  }
  
  #depoimentos > div i{
    font-weight: 777
  }
</style>

<div id='depoimentos' style='padding: 1em 13em;'>
<h2 style='font-weight: normal;color: #333;'>Depoimentos</h2>

<h3 style='font-size: 1em;text-align: center;color: #444;font-size: 24px;margin-bottom: 45px;margin-top: 40px;'>SEJA TAMBÉM UM CLIENTE DE SUCESSO COM NOSSA ASSESSORIA!</h3>

<div style='display: grid;grid-template-columns: 18% auto;margin-bottom: 0.7em;'>
    <div>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/OFICINA-DO-ZE.jpg' alt=''  style='width:  169px !important;border-radius: 9px;cursor: pointer;'>
    </div>
    <div>
        <h3 style='color: #333;'>OFICINA DO ZÉ</h3>
        <p style='line-height: 0em;color: #555;'>Trabalha com Serviços Gerais de Oficina Mecânica – FONE:
            3222-2222</p>
        <p><i style='color: #555;'>“Estou há mais de 10 anos com a Contabilidade que sempre me Ajudou em
                tudo”</i></p>
    </div>
</div>

<div style='display: grid;grid-template-columns: 18% auto;margin-bottom: 0.7em;'>
    <div>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/PIZZARIA.jpg' alt=''  style='width:  169px !important;border-radius: 9px;cursor: pointer;'>
    </div>
    <div>
        <h3 style='color: #333;'>PIZZARIA DISKPIZZA</h3>
        <p style='line-height: 0em;color: #555;'>Pizzaria Tradicional em Curitiba – FONE: 3222-2222</p>
        <p><i style='color: #555;'> “Sempre apresentou os Serviços em dia – Empresa de Confiança”</i></p>
    </div>
</div>

<div style='display: grid;grid-template-columns: 18% auto;margin-bottom: 0.7em;'>
    <div>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/MERCADO.jpg' alt=''  style='width:  169px !important;border-radius: 9px;cursor: pointer;'>
    </div>
    <div>
        <h3 style='color: #333;'>MERCADO DO BAIRRO</h3>
        <p style='line-height: 0em;color: #555;'>Mercado que atua há mais de 05 anos em Curitiba – FONE:
            3222-2222</p>
        <p><i style='color: #555;'> “Tenho sempre Rodízio de Funcionários e sempre tive Orientação quanto as
                Rescisões”</i></p>
    </div>
</div>

<div style='display: grid;grid-template-columns: 18% auto;margin-bottom: 0.7em;'>
    <div>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/LOJA-CONFECCOES.jpg' alt=''  style='width:  169px !important;border-radius: 9px;cursor: pointer;'>
    </div>
    <div>
        <h3 style='color: #333;'>CONFECÇÕES DA MARIELE</h3>
        <p style='line-height: 0em;color: #555;'>Trabalha com Confecções – FONE: 3222-2222</p>
        <p><i style='color: #555;'> “Escritório Contábil muito bom. Sempre me Assessorou Inclusive quanto a
                questão de colocar Maquininhas de Crédito e qual o Melhor Plano junto aos Bancos”</i></p>
    </div>
</div>

<div style='display: grid;grid-template-columns: 18% auto;margin-bottom: 0.7em;'>
    <div>
        <img src='https://senae.com.br/wp-content/uploads/2021/10/RESTAURANTE.jpg' alt=''  style='width:  169px !important;border-radius: 9px;cursor: pointer;'>
    </div>
    <div>
        <h3 style='color: #333;'>RESTAURANTE DA MARIA</h3>
        <p style='line-height: 0em;color: #555;'>Trabalha com o Fornecimento de Refeições – FONE: 3222-2222</p>
        <p><i style='color: #555;'> “Não sabia que não podia dar o resto de comidas para os outros e que
                qualquer Cliente por Lei podia pedir para entrar na minha Cozinha ”</i></p>
    </div>
</div>

</div>"

?>
<?php // }else{header("location:https://senae.com.br");} ?>
  <script>var page_title = "Depoimentos";</script>