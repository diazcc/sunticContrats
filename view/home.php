<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/home.css">
    <script src="../src/js/app.js"></script>
    <title>Contratos</title>
</head>
<?php
require_once "../model/conex.php";
require_once "../controller/setTableCustomers.php";
require_once "../controller/setTableContrats.php";

?>

<body>
    <h1 class="title">
        Contratos Suntic
    </h1>
    <main>
        <table border="1" class="tableCustomer">
            <thead>
                <tr>
                    <th>Nombre de cliente</th>
                    <th>Código de cliente</th>
                    <th>Número de celular</th>
                    <th>Ciudad</th>
                    <th>Tipo de identidad</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $customerData;
                ?>
            </tbody>
        </table>
        <table border='1'>
            <thead>
                <tr>
                    <th>Código de contrato</th>
                    <th>Número de cliente</th>
                    <th>Código del cliente</th>
                    <th>Fecha de activación</th>
                    <th>Estado</th>
                    <th>Costo del plan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $contratData;
                ?>
            </tbody>
        </table>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="addContrat" value="Crear contrato">
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formContrat">
            <label for="">Codigo de contrato</label>
            <input name="codCont" type="number" value="<?php echo mt_rand(10000, 99999); ?>" >
            <label for="selectCustomer">Seleccionar cliente</label>
            <select id="selectCustomer" name="nameCust">
                <option value="">seleccionar</option>
                <?php
                echo $nombreCliente;
                ?>
            </select>
            <label for="fecha">Fecha de activacion:</label>
            <input type="date" id="fecha" name="dateActCont">
            <label for="fecha">Valor: </label>
            <input type="number" placeholder="$00" name="priceCont">
            <label for="stateContrat">Estado:</label>
            <select  name="stateCont" id="selectStateContrat">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
            <input type="submit" value="Crear" name="sendContrat">
        </form>
        <?php
            require_once "../controller/newContrat.php";
        ?>
    </main>
</body>

</html>