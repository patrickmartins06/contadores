<?php

// Recupera a URL atual
$url_atual = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($url_atual, '?') !== false && strstr($url_atual, '=', false) === false) {
    //echo "matéria conteúdo";

    include "/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/materias/materias_conteudo_display.php";


} else {
    //echo "display das materias";


?>


<?php include '/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/materias/materias.css'; ?>

    <script>
        document.querySelector("title").textContent = "Matérias"
    </script>

    <?php

if( $url_contador == 0 ){
    $url_contador = "https://senae.com.br/sebrae";
}else{
    $url_contador = "https://senae.org/$url_contador";
}

    ///#### Define a quantidade de matérias por página ( 0  = mostrar todas )
    $limite_por_pagina = 0;

    $limit = "LIMIT 0, $limite_por_pagina";
    $page_ = 1;
    $anterior = "";
    $proximo = "";

    if (isset($_GET['page'])) {
        $page_ = $_GET['page'];
        $page_n = $page_ + 1;
        $page = '?page=' . $page_n;

        if ($page_ > 1) {
            $page_b_n = $page_ - 1;
            $page_b = '?page=' . $page_b_n;
            $anterior = "<a  href='$url_contador/materias/$page_b'>« Anterior</a>";

            $page_sub = (($page_ - 1) * $limite_por_pagina);
            $page_sub_ = $limite_por_pagina + 2;

            $limit = "LIMIT $page_sub, $page_sub_";
        }
    } else {
        $page = '?page=2';
        $limit = "LIMIT 0, $limite_por_pagina";
    }

    if( $limite_por_pagina == 0 ){
        $limit = "";
    }

    include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

    // Define a consulta SQL para selecionar as postagens
    $sql = "SELECT post_title, post_content, post_name FROM wp_posts WHERE post_type = 'materias' AND post_status = 'publish' $limit";

    // Executa a consulta e armazena o resultado em uma variável
    $result = $conn->query($sql);

    if ($result->num_rows < ($limite_por_pagina + 1)) {
        $proximo = "";
    } else {
        $proximo = "<a  href='$url_contador/materias/$page'>Próximo »</a>";
    }

    if ($page_ == 1) {
        $proximo = "<a  href='$url_contador/materias/$page'>Próximo »</a>";
    }


    if( $_SERVER['HTTP_HOST'] == "senae.com.br" ){
        $url_sem_page2 = str_replace("?page=$page_", '', $url_atual);
    }else{
        $url_sem_page2 = str_replace("page=$page_", '', $url_atual);
    }



    // Verifica se houve algum resultado
    if ($result->num_rows > 0) {


        // Output data of each row
    ?>
        <div id="materias_container">

            <h2 id="materias_title">
                <span>Consulte Matérias para Melhorar sua Empresa</span>
            </h2>

            <div id="materias">
                <?php
                $count = 0;
                $total = $limite_por_pagina;
                while ($row = $result->fetch_assoc()) {

                    $html = $row["post_content"];

                    // Remover todas as tags HTML
                    $text = strip_tags($html);

                    $image['src'] = "";

                    // Expressão regular para encontrar a primeira ocorrência de uma tag <img> e pegar o valor do atributo src
                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $html, $image); // Armazenar o valor do atributo src na variável $src$src = $image['src'];

                    $src = $image['src'];

                    if( $limite_por_pagina != 0 ){
                        $count++;
                    }
                    if ($count <= $limite_por_pagina) {

                ?>
                        <div class="materia">
                            <div class="materia_prev">
                                <img alt="$row['post_title']" src="<?= $src ?>">
                            </div>
                            <h3 class="materia_title"><?= $row["post_title"] ?></h3>
                            <a target="_blank" href="<?= $url_sem_page2 ."?". $row["post_name"] ?>"></a>
                        </div>

                <?php
                    }
                }
                ?>
            </div>

            <div id="bottom_button">
                <?php 
                
                if( $limite_por_pagina != 0){
                    echo $anterior;
                    echo $proximo;
                }

                ?>
            </div>

        </div>
        <?php
        ?>

        <script>
            window.addEventListener("load", function() {
                const images = document.querySelectorAll('img');
                images.forEach(img => img.setAttribute('loading', 'lazy'));

                // $(".materia").find('img:first').parent().attr("style", "display:block")
                // $('.materia_prev h1, .materia_prev h2, .materia_prev h3, .materia_prev h4, .materia_prev h5, .materia_prev p, .materia_prev hr, .materia_prev br, .materia_prev figcaption, .materia_prev .is-type-video').remove();
            }, false);
        </script>

<?php
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a conexão com o banco de dados

}
