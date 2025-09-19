<?php
   $dbHost = 'LocalHost';
   $dbusername = 'root';
   $dbPassword = '';
   $dbName ='formulario-alice';

   $conexao = new mysqli($dbHost, $dbusername, $dbPassword , $dbName);

   if($conexao-> connect_errno)
   {
    echo "Eroo";
   }
   else
    {

        echo "Conexão efetuada com sucesso";
   }
?>
