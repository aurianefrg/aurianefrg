<?php
require ("model.php");
require ("view.php");

$res = getEtudiants(); 

render_all($res);

?>