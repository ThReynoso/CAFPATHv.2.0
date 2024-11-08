DELIMITER //

ALTER TABLE Employees ADD email VARCHAR(50);

CREATE TRIGGER generate_email_before_insert
BEFORE INSERT ON Employees
FOR EACH ROW
BEGIN
    DECLARE generated_email VARCHAR(50);
    SET generated_email = CONCAT(LOWER(SUBSTRING(NEW.name, 1, 2)), 
                                 LOWER(NEW.lastname), 
                                 LOWER(NEW.surname), 
                                 '@domain.com');
    SET NEW.email = generated_email;
END;
//

CREATE TRIGGER update_stock_after_package_insert
AFTER INSERT ON Package
FOR EACH ROW
BEGIN
    UPDATE Stock
    SET amount = amount - 1
    WHERE code = NEW.item;
END;
//

CREATE TRIGGER mark_vehicle_as_occupied
AFTER INSERT ON Shipment
FOR EACH ROW
BEGIN
    UPDATE Vehicle
    SET status = 'Ocupado'
    WHERE number = NEW.vehicle;
END;
//

CREATE TRIGGER mark_vehicle_as_available
AFTER UPDATE ON Shipment
FOR EACH ROW
BEGIN
    IF NEW.delivery_date IS NOT NULL THEN
        UPDATE Vehicle
        SET status = 'Disponible'
        WHERE number = NEW.vehicle;
    END IF;
END;
//

CREATE TRIGGER mark_shipment_as_delivered
AFTER INSERT ON Record
FOR EACH ROW
BEGIN
    IF NEW.status = 'Entregado' THEN
        UPDATE Shipment
        SET status = 'Entregado'
        WHERE num = NEW.shipment;
    END IF;
END;
//

DELIMITER ;