<?php
// Parametres de connexion a la base de donnees
     $bd=array('sgbd'=>'mysql',
               'login'=>'root',
               'motdepasse'=>'',
               'host'=>'127.0.0.1',
               'nomBase'=>'animalerie');

     $dns = $bd['sgbd'].':host='.$bd['host'].';dbname='.$bd['nomBase'];

?>
