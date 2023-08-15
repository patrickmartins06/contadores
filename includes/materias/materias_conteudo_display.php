<style>
    .materia {
        max-width: 1100px;
        white-space: 100%;
        margin: auto;
        padding: 50px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
    }

    .materia {
        max-width: 1100px;
        white-space: 100%;
        margin: auto;
    }

    .materia figure.size-full {
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .materia figure img {
        border-radius: 15px
    }


    .materia {
        color: #30455c !important;
        font-size: 19px;
    }

    .materia * {
        font-family: Helvetica, Arial, sans-serif !important;
    }

    .materia p {
        line-height: 26px !important;
        margin-top: 3px !important;
    }

    @media only screen and (max-width: 600px) {

        .materia,
        .materia_prev {
            width: calc(100% - 20px) !important;
            max-width: 100% !important;
            padding: 10px
        }

        .materia figure img {
            width: 100%;
        }

        .materia figure {
            margin: 0
        }
    }
</style>



<?php

// Recupera a URL atual
$url_atual = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

preg_match('/\?(.*)/', $url_atual, $matches);
$url_materia = $matches[1];

$anterior = "";
$proximo = "";

include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';

// Define a consulta SQL para selecionar as postagens
$sql = "SELECT post_title, post_content FROM wp_posts WHERE post_name = '$url_materia'";

// Executa a consulta e armazena o resultado em uma variável
$result = $conn->query($sql);

// Verifica se houve algum resultado
if ($result->num_rows > 0) {

    echo "<script>console.log('rows: $result->num_rows')</script>";

    // Output data of each row
?>
    <div id="materias_container">

        <div id="materias">
            <?php
            while ($row = $result->fetch_assoc()) {

            ?>
                <div class="materia">
                    <div class="materia_prev">
                        <?= $row["post_content"] ?>
                    </div>


                </div>

            <?php
            }
            ?>
        </div>

        <div id="bottom_button">
            <?= $anterior ?>
            <?= $proximo ?>
        </div>

    </div>
    <?php
    ?>

    <script>
        window.addEventListener("load", function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => img.setAttribute('loading', 'lazy'));
        }, false);
    </script>

<?php
} else {
    echo "Nenhum resultado encontrado.";
}

?>