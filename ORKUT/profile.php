<?php
$hostname="localhost";
$username="id21418317_lucasfumache";
$password="Lucas22020*";
$dbname="id21418317_projetolucas";

// Conexão com o Banco de Dados
$con=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");

mysqli_select_db($con,$dbname);

$id = $_POST["userid"];

    $query = 'SELECT * FROM tb_perfil where id='.$id;
         
    $result = mysqli_query($con,$query);
               
    if($result) {
               
        $row = mysqli_fetch_array($result);
         
        $rowcount=mysqli_num_rows($result);
         
        if($rowcount==0) {
            echo '<script> alert("Perfil não encontrado!");</script>';
        }
        else {  
            $data = array(
            'foto' => $row['foto'],
            'nome' => $row['nome'],
            'dtnasci' => $row['dtnasci'],
            'endereco' => $row['endereço'],
            'genero' => $row['genero']
            
            );

            // Enviar os dados como JSON
            echo json_encode($data);            

        }
    }

?>