<?php //require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php

echo "

        <script>
            document.querySelector('title').textContent = '$nome - Contato'
        </script>

<style>
@media only screen and (max-width: 600px) {
    #contato_form{
        margin: 0!important;
        padding: 2% 10%;
        grid-template-columns: auto!important;
      }
      #contato_form h2, #contato_form h1{
        text-align: center
      }
      #contato_form form{
        border-top: 1px solid #777;
      }
}

#contato_form form{
    margin-top:1.75em;
    padding-top: 1em;
    padding-bottom: 2em
  }
  #contato_form input, #contato_form textarea, #contato_form select{
    border: 1px solid #7770!important;
    padding: 0 4%!important;
    width:92%!important;
    margin: 1% auto!important;
    border-radius:.75em;
    box-shadow: 1px 1px 5px #2225;
  }
  #contato_form textarea{
    padding: 1em!important;
  }


  @media only screen and (max-width: 600px) {
    header{
        position: relative!important;
        z-index: 0!important;
      }
      #contato_form{
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
      #contato_form{
        background: #fff;
        position: relative;
        z-index: 2!important;
      }
}

@media only screen and (min-width: 600px) {

  .contato_form_ form{
    padding-top: 0!important;
    margin-top: 0!important;
  }

}
</style>

<style>
    iframe{height: 450px!important;}
</style>
<div id='contato_form' style='display: grid;grid-template-columns: 50% 50%;width: 100%;max-width: 1100px;margin: 3em auto;'>
<div>
    <h1 style='font-weight: normal;color: #333;'>".$nome."</h1>
    <p>Endereço:</p>
    <p style='color: #555;'>".$rua.", $numero – $bairro<br> $cidade/$uf – CEP: $cep</p>
    <p style='padding-top: 0.5em;'>Telefone:</p>
    <p style='color: #555;'> Fixo: " . $fone ."</p>
    <p style='color: #555;'> WhatsApp: " . $whatsapp ."</p>
    <p style='padding-top: 0.5em;'>Email:</p>
    <p style='color: #555;'>" . $email ."</p>
    
    <hr style='margin-right: 3em;color: #eee3;'>
    <p style=''>Horário de Atendimento:</p>
    <p style='color: #555;'>Segunda à Sexta das 8:00 às 18:00</p>
    <p style='color: #555;'> Horário de Almoço das 12:00 às 13:30</p>
</div>
<div class='contato_form_' style='/*! display: grid; *//*! grid-template-columns: auto auto; */'>

    <form method='post' action='https://senae.com.br/scripts/contadores/includes/contato/contato.php' style='display: grid;margin: ;'>
        <h2 style='font-weight: normal;color: #444;'>Fale Conosco</h2>
        <input name='nome' type='text' placeholder='Nome' style='height: 3em;margin: .25em 0;padding: 0 1em;'>
        <input name='email' type='text' placeholder='E-mail' style='height: 3em;margin: .25em 0;padding: 0 1em;'>
        <input name='telefone' type='text' placeholder='Telefone' style='height: 3em;margin: .25em 0;padding: 0 1em;'>
        <input required name='genForm' type='hidden' value='"."$id"."'>
        <select name='cm_pd_aj' id='' style='width: 100% !important;height: 3em;margin: .25em 0;padding: 0 1em;background: #fff;border: 1px solid #888;'>
            <option value='Como podemos Ajudar?' style='background: red;'>Como podemos Ajudar?</option>
            <option value='Quero Participar das Feiras'>Quero Participar das Feiras</option>
            <option value='Quero Anunciar meu Comércio'>Quero Anunciar meu Comércio</option>
            <option value='Quero Comprar um Comércio'>Quero Comprar um Comércio</option>
            <option value='Quero Anunciar uma Sociedade'>Quero Anunciar uma Sociedade</option>
            <option value='Quero me Juntar a uma Sociedade'>Quero me Juntar a uma Sociedade</option>
            <option value='Quero Abrir uma Franquia'>Quero Abrir uma Franquia</option>
            <option value='Quero um Parceiro para Franquia'>Quero um Parceiro para Franquia</option>
            <option value='Quero Abrir um Negócio'>Quero Abrir um Negócio</option>
        </select>
        <textarea name='mensagem' cols='30' rows='8' aria-required='true' style='width: 95% !important;height: 200px;padding: 1em;margin: .25em 0;'></textarea>
        <input type='submit' value='Enviar' onclick='alert(' teste')'='' style='width: 100% !important;background: #E7A120;height: 3em;border: 0;color: #fff;font-weight: 999;margin: 1em 0;'>

    </form>
</div>
</div>
  $embedmap";
?>
<?php // }else{header("location:https://senae.com.br");} ?>
  <script>var page_title = "Contato";</script>