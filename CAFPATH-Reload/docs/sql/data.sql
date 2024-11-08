INSERT INTO Path (num, starting_point, end_point, est_arrival, starting_date, id_ruta) VALUES 
(1, 'Almacen Principal', 'Cliente 1', '2024-11-01', '2024-10-15', 1),
(2, 'Almacen Materia Prima', 'Cliente 2', '2024-11-03', '2024-10-16', 2),
(3, 'Almacen Producto Terminado', 'Cliente 3', '2024-11-05', '2024-10-17', 3),
(4, 'Almacen Refacciones', 'Cliente 4', '2024-11-02', '2024-10-18', 4),
(5, 'Almacen Empaque', 'Cliente 5', '2024-11-04', '2024-10-19', 5),
(6, 'Almacen Principal', 'Cliente 6', '2024-11-07', '2024-10-20', 6),
(7, 'Almacen Materia Prima', 'Cliente 7', '2024-11-09', '2024-10-21', 7),
(8, 'Almacen Producto Terminado', 'Cliente 8', '2024-11-11', '2024-10-22', 8),
(9, 'Almacen Refacciones', 'Cliente 9', '2024-11-13', '2024-10-23', 9),
(10, 'Almacen Empaque', 'Cliente 10', '2024-11-15', '2024-10-24', 10);

INSERT INTO Warehouse (code, name, street, colony, number) VALUES 
('WH001', 'Almacen Principal', 'Industria', 'Centro', '101'),
('WH002', 'Almacen Materia Prima', 'Produccion', 'Norte', '202'),
('WH003', 'Almacen Producto Terminado', 'Distribucion', 'Sur', '303'),
('WH004', 'Almacen Refacciones', 'Repuestos', 'Este', '404'),
('WH005', 'Almacen Empaque', 'Embalaje', 'Oeste', '505');

INSERT INTO Item (code, name, description) VALUES 
('IT001', 'Tornillo M4', 'Tornillo de acero inoxidable M4 de 10mm'),
('IT002', 'Arandela 12mm', 'Arandela plana para uso general de 12mm'),
('IT003', 'Tuerca hexa M5', 'Tuerca hexagonal para pernos M5'),
('IT004', 'Lubricante ind', 'Lubricante para maquinaria pesada'),
('IT005', 'Filtro de aire', 'Filtro de aire para compresor'),
('IT006', 'Cinta adhesiva', 'Cinta industrial de 50 metros'),
('IT007', 'Caja de cartón', 'Caja cartón reforzada de 30x30x30cm'),
('IT008', 'Empaqueburbuja', 'Empaque de burbuja '),
('IT009', 'Palet de madera', 'Palet de madera estándar'),
('IT010', 'Placa de acero', 'Placa de acero inoxidable de 1x2m'),
('IT011', 'Resorte', 'Resorte de acero de alta resistencia');

INSERT INTO Insurance (num, policyNumber, insurance_type, coverage) VALUES 
(1, 'POL001', 'Seguro de carga', 10000.00),
(2, 'POL002', 'Seguro de responsabilidad civil', 20000.00),
(3, 'POL003', 'Seguro contra accidentes', 15000.00),
(4, 'POL004', 'Seguro de robo', 12000.00),
(5, 'POL005', 'Seguro de mercancías perecederas', 18000.00),
(6, 'POL006', 'Seguro de daño por agua', 16000.00),
(7, 'POL007', 'Seguro de daño por fuego', 25000.00),
(8, 'POL008', 'Seguro de rotura', 11000.00),
(9, 'POL009', 'Seguro de extravío', 13000.00),
(10, 'POL010', 'Seguro de maquinaria', 21000.00);

INSERT INTO Role (code, name, privileges) VALUES 
('R001', 'Supervisor', 'Administración y control de almacén'),
('R002', 'Operador', 'Manejo de materiales y equipos'),
('R003', 'Transportista', 'Entrega y recolección de mercancías'),
('R004', 'Cliente', 'Consultar informacionn de pedidos realizados');

INSERT INTO Users (num, username, password, role) VALUES 
(1, 'jperez', 'emppass1', 'R001'),
(2, 'agonzalez', 'emppass2', 'R002'),
(3, 'cmartinez', 'emppass3', 'R003'),
(4, 'msanchez', 'emppass4', 'R001'),
(5, 'lhernandez', 'emppass5', 'R002'),
(6, 'prodriguez', 'emppass6', 'R003'),
(7, 'jlopz', 'emppass7', 'R001'),
(8, 'sramirez', 'emppass8', 'R002'),
(9, 'rfernandez', 'emppass9', 'R003'),
(10, 'gvazquez', 'emppass10', 'R001'),
(11, 'lalvarez', 'emppass11', 'R002'),
(12, 'ahernandez', 'clientpass1', 'R004'),
(13, 'lgomez', 'clientpass2', 'R004'),
(14, 'mfernandez', 'clientpass3', 'R004'),
(15, 'pmartinez', 'clientpass4', 'R004'),
(16, 'sruiz', 'clientpass5', 'R004'),
(17, 'csanchez', 'clientpass6', 'R004'),
(18, 'mlopez', 'clientpass7', 'R004'),
(19, 'fdiaz', 'clientpass8', 'R004'),
(20, 'ivega', 'clientpass9', 'R004'),
(21, 'jramos', 'clientpass10', 'R004'),
(22, 'rlopez', 'clientpass50', 'R004');


INSERT INTO Client (num, name, lastname, surname, company, phone, street, colony, number, usernum, username, password) VALUES 
(1, 'Alberto', 'Hernandez', 'Perez', 'Manufacturas MEX', '5512345678', 'Av. Central', 'Centro', '101', 1, 'ahernandez', 'clientpass1'),
(2, 'Lucia', 'Gomez', 'Ramirez', 'Industrias ALFA', '5587654321', 'Calle Norte', 'Industrial', '202', 2, 'lgomez', 'clientpass2'),
(3, 'Maria', 'Fernandez', 'Lopez', 'Maquilas del Sol', '5523344556', 'Avenida Sur', 'Zona Industrial', '303', 3, 'mfernandez', 'clientpass3'),
(4, 'Pedro', 'Martinez', 'Garcia', 'Textiles S.A.', '5543210987', 'Calzada Ori', 'Ciudad', '404', 4, 'pmartinez', 'clientpass4'),
(5, 'Sofia', 'Ruiz', 'Santos', 'ElectronicMX', '5598765432', 'Circuito Pon', 'Nueva Zona', '505', 5, 'sruiz', 'clientpass5'),
(6, 'Carlos', 'Sanchez', 'Rivera', 'Centro de reparto', '5510987654', 'Blvd Norte', 'Comercial', '606', 6, 'csanchez', 'clientpass6'),
(7, 'Martha', 'Lopez', 'Flores', 'Importaciones Ltd.', '5576543210', 'Pasaje Oriente', 'Residencial', '707', 7, 'mlopez', 'clientpass7'),
(8, 'Francisco', 'Diaz', 'Vega', 'International Log', '5591234567', 'Reforma', 'Urbano', '808', 8, 'fdiaz', 'clientpass8'),
(9, 'Isabel', 'Vega', 'Castro', 'Automotriz S.A.', '5545678910', 'Circuito Int', 'Centro', '909', 9, 'ivega', 'clientpass9'),
(10, 'Juan', 'Ramos', 'Mora', 'Servicios de Calidad', '5588766543', 'Via Rapida', 'Moderna', '1010', 10, 'jramos', 'clientpass10'),
(11, 'Raul', 'Lopez', 'Gonzalez', 'Distribuciones S.A.', '5522334455', 'Calzada Sur', 'Comercial', '303', 11, 'rlopez', 'clientpass50');

INSERT INTO Stock (code, name, amount, warehouse) VALUES 
('ST001', 'Tornillo M4', 15000, 'WH001'),
('ST002', 'Arandela12mm', 25000, 'WH002'),
('ST003', 'Tuerca hexa', 20000, 'WH003'),
('ST004', 'Aceite indus', 8000, 'WH004'),
('ST005', 'Filtro de aire', 12000, 'WH005'),
('ST006', 'Cinta adhesiva', 30000, 'WH001'),
('ST007', 'Caja de cartón', 5000, 'WH002'),
('ST008', 'Empaque burbuja', 4500, 'WH003'),
('ST009', 'Palet de madera', 1000, 'WH004'),
('ST010', 'Placa acero', 800, 'WH005'),
('ST011', 'Resorte', 750, 'WH005');

INSERT INTO Incident (num, description, date, user) VALUES 
(1, 'Retraso en la entrega por tráfico', '2024-10-10', 1),
(2, 'Producto dañado durante el envío', '2024-10-11', 2),
(3, 'Ruta modificada por obras viales', '2024-10-12', 3),
(4, 'Incidente de seguridad en la carga', '2024-10-13', 4),
(5, 'Fallo mecánico en el vehículo', '2024-10-14', 5),
(6, 'Error en la dirección de entrega', '2024-10-15', 6),
(7, 'Demora en aduana', '2024-10-16', 7),
(8, 'Problemas de documentación', '2024-10-17', 8),
(9, 'Producto mal embalado', '2024-10-18', 9),
(10, 'Cambio de última hora en el cliente', '2024-10-19', 10),
(11, 'Condiciones climáticas adversas', '2024-10-30', 11);

INSERT INTO Vehicle (number, license_plate, model, max_capacity, path, warehouse) VALUES 
(1, 'ABC123', 'Camión 5 Ton', 5000.00, 1, 'WH001'),
(2, 'DEF456', 'Camioneta 3 Ton', 3000.00, 2, 'WH002'),
(3, 'GHI789', 'Camión 10 Ton', 10000.00, 3, 'WH003'),
(4, 'JKL012', 'Furgoneta 1 Ton', 1000.00, 4, 'WH004'),
(5, 'MNO345', 'Camión 8 Ton', 8000.00, 5, 'WH005'),
(6, 'PQR678', 'Camioneta 2 Ton', 2000.00, 6, 'WH001'),
(7, 'STU901', 'Furgoneta 1.5 Ton', 1500.00, 7, 'WH002'),
(8, 'VWX234', 'Camión 12 Ton', 12000.00, 8, 'WH003'),
(9, 'YZA567', 'Camioneta 2.5 Ton', 2500.00, 9, 'WH004'),
(10, 'BCD890', 'Camión 7 Ton', 7000.00, 10, 'WH005'),
(11, 'XYZ999', 'Camioneta 1.8 Ton', 1800.00, 10, 'WH001'),
(12, 'EFG123', 'Camión 15 Ton', 15000.00, 1, 'WH002'),
(13, 'HIJ456', 'Camioneta 4 Ton', 4000.00, 1, 'WH003'),
(14, 'KLM789', 'Furgoneta 2 Ton', 2000.00, 3, 'WH004'),
(15, 'NOP012', 'Camión 18 Ton', 18000.00, 4, 'WH005'),
(16, 'QRS345', 'Camioneta 3.5 Ton', 3500.00, 5, 'WH001'),
(17, 'TUV678', 'Camión 20 Ton', 20000.00, 6, 'WH002'),
(18, 'WXY901', 'Furgoneta 2.5 Ton', 2500.00, 7, 'WH003'),
(19, 'ZAB234', 'Camión 9 Ton', 9000.00, 8, 'WH004'),
(20, 'CDE567', 'Camioneta 5 Ton', 5000.00, 9, 'WH005'),
(21, 'FGH890', 'Camión 22 Ton', 22000.00, 10, 'WH001'),
(22, 'IJK111', 'Camioneta 3 Ton', 3000.00, 1, 'WH002'),
(23, 'LMN222', 'Furgoneta 3 Ton', 3000.00, 2, 'WH003'),
(24, 'OPQ333', 'Camión 13 Ton', 13000.00, 3, 'WH004'),
(25, 'RST444', 'Camioneta 4.5 Ton', 4500.00, 4, 'WH005'),
(26, 'UVW555', 'Camión 25 Ton', 25000.00, 5, 'WH001'),
(27, 'XYZ666', 'Furgoneta 2.8 Ton', 2800.00, 6, 'WH002'),
(28, 'ABC777', 'Camión 6 Ton', 6000.00, 7, 'WH003'),
(29, 'DEF888', 'Camioneta 4 Ton', 4000.00, 8, 'WH004'),
(30, 'GHI999', 'Camión 30 Ton', 30000.00, 9, 'WH005'),
(31, 'JKL000', 'Furgoneta 3.2 Ton', 3200.00, 10, 'WH001');

INSERT INTO Employees (num, name, lastname, surname, role, usernum, username, password, vehicle, warehouse) VALUES 
(1, 'Jose', 'Perez', 'Garcia', 'R001', 1, 'jperez', 'emppass1', 1, 'WH001'),
(2, 'Ana', 'Gonzalez', 'Lopez', 'R002', 2, 'agonzalez', 'emppass2', 2, 'WH002'),
(3, 'Carlos', 'Martinez', 'Diaz', 'ROO3', 3, 'cmartinez', 'emppass3', 3, 'WH003'),
(4, 'Marta', 'Sanchez', 'Reyes', 'R001', 4, 'msanchez', 'emppass4', 4, 'WH004'),
(5, 'Luis', 'Hernandez', 'Rojas', 'R002', 5, 'lhernandez', 'emppass5', 5, 'WH005'),
(6, 'Paula', 'Rodriguez', 'Mendez', 'R003', 6, 'prodriguez', 'emppass6', 6, 'WH001'),
(7, 'Juan', 'Lopez', 'Castro', 'R001', 7, 'jlopz', 'emppass7', 7, 'WH002'),
(8, 'Sofia', 'Ramirez', 'Nunez', 'R002', 8, 'sramirez', 'emppass8', 8, 'WH003'),
(9, 'Rafael', 'Fernandez', 'Cruz', 'R003', 9, 'rfernandez', 'emppass9', 9, 'WH004'),
(10, 'Gloria', 'Vazquez', 'Torres', 'R001', 10, 'gvazquez', 'emppass10', 10, 'WH005'),
(11, 'Laura', 'Alvarez', 'Morales', 'R002', 11, 'lalvarez', 'emppass11', 11, 'WH001');

INSERT INTO Vehicle_Assignment (vehicle_number, employee_num, assigned_date) VALUES 
(1, 1, '2024-10-15'),
(2, 2, '2024-10-16'),
(3, 3, '2024-10-17'),
(4, 4, '2024-10-18'),
(5, 5, '2024-10-19'),
(6, 6, '2024-10-20'),
(7, 7, '2024-10-21'),
(8, 8, '2024-10-22'),
(9, 9, '2024-10-23'),
(10, 10, '2024-10-24'),
(11, 11, '2024-10-25');

INSERT INTO Shipment (num, date, delivery_date, client, incident, vehicle, path, insurance, warehouse) VALUES 
(1, '2024-10-05', '2024-10-08', 1, 1, 1, 1, 1, 'WH001'),
(2, '2024-10-06', '2024-10-09', 2, 2, 2, 2, 2, 'WH002'),
(3, '2024-10-07', '2024-10-10', 3, 3, 3, 3, 3, 'WH003'),
(4, '2024-10-08', '2024-10-11', 4, 4, 4, 4, 4, 'WH004'),
(5, '2024-10-09', '2024-10-12', 5, 5, 5, 5, 5, 'WH005'),
(6, '2024-10-10', '2024-10-13', 6, 6, 6, 6, 6, 'WH001'),
(7, '2024-10-11', '2024-10-14', 7, 7, 7, 7, 7, 'WH002'),
(8, '2024-10-12', '2024-10-15', 8, 8, 8, 8, 8, 'WH003'),
(9, '2024-10-13', '2024-10-16', 9, 9, 9, 9, 9, 'WH004'),
(10, '2024-10-14', '2024-10-17', 10, 10, 10, 10, 10, 'WH005'),
(11, '2024-11-01', '2024-11-05', 11, 11, 11, 1, 1, 'WH001'),
(12, '2024-10-15', '2024-10-18', 1, 1, 12, 2, 2, 'WH002'),
(13, '2024-10-16', '2024-10-19', 2, NULL, NULL, NULL, 3, 'WH003'),
(14, '2024-10-17', '2024-10-20', 3, NULL, NULL, NULL, 4, 'WH004'),
(15, '2024-10-18', '2024-10-21', 4, NULL, NULL, NULL, 5, 'WH005'),
(16, '2024-10-19', '2024-10-22', 5, NULL, NULL, NULL, 6, 'WH001'),
(17, '2024-10-20', '2024-10-23', 6, NULL, NULL, NULL, 7, 'WH002'),
(18, '2024-10-21', '2024-10-24', 7, NULL, NULL, NULL, 8, 'WH003'),
(19, '2024-10-22', '2024-10-25', 8, NULL, NULL, NULL, 9, 'WH004'),
(20, '2024-10-23', '2024-10-26', 9, NULL, NULL, NULL, 10, 'WH005'),
(21, '2024-10-24', '2024-10-27', 10, NULL, NULL, NULL, 1, 'WH001'),
(22, '2024-10-25', '2024-10-28', 11, NULL, NULL, NULL, 2, 'WH002'),
(23, '2024-10-26', '2024-10-29', 1, NULL, NULL, NULL, 3, 'WH003'),
(24, '2024-10-27', '2024-10-30', 2, NULL, NULL, NULL, 4, 'WH004'),
(25, '2024-10-28', '2024-10-31', 3, NULL, NULL, NULL, 5, 'WH005'),
(26, '2024-10-29', '2024-11-01', 4, NULL, NULL, NULL, 6, 'WH001'),
(27, '2024-10-30', '2024-11-02', 5, NULL, NULL, NULL, 7, 'WH002'),
(28, '2024-10-31', '2024-11-03', 6, NULL, NULL, NULL, 8, 'WH003'),
(29, '2024-11-01', '2024-11-04', 7, NULL, NULL, NULL, 9, 'WH004'),
(30, '2024-11-02', '2024-11-05', 8, NULL, NULL, NULL, 10, 'WH005'),
(31, '2024-11-03', '2024-11-06', 9, NULL, NULL, NULL, 1, 'WH001'),
(32, '2024-11-04', '2024-11-07', 10, NULL, NULL, NULL, 2, 'WH002'),
(33, '2024-11-05', '2024-11-08', 11, NULL, NULL, NULL, 3, 'WH003'),
(34, '2024-11-06', '2024-11-09', 1, NULL, NULL, NULL, 4, 'WH004'),
(35, '2024-11-07', '2024-11-10', 2, NULL, NULL, NULL, 5, 'WH005'),
(36, '2024-11-08', '2024-11-11', 3, NULL, NULL, NULL, 6, 'WH001'),
(37, '2024-11-09', '2024-11-12', 4, NULL, NULL, NULL, 7, 'WH002'),
(38, '2024-11-10', '2024-11-13', 5, NULL, NULL, NULL, 8, 'WH003'),
(39, '2024-11-11', '2024-11-14', 6, NULL, NULL, NULL, 9, 'WH004'),
(40, '2024-11-12', '2024-11-15', 7, NULL, NULL, NULL, 10, 'WH005'),
(41, '2024-11-13', '2024-11-16', 8, NULL, NULL, NULL, 1, 'WH001'),
(42, '2024-11-14', '2024-11-17', 9, NULL, NULL, NULL, 2, 'WH002'),
(43, '2024-11-15', '2024-11-18', 10, NULL, NULL, NULL, 3, 'WH003'),
(44, '2024-11-16', '2024-11-19', 11, NULL, NULL, NULL, 4, 'WH004'),
(45, '2024-11-17', '2024-11-20', 1, NULL, NULL, NULL, 5, 'WH005'),
(46, '2024-11-18', '2024-11-21', 2, NULL, NULL, NULL, 6, 'WH001'),
(47, '2024-11-19', '2024-11-22', 3, NULL, NULL, NULL, 7, 'WH002'),
(48, '2024-11-20', '2024-11-23', 4, NULL, NULL, NULL, 8, 'WH003'),
(49, '2024-11-21', '2024-11-24', 5, NULL, NULL, NULL, 9, 'WH004'),
(50, '2024-11-22', '2024-11-25', 6, NULL, NULL, NULL, 10, 'WH005'),
(51, '2024-11-23', '2024-11-26', 7, NULL, NULL, NULL, 1, 'WH001'),
(52, '2024-11-24', '2024-11-27', 8, NULL, NULL, NULL, 2, 'WH002'),
(53, '2024-11-25', '2024-11-28', 9, NULL, NULL, NULL, 3, 'WH003'),
(54, '2024-11-26', '2024-11-29', 10, NULL, NULL, NULL, 4, 'WH004'),
(55, '2024-11-27', '2024-11-30', 11, NULL, NULL, NULL, 5, 'WH005'),
(56, '2024-11-28', '2024-12-01', 1, NULL, NULL, NULL, 6, 'WH001'),
(57, '2024-11-29', '2024-12-02', 2, NULL, NULL, NULL, 7, 'WH002'),
(58, '2024-11-30', '2024-12-03', 3, NULL, NULL, NULL, 8, 'WH003'),
(59, '2024-12-01', '2024-12-04', 4, NULL, NULL, NULL, 9, 'WH004'),
(60, '2024-12-02', '2024-12-05', 5, NULL, NULL, NULL, 10, 'WH005');



INSERT INTO Record (date, location, status, client, shipment) VALUES

('2024-10-05', 'Almacén Principal', 'Pedido Realizado', 1, 1),
('2024-10-06', 'Almacén Principal', 'En Proceso', 1, 1),
('2024-10-07', 'Almacén M Prima', 'En Tránsito', 1, 1),
('2024-10-08', 'Almacén Principal', 'Entregado', 1, 1),

('2024-10-17', 'Almacén Principal', 'Pedido Realizado', 2, 2),
('2024-10-18', 'Almacén Principal', 'En Proceso', 2, 2),

('2024-10-06', 'Almacén M Prima', 'Pedido Realizado', 3, 3),
('2024-10-07', 'Almacén M Prima', 'En Proceso', 3, 3),
('2024-10-08', 'Almacén Producto', 'En Tránsito', 3, 3),
('2024-10-09', 'Almacén M Prima', 'Entregado', 3, 3),

('2024-10-18', 'Almacén Refacciones', 'Pedido Realizado', 4, 4),
('2024-10-19', 'Almacén Refacciones', 'En Proceso', 4, 4),

('2024-10-07', 'Almacén Producto', 'Pedido Realizado', 5, 5),
('2024-10-08', 'Almacén Producto', 'En Proceso', 5, 5),
('2024-10-09', 'Almacén Refacciones', 'En Tránsito', 5, 5),
('2024-10-10', 'Almacén Producto', 'Entregado', 5, 5),

('2024-10-19', 'Almacén Principal', 'Pedido Realizado', 6, 6),
('2024-10-20', 'Almacén Principal', 'En Proceso', 6, 6),

('2024-10-08', 'Almacén Refacciones', 'Pedido Realizado', 7, 7),
('2024-10-09', 'Almacén Refacciones', 'En Proceso', 7, 7),
('2024-10-10', 'Almacén Empaque', 'En Tránsito', 7, 7),
('2024-10-11', 'Almacén Refacciones', 'Entregado', 7, 7),

('2024-10-20', 'Almacén Producto', 'Pedido Realizado', 8, 8),
('2024-10-21', 'Almacén Producto', 'En Proceso', 8, 8),

('2024-10-09', 'Almacén Empaque', 'Pedido Realizado', 9, 9),
('2024-10-10', 'Almacén Empaque', 'En Proceso', 9, 9),
('2024-10-11', 'Almacén Principal', 'En Tránsito', 9, 9),
('2024-10-12', 'Almacén Empaque', 'Entregado', 9, 9),

('2024-10-21', 'Almacén Refacciones', 'Pedido Realizado', 10, 10),
('2024-10-22', 'Almacén Refacciones', 'En Proceso', 10, 10),

('2024-10-10', 'Almacén Principal', 'Pedido Realizado', 11, 11),
('2024-10-11', 'Almacén Principal', 'En Proceso', 11, 11),
('2024-10-12', 'Almacén M Prima', 'En Tránsito', 11, 11),
('2024-10-13', 'Almacén Principal', 'Entregado', 11, 11),

('2024-10-22', 'Almacén Refacciones', 'Pedido Realizado', 1, 12),
('2024-10-23', 'Almacén Refacciones', 'En Proceso', 1, 12),

('2024-10-11', 'Almacén M Prima', 'Pedido Realizado', 2, 13),
('2024-10-12', 'Almacén M Prima', 'En Proceso', 2, 13),
('2024-10-13', 'Almacén Producto', 'En Tránsito', 2, 13),
('2024-10-14', 'Almacén MateriaP', 'Entregado', 2, 13),

('2024-10-23', 'Almacén Principal', 'Pedido Realizado', 3, 14),
('2024-10-24', 'Almacén Principal', 'En Proceso', 3, 14),

('2024-10-12', 'Almacén Producto', 'Pedido Realizado', 4, 15),
('2024-10-13', 'Almacén Producto', 'En Proceso', 4, 15),
('2024-10-14', 'Almacén Refacciones', 'En Tránsito', 4, 15),
('2024-10-15', 'Almacén Producto', 'Entregado', 4, 15),

('2024-10-24', 'Almacén Principal', 'Pedido Realizado', 5, 16),
('2024-10-25', 'Almacén Principal', 'En Proceso', 5, 16),

('2024-10-13', 'Almacén Refacciones', 'Pedido Realizado', 6, 17),
('2024-10-14', 'Almacén Refacciones', 'En Proceso', 6, 17),
('2024-10-15', 'Almacén Empaque', 'En Tránsito', 6, 17),
('2024-10-16', 'Almacén Refacciones', 'Entregado', 6, 17),

('2024-10-27', 'Almacén M Prima', 'Pedido Realizado', 7, 18),
('2024-10-28', 'Almacén M Prima', 'En Proceso', 7, 18),

('2024-10-14', 'Almacén Empaque', 'Pedido Realizado', 8, 19),
('2024-10-15', 'Almacén Empaque', 'En Proceso', 8, 19),
('2024-10-16', 'Almacén Principal', 'En Tránsito', 8, 19),
('2024-10-17', 'Almacén Empaque', 'Entregado', 8, 19),

('2024-10-26', 'Almacén Refacciones', 'Pedido Realizado', 9, 20),
('2024-10-27', 'Almacén Refacciones', 'En Proceso', 9, 20),

('2024-11-01', 'Almacén Principal', 'Pedido Realizado', 10, 21),
('2024-11-02', 'Almacén Principal', 'En Proceso', 10, 21),
('2024-11-03', 'Almacén M Prima', 'En Tránsito', 10, 21),
('2024-11-04', 'Almacén Principal', 'Entregado', 10, 21),

('2024-11-13', 'Almacén Refacciones', 'Pedido Realizado', 11, 22),
('2024-11-14', 'Almacén Refacciones', 'En Proceso', 11, 22),

('2024-10-23', 'Almacén Principal', 'Pedido Realizado', 1, 23),
('2024-10-24', 'Almacén Principal', 'Pedido Realizado', 2, 24),
('2024-10-25', 'Almacén Principal', 'Pedido Realizado', 3, 25),
('2024-10-26', 'Almacén Principal', 'Pedido Realizado', 4, 26),
('2024-10-27', 'Almacén Principal', 'Pedido Realizado', 5, 27),
('2024-10-28', 'Almacén Principal', 'Pedido Realizado', 6, 28),
('2024-10-29', 'Almacén Principal', 'Pedido Realizado', 7, 29),
('2024-10-30', 'Almacén Principal', 'Pedido Realizado', 8, 30),
('2024-10-31', 'Almacén Principal', 'Pedido Realizado', 9, 31),
('2024-11-01', 'Almacén Principal', 'Pedido Realizado', 10, 32),
('2024-11-02', 'Almacén Principal', 'Pedido Realizado', 11, 33),
('2024-11-03', 'Almacén Principal', 'Pedido Realizado', 1, 34),
('2024-11-04', 'Almacén Principal', 'Pedido Realizado', 2, 35),
('2024-11-05', 'Almacén Principal', 'Pedido Realizado', 3, 36),
('2024-11-06', 'Almacén Principal', 'Pedido Realizado', 4, 37),
('2024-11-07', 'Almacén Principal', 'Pedido Realizado', 5, 38),
('2024-11-08', 'Almacén Principal', 'Pedido Realizado', 6, 39),
('2024-11-09', 'Almacén Principal', 'Pedido Realizado', 7, 40),
('2024-11-10', 'Almacén Principal', 'Pedido Realizado', 8, 41),
('2024-11-11', 'Almacén Principal', 'Pedido Realizado', 9, 42),
('2024-11-12', 'Almacén Principal', 'Pedido Realizado', 10, 43),
('2024-11-13', 'Almacén Principal', 'Pedido Realizado', 11, 44),
('2024-11-14', 'Almacén Principal', 'Pedido Realizado', 1, 45),
('2024-11-15', 'Almacén Principal', 'Pedido Realizado', 2, 46),
('2024-11-16', 'Almacén Principal', 'Pedido Realizado', 3, 47),
('2024-11-17', 'Almacén Principal', 'Pedido Realizado', 4, 48),
('2024-11-18', 'Almacén Principal', 'Pedido Realizado', 5, 49),
('2024-11-19', 'Almacén Principal', 'Pedido Realizado', 6, 50),
('2024-11-20', 'Almacén Principal', 'Pedido Realizado', 7, 51),
('2024-11-21', 'Almacén Principal', 'Pedido Realizado', 8, 52),
('2024-11-22', 'Almacén Principal', 'Pedido Realizado', 9, 53),
('2024-11-23', 'Almacén Principal', 'Pedido Realizado', 10, 54),
('2024-11-24', 'Almacén Principal', 'Pedido Realizado', 11, 55),
('2024-11-25', 'Almacén Principal', 'Pedido Realizado', 1, 56),
('2024-11-26', 'Almacén Principal', 'Pedido Realizado', 2, 57),
('2024-11-27', 'Almacén Principal', 'Pedido Realizado', 3, 58),
('2024-11-28', 'Almacén Principal', 'Pedido Realizado', 4, 59),
('2024-11-29', 'Almacén Principal', 'Pedido Realizado', 5, 60);

INSERT INTO Assamble (employees, shipment) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

INSERT INTO Package (shipment, item) VALUES
(1, 'IT001'),
(1, 'IT002'),
(1, 'IT003'),
(1, 'IT004'),
(1, 'IT005'),
(2, 'IT002'),
(2, 'IT003'),
(2, 'IT006'),
(2, 'IT007'),
(2, 'IT008'),
(3, 'IT004'),
(3, 'IT005'),
(3, 'IT009'),
(3, 'IT010'),
(3, 'IT011'),
(4, 'IT001'),
(4, 'IT003'),
(4, 'IT005'),
(4, 'IT006'),
(4, 'IT007'),
(5, 'IT002'),
(5, 'IT004'),
(5, 'IT006'),
(5, 'IT009'),
(5, 'IT011'),
(6, 'IT001'),
(6, 'IT005'),
(6, 'IT006'),
(6, 'IT008'),
(6, 'IT010'),
(7, 'IT003'),
(7, 'IT005'),
(7, 'IT007'),
(7, 'IT008'),
(7, 'IT011'),
(8, 'IT002'),
(8, 'IT004'),
(8, 'IT007'),
(8, 'IT009'),
(8, 'IT010'),
(9, 'IT001'),
(9, 'IT003'),
(9, 'IT004'),
(9, 'IT006'),
(9, 'IT011'),
(10, 'IT002'),
(10, 'IT003'),
(10, 'IT004'),
(10, 'IT006'),
(10, 'IT009'),
(11, 'IT001'),
(11, 'IT005'),
(11, 'IT006'),
(11, 'IT007'),
(11, 'IT010'),
(12, 'IT002'),
(12, 'IT004'),
(12, 'IT005'),
(12, 'IT008'),
(12, 'IT011'),
(13, 'IT001'),
(13, 'IT003'),
(13, 'IT007'),
(13, 'IT009'),
(13, 'IT010'),
(14, 'IT002'),
(14, 'IT005'),
(14, 'IT006'),
(14, 'IT008'),
(14, 'IT011'),
(15, 'IT001'),
(15, 'IT004'),
(15, 'IT007'),
(15, 'IT009'),
(15, 'IT010'),
(16, 'IT002'),
(16, 'IT003'),
(16, 'IT004'),
(16, 'IT006'),
(16, 'IT011'),
(17, 'IT001'),
(17, 'IT003'),
(17, 'IT005'),
(17, 'IT008'),
(17, 'IT010'),
(18, 'IT002'),
(18, 'IT006'),
(18, 'IT007'),
(18, 'IT009'),
(18, 'IT011'),
(19, 'IT001'),
(19, 'IT004'),
(19, 'IT005'),
(19, 'IT008'),
(19, 'IT010'),
(20, 'IT003'),
(20, 'IT004'),
(20, 'IT006'),
(20, 'IT009'),
(20, 'IT011'),
(21, 'IT001'),
(21, 'IT004'),
(21, 'IT005'),
(21, 'IT007'),
(21, 'IT010'),
(22, 'IT002'),
(22, 'IT003'),
(22, 'IT006'),
(22, 'IT008'),
(22, 'IT011'),
(23, 'IT001'),
(23, 'IT003'),
(23, 'IT004'),
(23, 'IT009'),
(23, 'IT010'),
(24, 'IT002'),
(24, 'IT005'),
(24, 'IT006'),
(24, 'IT008'),
(24, 'IT009'),
(25, 'IT001'),
(25, 'IT002'),
(25, 'IT005'),
(25, 'IT007'),
(25, 'IT011'),
(26, 'IT003'),
(26, 'IT004'),
(26, 'IT008'),
(26, 'IT009'),
(26, 'IT010'),
(27, 'IT001'),
(27, 'IT004'),
(27, 'IT006'),
(27, 'IT008'),
(27, 'IT011'),
(28, 'IT002'),
(28, 'IT005'),
(28, 'IT007'),
(28, 'IT009'),
(28, 'IT010'),
(29, 'IT003'),
(29, 'IT005'),
(29, 'IT006'),
(29, 'IT008'),
(29, 'IT011'),
(30, 'IT001'),
(30, 'IT002'),
(30, 'IT004'),
(30, 'IT007'),
(30, 'IT010'),
(31, 'IT003'),
(31, 'IT006'),
(31, 'IT007'),
(31, 'IT009'),
(31, 'IT011'),
(32, 'IT002'),
(32, 'IT004'),
(32, 'IT005'),
(32, 'IT008'),
(32, 'IT010'),
(33, 'IT001'),
(33, 'IT003'),
(33, 'IT006'),
(33, 'IT007'),
(33, 'IT009'),
(34, 'IT002'),
(34, 'IT005'),
(34, 'IT008'),
(34, 'IT010'),
(34, 'IT011'),
(35, 'IT001'),
(35, 'IT004'),
(35, 'IT006'),
(35, 'IT009'),
(35, 'IT010'),
(36, 'IT002'),
(36, 'IT003'),
(36, 'IT007'),
(36, 'IT008'),
(36, 'IT011'),
(37, 'IT001'),
(37, 'IT005'),
(37, 'IT006'),
(37, 'IT009'),
(37, 'IT010'),
(38, 'IT003'),
(38, 'IT004'),
(38, 'IT005'),
(38, 'IT008'),
(38, 'IT011'),
(39, 'IT002'),
(39, 'IT003'),
(39, 'IT006'),
(39, 'IT009'),
(39, 'IT010'),
(40, 'IT001'),
(40, 'IT004'),
(40, 'IT007'),
(40, 'IT008'),
(40, 'IT011'),
(41, 'IT002'),
(41, 'IT003'),
(41, 'IT005'),
(41, 'IT009'),
(41, 'IT010'),
(42, 'IT001'),
(42, 'IT004'),
(42, 'IT006'),
(42, 'IT008'),
(42, 'IT011'),
(43, 'IT002'),
(43, 'IT005'),
(43, 'IT007'),
(43, 'IT009'),
(43, 'IT010'),
(44, 'IT003'),
(44, 'IT004'),
(44, 'IT006'),
(44, 'IT008'),
(44, 'IT011'),
(45, 'IT001'),
(45, 'IT003'),
(45, 'IT005'),
(45, 'IT007'),
(45, 'IT010'),
(46, 'IT002'),
(46, 'IT004'),
(46, 'IT006'),
(46, 'IT008'),
(46, 'IT011'),
(47, 'IT003'),
(47, 'IT005'),
(47, 'IT007'),
(47, 'IT009'),
(47, 'IT010'),
(48, 'IT001'),
(48, 'IT004'),
(48, 'IT006'),
(48, 'IT008'),
(48, 'IT011'),
(49, 'IT002'),
(49, 'IT003'),
(49, 'IT005'),
(49, 'IT009'),
(49, 'IT010'),
(50, 'IT001'),
(50, 'IT004'),
(50, 'IT006'),
(50, 'IT007'),
(50, 'IT011'),
(51, 'IT002'),
(51, 'IT003'),
(51, 'IT005'),
(51, 'IT008'),
(51, 'IT010'),
(52, 'IT001'),
(52, 'IT004'),
(52, 'IT006'),
(52, 'IT007'),
(52, 'IT009'),
(53, 'IT002'),
(53, 'IT005'),
(53, 'IT008'),
(53, 'IT010'),
(53, 'IT011'),
(54, 'IT001'),
(54, 'IT003'),
(54, 'IT006'),
(54, 'IT007'),
(54, 'IT010'),
(55, 'IT002'),
(55, 'IT004'),
(55, 'IT005'),
(55, 'IT008'),
(55, 'IT009'),
(56, 'IT001'),
(56, 'IT003'),
(56, 'IT006'),
(56, 'IT007'),
(56, 'IT011'),
(57, 'IT002'),
(57, 'IT004'),
(57, 'IT005'),
(57, 'IT008'),
(57, 'IT009'),
(58, 'IT001'),
(58, 'IT003'),
(58, 'IT006'),
(58, 'IT010'),
(58, 'IT011'),
(59, 'IT002'),
(59, 'IT004'),
(59, 'IT007'),
(59, 'IT008'),
(59, 'IT010'),
(60, 'IT001'),
(60, 'IT005'),
(60, 'IT006'),
(60, 'IT009'),
(60, 'IT011');

INSERT INTO Inventory (stock, item) VALUES
('ST001', 'IT001'),
('ST002', 'IT002'),
('ST003', 'IT003'),
('ST004', 'IT004'),
('ST005', 'IT005'),
('ST006', 'IT006'),
('ST007', 'IT007'),
('ST008', 'IT008'),
('ST009', 'IT009'),
('ST010', 'IT010');

INSERT INTO RutaDetalles (ruta, id_vehiculo, fecha, orden_entrega, id_paquete, direccion_destino, id_ruta)
VALUES 
    (1, 1, '2024-10-29', 1, 1, 'Av. Siempre Viva 742, Springfield', 1),
    (2, 2, '2024-10-30', 2, 2, 'Calle Falsa 123, Springfield', 2),
    (3, 1, '2024-10-29', 3, 3, 'Calle de los Olmos 5, Springfield', 1),
    (4, 3, '2024-10-31', 4, 4, 'Paseo de la Reforma 100, Ciudad de México', 3),
    (5, 2, '2024-10-30', 5, 5, 'Avenida de la Libertad 45, Ciudad de México', 2),
    (6, 3, '2024-10-31', 6, 6, 'Boulevard de los sueños 77, Ciudad de México', 3);

