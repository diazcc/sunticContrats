<?php
class Database
{
    private $host = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $base_datos = "suntic";
    public $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_datos);
    }

    public function cerrarConexion()
    {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    public function getDataCustomer()
    {
        $query = "SELECT * FROM customer";
        $result = $this->conexion->query($query);

        if ($result->num_rows > 0) {
            $clientes = array();

            while ($row = $result->fetch_assoc()) {
                $clientes[] = $row;
            }

            return $clientes;
        } else {
            return array(); // Devuelve un arreglo vacío si no hay resultados
        }
    }

    public function getPhone($user)
    {
        $query = "SELECT phoneCust FROM customer WHERE nameCust = '$user'";

        $response = $this->conexion->query($query);
        $phone = $response->fetch_assoc();
        return $phone['phoneCust'];
    }
    public function getCodCust($user)
    {
        $query = "SELECT codCust FROM customer WHERE nameCust = '$user'";

        $response = $this->conexion->query($query);
        $codCust = $response->fetch_assoc();
        return $codCust['codCust'];
    }

    public function newContrat($codCont, $codCust, $phoneCust, $dateActCont, $priceCont, $stateCont)
    {
        $query = "INSERT INTO contrat (codCont, codCust, phoneCust, dateActCont, priceCont, stateCont) 
              VALUES ('$codCont', '$codCust', '$phoneCust', '$dateActCont', '$priceCont', '$stateCont')";
        $response = $this->conexion->query($query);
    }
    public function getDataContrat(){
        $contrats = array();
        $query =  "SELECT * FROM contrat";
        $response = $this->conexion->query($query);

        while ($row = $response->fetch_assoc()) {
            $contrats[] = $row;
        }
        return $contrats;
    }
}
