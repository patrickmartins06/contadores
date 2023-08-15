<?php

include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

include '/home/u446695767/domains/senae.com.br/public_html/scripts/contadores/includes/materias/materias.css';

// Define a consulta SQL para selecionar as postagens
$sql_231d = "SELECT post_title, post_content, post_name FROM wp_posts WHERE post_type = 'materias' AND post_status = 'publish'  LIMIT 0, 8";

// Executa a consulta e armazena o resultado em uma variável
$result_231d = $conn->query($sql_231d);

// Recupera a URL atual
$url_atual = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


if( $_SERVER['HTTP_HOST'] == "senae.com.br" ){
    
    $url_atual = "https://senae.com.br/sebrae/";
}

// Verifica se houve algum resultado
if ($result_231d->num_rows > 0) {

    // Output data of each row
?>
    <div id="materias_container">

        <h2 id="materias_title">
            <span>Consulte Matérias para Melhorar sua Empresa</span>
        </h2>

        <div id="materias">
            <?php
            while ($row = $result_231d->fetch_assoc()) {

                $html = $row["post_content"];

                // Remover todas as tags HTML
                $text = strip_tags($html);

                $image['src'] = "";

                // Expressão regular para encontrar a primeira ocorrência de uma tag <img> e pegar o valor do atributo src
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $html, $image); // Armazenar o valor do atributo src na variável $src$src = $image['src'];

                $src = $image['src'];

            ?>
                <div class="materia">
                    <div class="materia_prev">
                        <img alt="$row['post_title']" src="<?= $src ?>">
                    </div>
                    <h3 class="materia_title" style="color: #f5f5f5 !important;font-weight: 111;"><?= $row["post_title"] ?></h3>
                    <a target="_blank" href="<?= $url_atual . 'materias/?' . $row["post_name"] ?>"></a>
                </div>
            <?php
            }
            ?>
        </div>

        <div id="bottom_button">
            <a target="_blank" href="<?= $url_atual . 'materias/?page=2' ?>">Próximo »</a>
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
