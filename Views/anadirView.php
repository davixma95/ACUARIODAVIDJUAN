<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                z-index: -1;
                background-image: url(img/peces.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            .formulario{
                display: flex;
                padding: 20px;
                border-radius: 10px;
            }
            .boton{
                margin-right: 50px;
                background: #020091;
                padding: 20px;
                font-size: 16px;
                font-weight: 700!important;
                color: white;
                box-shadow: 0 0 30px rgba(0,0,0,.568);
                transition: 0.5s ease-in;
            }
            .acceder:hover{
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Bienvenido a la página del <?= $name?> <?= $surname?></h1>
        <br>
            <legend><h2>Menu Principal</h2></legend>
            <form method="POST" action="">
                <input type="submit" name="btn_consultar" value="Consultar Base de Datos">
                <input type="submit" name="anadir" value="Añadir Producto">
                <input type="submit" name="btn_borrar" value="Borrar Producto">
                <input type="submit" name="btn_salir" value="Salir">
            </form>
    </body>
</html>
