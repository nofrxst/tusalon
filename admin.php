<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/adm/styadm.css">
    <title>Admin</title>
</head>
<body>
    
        <div id="sidemenu" class="menu-collapsed">
            <div id="header">
                <div id="tittle"><span>Tu Salón ADM</span></div>
                <div id="menu-btn">
                    <div class="btn-hamburguer"></div>
                    <div class="btn-hamburguer"></div>
                    <div class="btn-hamburguer"></div>
                </div>
            </div>

            <!--PRofile-->
            <div  id="profile">
                <div id="photo"><img src="./img/usuario/harold.jpg" alt=""></div>
                <div id="name"><span>Harold Alcantara</span></div>
            </div>

            <!--Item-->

            <div id="menu-items">
                <div class="item">
                    <a href="./vistas/ventas.php" >
                        <div class="icon"><img src="./img/iconos/bolsa-de-la-compra.png" alt=""></div>
                        <div class="tittle"><span>Ventas</span></div>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <div class="icon"><img src="./img/iconos/inventario.png" alt=""></div>
                        <div class="tittle"><span>Inventario</span></div>
                    </a>
                </div>
            </div>

           
        </div>
     <main>
        
     </main>
   
   
   
   
   
   <script>
        const btn= document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');

        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
    
</body>
</html>