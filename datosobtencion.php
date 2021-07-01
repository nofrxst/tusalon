<?php 
 $conexion =  mysqli_connect("localhost","root", "", "tusalonbd");
 $registro_bd = "select * from productos"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <TABLE>
        <?php $resultado = mysqli_query($conexion,$registro_bd);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        
        <div class="int">
        <form action="">
        <p><?php echo $row["Nom_prod"]?></p>
        <p><?php echo $row["Precio_compra_prod"]?></p>
       <p><?php echo $row["Fch_compra_prod"]?></td></p>
        </form>
        </div>
        <?php } ?>

    
    </TABLE>
            <style>
                .int{
                    display:flex;
                    gap:5px;
                    height:40px;
                }
                p{
                    background: gray;
                    border : 1px solid black;
                    width:200px;
                    text-align:center;
                    
                }
            </style>
</div>
</body>
</html>