<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/home.css">
    <title>Contratos</title>
</head>
<?php
require_once "../model/conex.php";
require_once "../controller/setTableCustomers.php";
require_once "../controller/setTableContrats.php";

?>

<body>
    <section class="viewNewContrat--hidde" id="viewNewContrat">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formContrat" class="formNewContrat">
            <h1 class="titleForm">Crear contrato</h1>
            <label for="">Codigo de contrato</label>
            <input name="codCont" type="number" value="<?php echo mt_rand(10000, 99999); ?>" class="inputTextNumber">
            <label for="selectCustomer">Seleccionar cliente</label>
            <select id="selectCustomer" name="nameCust" class="inputTextNumber">
                <option value="">seleccionar</option>
                <?php
                echo $nombreCliente;
                ?>
            </select>
            <label for="fecha">Fecha de activacion:</label>
            <input type="date" id="fecha" name="dateActCont" class="inputTextNumber">
            <label for="fecha">Valor: </label>
            <input type="number" placeholder="$00" name="priceCont" class="inputTextNumber">
            <label for="stateContrat">Estado:</label>
            <select name="stateCont" id="selectStateContrat" class="inputTextNumber">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
            <input type="submit" value="Crear" name="sendContrat" class="buttonSend">
        </form>
        <?php
        require_once "../controller/newContrat.php";
        ?>
    </section>
    <nav class="contentNavbar--hidde" id="contentNavbar">
        <ul class="navbar">
            <li class="titleNavbar">Menu</li>
            <li class="optionNavbar" id="newContrat">Crear contrato</li>
            <li class="optionNavbar">Crear contrato</li>
            <li class="optionNavbar">Crear contrato</li>
        </ul>
    </nav>
    <main class="wrapper">
        <header class="header">
            <h1 class="title">
                Contratos Suntic
            </h1>
            <a class="menu" id="menu">Menu</a>
        </header>
        <section class="contentCustomer">
            <h2 class="titleCustomer">Lista de clientes</h2>
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
        </section>

        <section class="contentContrat">
            <h3 class="titleContrat">Lista de contratos</h3>
            <table border='1' class="tableContrat tableCustomer">
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
        </section>
    </main>
</body>
<script src="../src/js/app.js"></script>
</html>