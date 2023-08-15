
<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
    include '../../includes/conn.php';

    $id = $_GET['id'];

    /*
    $del = mysqli_query($conn, "DELETE FROM consultores WHERE ID = '$id'");
    //verifica a url no bd pelo id

    if($del){
        header("location:https://senae.com.br/scripts/contadores");
        exit;
    } else {
        echo "Erro ao deletar entrada.";
    }
    */


    /*
    $result = $conn->query("SELECT url FROM contadores WHERE `id` = $id");
    if($result->num_rows != 0) {
        
    }
    */

    if($row = ($conn->query("SELECT * FROM contadores WHERE id = $id"))->fetch_assoc()){
        
        function delTree($dir) {
            $files = array_diff(scandir($dir), array('.','..'));
            foreach ($files as $file) {
                (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
            }
            return rmdir($dir);
        }
        
        $url = $row['url'];
        $dir = '/home/u446695767/domains/senae.org/public_html/'.$url;
        echo $dir;
        delTree($dir);


        $del = mysqli_query($conn, "DELETE FROM contadores WHERE ID = '$id'");
        if($del){
            header("location:https://senae.com.br/scripts/contadores/");
        } else {
            echo "Erro ao deletar entrada.";
        }
                
    }else{
        echo 'erro';
    }



    //mysqli_close($conn);

?>
<?php }else{header("location:https://senae.com.br");} ?>