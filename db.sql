/*cd.. cd.. cd xampp/mysql/bin
    mysql -u root -p
    enter

*/
CREATE DATABASE suntic; 
USE suntic;
CREATE TABLE customer (
    codCust INT(15) PRIMARY KEY,
    typeIdCust VARCHAR(30) NOT NULL,
    phoneCust INT(15) NOT NULL,
    emailCust VARCHAR(100) UNIQUE,
    nameCust VARCHAR(15) NOT NULL,
    cityCust VARCHAR(15) NOT NULL
);
CREATE TABLE contrat (
    codCont INT(15) PRIMARY KEY,
    codCust INT(15) NOT NULL,
    phoneCust INT(15) NOT NULL,
    dateActCont DATE NOT NULL,
    priceCont INT(15) NOT NULL,
    stateCont VARCHAR(30) NOT NULL,
    FOREIGN KEY (codCust) REFERENCES customer(codCust)
);

INSERT INTO customer (codCust, typeIdCust, phoneCust, emailCust, nameCust, cityCust)
VALUES (9512700, 'Cedula', 3156785678, 'cahuza@hotmail.com', 'Carlos Zapata', 'Cali');

INSERT INTO customer (codCust, typeIdCust, phoneCust, emailCust, nameCust, cityCust)
VALUES (9713428, 'Cedula', 3204512231, 'fercho03@gmail.com', 'Luis Fernando Martinez', 'Palmira');

INSERT INTO customer (codCust, typeIdCust, phoneCust, emailCust, nameCust, cityCust)
VALUES (900056250, 'NIT', 6024567823, 'clientes@laeconomica.com', 'Cacharrería la Económica', 'Bogotá');