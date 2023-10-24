<?php
if (isset($_POST['sendContrat'])) {
    $codCont = $_POST['codCont'];
    $nameCust = $_POST['nameCust'];
    $codCust = $conex->getCodCust($nameCust);
    $phoneCust = $conex->getPhone($nameCust);
    $dateActCont = $_POST['dateActCont'];
    $priceCont = $_POST['priceCont'];
    $stateCont = $_POST['stateCont'];
    $conex->newContrat($codCont,$codCust,$phoneCust,$dateActCont,$priceCont,$stateCont);
}