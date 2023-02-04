create database comercio;
use comercio;

Create table produtos (
    proId Int NOT NULL AUTO_INCREMENT,
    proNome Varchar(200),
    proQtd Int,
    proValor Decimal(10,2),
    Primary Key (proId)
);