CREATE DATABASE IF NOT EXISTS cafpath;

USE cafpath;

CREATE TABLE IF NOT EXISTS Path (
    num INT PRIMARY KEY AUTO_INCREMENT, 
    starting_point VARCHAR(30) NOT NULL,
    end_point VARCHAR(30) NOT NULL,
    est_arrival DATE NOT NULL,
    starting_date DATE NOT NULL,
    id_ruta INT
);

CREATE TABLE IF NOT EXISTS Warehouse (
    code VARCHAR(6) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    street VARCHAR(20) NOT NULL,
    colony VARCHAR(20) NOT NULL,
    number VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS Item (
    code VARCHAR(6) PRIMARY KEY,
    name VARCHAR(15) NOT NULL,
    description VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS Insurance (
    num INT PRIMARY KEY AUTO_INCREMENT,
    policyNumber VARCHAR(20) NOT NULL,
    insurance_type VARCHAR(50),
    coverage DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS Role (
    code VARCHAR(6) PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    privileges VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Users (
    num INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    role VARCHAR(6) NOT NULL,
    FOREIGN KEY (role) REFERENCES Role(code)
);

CREATE TABLE IF NOT EXISTS Client (
    num INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    surname VARCHAR(20),
    company VARCHAR(20),
    phone VARCHAR(15),
    street VARCHAR(15),
    colony VARCHAR(15),
    number VARCHAR(15),
    usernum INT NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    FOREIGN KEY (usernum) REFERENCES Users(num)
);

CREATE TABLE IF NOT EXISTS Stock (
    code VARCHAR(6) PRIMARY KEY,
    name VARCHAR(15),
    amount INT NOT NULL,
    warehouse VARCHAR(6),
    FOREIGN KEY (warehouse) REFERENCES Warehouse(code)
);

CREATE TABLE IF NOT EXISTS Incident (
    num INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(40) NOT NULL,
    date DATE NOT NULL,
    user INT NOT NULL,
    FOREIGN KEY (user) REFERENCES Users(num)
);

CREATE TABLE IF NOT EXISTS Vehicle (
    number INT PRIMARY KEY AUTO_INCREMENT,
    license_plate VARCHAR(15) NOT NULL,
    model VARCHAR(20) NOT NULL,
    max_capacity DECIMAL(10, 2) NOT NULL, 
    path INT,
    warehouse VARCHAR(6),
    FOREIGN KEY (path) REFERENCES Path(num),
    FOREIGN KEY (warehouse) REFERENCES Warehouse(code)
);

CREATE TABLE IF NOT EXISTS Employees (
    num INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    surname VARCHAR(20),
    role VARCHAR(15) NOT NULL,
    usernum INT NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    vehicle INT,
    warehouse VARCHAR(6) NOT NULL,
    FOREIGN KEY (usernum) REFERENCES Users(num),
    FOREIGN KEY (vehicle) REFERENCES Vehicle(number),
    FOREIGN KEY (warehouse) REFERENCES Warehouse(code)
);

CREATE TABLE IF NOT EXISTS Vehicle_Assignment (
    vehicle_number INT NOT NULL,
    employee_num INT NOT NULL,
    assigned_date DATE NOT NULL,
    PRIMARY KEY (vehicle_number, employee_num),
    FOREIGN KEY (vehicle_number) REFERENCES Vehicle(number),
    FOREIGN KEY (employee_num) REFERENCES Employees(num)
);

CREATE TABLE IF NOT EXISTS Shipment (
    num INT PRIMARY KEY AUTO_INCREMENT,
    date DATE NOT NULL,
    delivery_date DATE NOT NULL,
    client INT NOT NULL,
    incident INT,
    vehicle INT,
    path INT,
    insurance INT NOT NULL,
    warehouse VARCHAR(6),
    FOREIGN KEY (client) REFERENCES Client(num),
    FOREIGN KEY (incident) REFERENCES Incident(num),
    FOREIGN KEY (vehicle) REFERENCES Vehicle(number),
    FOREIGN KEY (path) REFERENCES Path(num),
    FOREIGN KEY (insurance) REFERENCES Insurance(num),
    FOREIGN KEY (warehouse) REFERENCES Warehouse(code)
);

CREATE TABLE IF NOT EXISTS Record (
    num INT PRIMARY KEY AUTO_INCREMENT,
    date DATE NOT NULL,
    location VARCHAR(20),
    status VARCHAR(20),
    client INT,
    shipment INT NOT NULL,
    FOREIGN KEY (client) REFERENCES Client(num),
    FOREIGN KEY (shipment) REFERENCES Shipment(num)
);

CREATE TABLE IF NOT EXISTS Assamble (
    employees INT NOT NULL,
    shipment INT NOT NULL,
    status TINYINT(1) DEFAULT 0,
    PRIMARY KEY (employees, shipment),
    FOREIGN KEY (employees) REFERENCES Employees(num),
    FOREIGN KEY (shipment) REFERENCES Shipment(num)
);

CREATE TABLE IF NOT EXISTS Package (
    shipment INT NOT NULL, 
    item VARCHAR(6) NOT NULL,
    PRIMARY KEY (shipment, item),
    FOREIGN KEY (shipment) REFERENCES Shipment(num),
    FOREIGN KEY (item) REFERENCES Item(code)
);

CREATE TABLE IF NOT EXISTS Inventory (
    stock VARCHAR(6) NOT NULL,
    item VARCHAR(6) NOT NULL,
    PRIMARY KEY (stock, item),
    FOREIGN KEY (item) REFERENCES Item(code),
    FOREIGN KEY (stock) REFERENCES Stock(code)
);

CREATE TABLE IF NOT EXISTS RutaDetalles (
    ruta INT PRIMARY KEY AUTO_INCREMENT,
    id_vehiculo INT NOT NULL,
    fecha DATE NOT NULL,
    orden_entrega INT NOT NULL,
    id_paquete INT NOT NULL,
    direccion_destino VARCHAR(255) NOT NULL,
    id_ruta INT,
    FOREIGN KEY (id_vehiculo) REFERENCES Vehicle(number),
    FOREIGN KEY (id_paquete) REFERENCES Shipment(num),
    FOREIGN KEY (id_ruta) REFERENCES Path (num)
);
