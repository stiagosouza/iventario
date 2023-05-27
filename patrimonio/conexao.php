<?php
 $servidor = "localhost"; //127.0.0.1
 $usuario = "root";
 $senha = "";
 $banco = "patrimonio";

 //realizando conexãocom BD

 $conn = mysqli_connect ($servidor, $usuario, $senha, $banco) or die(mysqli_connect_error());
