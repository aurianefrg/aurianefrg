<?php

$server = "localhost";
$user = "root";
$password = "root";
$dbname = "cours_sql";
$conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

function getEtudiantsFormation(){

    $res = $conn -> query ("SELECT * FROM etudiant INNER JOIN formation ON etudiant, formation_id = formation_id");

    return $res;
}

function getEtudiantsByNow($nom){

}

function getEtudiants(){
    global $conn;
    $res = $conn -> query ("SELECT * FROM etudiant");
    return $res;


}

function getFormations(){
    global $conn;
    $res = $conn -> query ("SELECT * FROM formation");
    return $res;
    

}

function getEtudiantsByNom($nom){
    global $conn;
    $res = $conn -> prepare ("SELECT * FROM etudiant WHERE nom = :nom");
    $res->bindParam(":nom", $nom);
    $res-> execute (); 
    return $res;

}



//echo "connexion tip top";

//$res = $conn -> query ("SELECT * FROM etudiant");

//while ($row = $res -> fetch()){
//    print_r($row); 
//    echo "<br/>";
//}
//$res = $conn -> query("SELECT * FROM etudiant");
//print_r( $res->fetch());

?>