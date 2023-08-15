<div class="links1" style="position:fixed;width:100%">
    <a target="_blank" href="https://senae.com.br/wp-admin/">Voltar ao Painel Wordpress</a>
    <a target="_blank" href="https://senae.com.br/scripts/contadores/">Listar - Contadores</a>
    <a target="_blank" href="https://senae.com.br/scripts/contadores/adicionar/">Adicionar - Contador</a>

    <span class="contadores_api" onclick="contadores_api()" style="background: #0ccc;padding: 6px 10px;border-radius: 8px;border: 2px solid #fff7;cursor: pointer;">Reload Contadores <i class="fas fa-redo"></i></span>

</div>

<script>
    var current_url_option = document.querySelector('a[href="' + window.location.href + '"]')

    current_url_option.style.pointerEvents = "none";

    current_url_option.style.background = "#fff5";
</script>