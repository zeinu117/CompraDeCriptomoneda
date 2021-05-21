<!doctype html>
<html lang="en">

<head>
    <title>Monedas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css" >
    </head>

<body class="fondo" >
    <div class=" fondo jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-justify text-center" style="color:white" >Compra de Criptomonedas</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post" onsubmit="return calcular()" id="frmFotos">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col">
                                <label for="cantidad ">Monto a Gastar </label>
                            </div>
                            <div class="col-md-4">
                            <input type="text" class="form-control" id="cantidad" name="cantidad" pattern="[0-9]+" placeholder="$ MXN" required>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <hr>
                        <h3 class="text-center">Tipos de CriptoMonedas</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="bitcoin" value="bitcoin">
                                <label for="bitcoin">Bitcoin (800,000 MXN)</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="etherium" value="etherium">
                                <label for="etherium">Etherium (70,000 MXN)</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="mana" value="mana">
                                <label for="mana">Mana (24 MXN)</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="xrp" value="xrp">
                                <label for="xrp">XRP (30 MXN)</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="bat" value="bat">
                                <label for="bat">BAT (21 MXN)</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary">Calcular</button>
                                <span class="btn btn-warning" onclick="limpiarFormulario()">Limpiar</span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="cantidadPagar" class="form-control" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="app.js"></script>
</body>

</html>