<?php
require ("model.php");
require ("view.php");


if ($_GET["type"]== "formation") {

    $type = getFormations ();
    render_all($type);
}

elseif ($_GET["nom"]) {

    $nom = getEtudiantsByNom ($_GET["nom"]);
    render_all($nom);

}

else {


    $etudiants = getEtudiants();
    render_all($etudiants);
    $formations = getFormations();
    render_all($formations);




    
}
?>