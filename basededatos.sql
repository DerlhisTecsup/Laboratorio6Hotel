create database crud;

use crud;

create table cliente(
	id int auto_increment primary key,
    	nombres varchar(100),
    	apellidos varchar(100),
    	DNI varchar(10),
    	Tipo_habitacion varchar(100),
    	Fecha_reserva date,
    	hora_ingreso datetime,
    	hora_salida datetime,
);

