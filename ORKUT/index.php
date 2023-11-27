<?php
$hostname="localhost";
$username="id21418317_lucasfumache";
$password="Lucas22020*";
$dbname="id21418317_projetolucas";
$usertable="td_usuario";

 $con=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('unable to connect to dabase! please try again later.',history.go(-1)/script>/html>");
 
mysqli_select_db($con,$dbname);

#check If record exists

$query = "SELECT * FROM $usertable";

$result = mysqli_query($con,$query);
if($result){
    while($row = mysqli_fetch_array($result)){
        $id = $row["id"];
        $email = $row["email"];
        $celular = $row["celular"];
        $senha = $row["senha"];
        echo "id: ".$id."<br/>";
        echo "email: ".$email."<br/>";
        echo "celular: ".$celular."<br/>";
        echo "senha: ".$senha."<br/>";
    }
}
$login="email@email.com.br";

$query = 'SELECT * FROM '.$usertable.' where email="'.$login.'" or celular="'.$login.'"';

$result = mysqli_query($con,$query);

print_r($result);

?>