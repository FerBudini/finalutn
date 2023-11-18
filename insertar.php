<?php
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'mibase');

    $Nombre= $_post["Nombre"];
    $Apellido= $_post["Apellido"];
    $FechaDeNacimiento= $_post["FechaDeNacimiento"];
    $Email= $_post["Email"];
    $Password= $_post["Password"];

    $sql="INSERT INTO usuarios (Nombre, Apellido, FechaDeNacimiento, Email, Password); 
    VALUES('$Nombre, $Apellido, $FechaDeNacimiento, $Email, $Password')";
    mysqli_query($con,$sql);