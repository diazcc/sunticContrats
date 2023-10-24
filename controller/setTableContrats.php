<?php
$conex = new Database();
$data = $conex->getDataContrat();
$contratData = "";
foreach ($data as $contrat) {
    $contratData .= "
                <tr>
                    <td>" . $contrat['codCont'] . "</td>
                    <td>" . $contrat['phoneCust'] . "</td>
                    <td>" . $contrat['codCust'] . "</td>
                    <td>" . $contrat['dateActCont'] . "</td>
                    <td>" . $contrat['stateCont'] . "</td>
                    <td>" . $contrat['priceCont'] . "</td>
                </tr>
                ";
}
