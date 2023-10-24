<?php
$conex = new Database();
$data = $conex->getDataCustomer();
$customerData = "";
$nombreCliente = "";
foreach ($data as $cliente) {
    $customerData .= "
                <tr>
                    <td>" . $cliente['nameCust'] . "</td>
                    <td>" . $cliente['codCust'] . "</td>
                    <td>" . $cliente['phoneCust'] . "</td>
                    <td>" . $cliente['cityCust'] . "</td>
                    <td>" . $cliente['typeIdCust'] . "</td>
                    <td>" . $cliente['emailCust'] . "</td>
                </tr>
                ";
    $nombreCliente .=  "
    <option>" .
        $cliente['nameCust']
        . "</option>
    ";
}
