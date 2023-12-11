<?php
$hostname="localhost";
$username="id21418317_lucasfumache";
$password="Lucas22020*";
$dbname="id21418317_projetolucas";
$usertable="td_usuario";

 $con=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('unable to connect to dabase! please try again later.',history.go(-1)/script>/html>");
 
mysqli_select_db($con,$dbname);

$login=$_POST["login"];

$senha=$_POST["senha"];

$query = 'SELECT * FROM '.$usertable.' where email="'.$login.'" or celular="'.$login.'"';

$result = mysqli_query($con,$query);

$rowcount=mysqli_num_rows($result);

$userid=0;
    if($rowcount==0){
        $userid=0;
    } 
    else {
        if($result){
            $row = mysqli_fetch_array($result);
            if($senha!=$row["senha"]){
                $userid=0;
            }
            else{
                $userid=$row["id"];
            }
        }
    }
echo $userid;

?>