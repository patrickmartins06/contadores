<?php
require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
echo is_user_logged_in() ? '' : header("location:https://senae.com.br");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contadores - Listar Contadores</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://senae.com.br/scripts/includes/js/jquery-3.6.0.min.js"></script>
    <script src="https://senae.com.br/scripts/includes/js/kit-fontawesome-704ff50790.js"></script>

    <?php include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/functions_sc.php'; ?>
    <?php include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php'; ?>
</head>

<body>

    <?php include 'src/header.php'; ?>

    <h1 style="padding-top:2em">Listar Contadores</h1><br>
    <div>
        <table class="listagem">
            <tr>
                <!--<td>Ord.</td>-->
                <td>Data de Cadastro</td>
                <td>Nome</td>
                <td>Plano</td>
                <td>COD</td>
                <td>URL</td>
                <td>CEP</td>
                <td>UF</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Rua</td>
                <td>Número</td>
                <td>Complemento</td>
                <td>Ativo?</td>
                <td>Acessar</td>
                <td>✎</td>
                <td>✖</td>
            </tr>
            <?php
            $sql = 'SELECT * FROM contadores';
            $records = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($records)) {
            ?>
                <tr>
                    <!--<td>
                <?php //echo $data['ordem']; 
                ?>
                </td>-->
                    <td>
                        <?php echo $data['timestamp']; ?>
                    </td>
                    <td>
                        <?php echo $data['nome']; ?>
                    </td>
                    <td>
                        <?php echo $data['plano']; ?>
                    </td>
                    <td>
                        <?php echo $data['cod_contador']; ?>
                    </td>
                    <td>
                        <a target="_blank" rel="noopener noreferrer"><?php echo $data['url']; ?></a>
                    </td>
                    <td>
                        <?php echo $data['cep']; ?>
                    </td>
                    <td>
                        <?php echo $data['uf']; ?>
                    </td>
                    <td>
                        <?php echo $data['cidade']; ?>
                    </td>
                    <td>
                        <?php echo $data['bairro']; ?>
                    </td>
                    <td>
                        <?php echo $data['rua']; ?>
                    </td>
                    <td>
                        <?php echo $data['numero']; ?>
                    </td>
                    <td>
                        <?php echo $data['complemento']; ?>
                    </td>
                    <td>
                        <?php echo $data['ativo']; ?>
                    </td>
                    <td class="td_a">
                        <a target="_blank" href="https://senae.org/<?php echo $data['url']; ?>">Acessar</a>
                    </td>
                    <td class="td_a"><a class="edit" href="src/edit.php?id=<?php echo $data['id']; ?>">✎</a></td>
                    <!--<td><a class="del" href="del.php?id=<?php //echo $data['id']; 
                                                            ?>"></a></td>-->
                    <td class="td_a"><a onclick="deletePost(this, <?php echo $data['id']; ?>)">✖</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <!--MouseOverScroll-->
        <div id="scroll">
            <div id="scL"></div>
            <div id="scR"></div>
        </div>
    </div>



    <script>
        function deletePost(thi, id) {
            var ask = window.confirm("Confirma que deseja deletar" + thi.parentElement.parentElement.children[2].textContent.replace(/\s+/g, " ") + "?");
            if (ask) {

                $(location).prop('href', 'https://senae.com.br/scripts/contadores/src/del.php?id=' + id)

            }
        }
    </script>
    <script>
        //MouseOverScroll
        //Vars
        var fator = 50
        var time = 200
        //Left
        document.querySelector("#scL").addEventListener("mouseover", function(event) {
            document.querySelector('*').scrollLeft -= fator
            document.querySelector("#scL").style.pointerEvents = "none"
            setInterval(function() {
                document.querySelector("#scL").style.pointerEvents = "all"
            }, time)
        }, false)
        //Right
        document.querySelector("#scR").addEventListener("mouseover", function(event) {
            document.querySelector('*').scrollLeft += fator
            document.querySelector("#scR").style.pointerEvents = "none"
            setInterval(function() {
                document.querySelector("#scR").style.pointerEvents = "all"
            }, time)
        }, false);
    </script>
    <script>
        /*Click td = click a*/
        for (i = 0; i < document.querySelectorAll("td a").length; i++) {
            document.querySelectorAll("td a")[i].parentElement.onclick = function() {
                zzz(this)
            }
        }

        function zzz(t) {
            t.children[0].click()
        }
    </script>
</body>

<script>
    function contadores_api() {
        $.ajax({
            url: 'https://senae.com.br/scripts/consultores/api_get_contadores.php?time=<?= time() ?>'
        })
    }
    contadores_api()
</script>

</html>