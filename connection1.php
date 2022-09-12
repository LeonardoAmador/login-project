<?php
   
   $localhost = "localhost";
   $user = "root";
   $password = "";
   $banco = "store";

   //Estrutural
   $conecta = mysqli_connect($localhost, $user, $password, $banco);

   $sql = mysqli_query($conecta, "SELECT * FROM users");

   echo mysqli_num_rows($sql);
?>