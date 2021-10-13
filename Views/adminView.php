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
        <br>
        <fieldset>
            <legend><h2>Menu Principal</h2></legend>
            <form method="POST" action="">
                <div class="container">
                    <div class="row justify-content-center pt-5 mt-5 mr-1">
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 formulario">
                            <div class="form-group mx-sm-4 pb-2">
                                <input type="submit" class="btn btn-block boton" name="btn_consultar" value="Consultar Base de Datos">
                            </div>
                            <div class="form-group mx-sm-4 pb-2">
                                <input type="submit" class="btn btn-block boton" name="btn_anadir" value="Añadir Producto">
                            </div>
                            <div class="form-group mx-sm-4 pb-2">
                                <input type="submit" class="btn btn-block boton" name="btn_borrar" value="Borrar Producto">
                            </div>
                            <div class="form-group mx-sm-4 pb-2">
                                <input type="submit" class="btn btn-block boton" name="btn_salir" value="Salir">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </body>
</html>