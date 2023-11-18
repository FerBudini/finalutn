<?php
    $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'mibase');

    $lista= mysqli_query($con,"SELECT * FROM usuarios");
    ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <a href="nuevo.php">Nuevo</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>FechaDeNacimiento</th>
                <th>Email</th>
                <th>Password</th>
                
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_array($lista)){ ?>
                <tr>
                    <td><?php echo $fila["Id"]?></td>
                    <td><?php echo $fila["Nombre"]?></td>
                    <td><?php echo $fila["Apellido"]?></td>
                    <td><?php echo $fila["FechaDeNacimiento"]?></td>
                    <td><?php echo $fila["Email"]?></td>
                    <td><?php echo $fila["Password"]?></td>
                </tr>
                <?php }?>
        </tbody>
    </table>
</body>
</html>


