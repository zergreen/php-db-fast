-- สร้างก้อน database 
CREATE DATABASE my_db;

CREATE TABLE Customer
    (IDCust     VARCHAR(4) UNIQUE NOT NULL,
    CustName    VARCHAR(20),
    Sex     VARCHAR(1),
    Address VARCHAR(80),
    Tel     VARCHAR(10)
    );

CREATE TABLE Stock
    (IDProduct      VARCHAR(4) UNIQUE NOT NULL,
    ProductName     VARCHAR(20),
    PricePerUnit    FLOAT(8,2),
    StockQty        INTEGER
    );

CREATE TABLE Supply
    (IDCust     VARCHAR(4),
    IDProduct   VARCHAR(4),
    Qty     INTEGER,
    CONSTRAINT  PK_Supply   PRIMARY KEY(IDCust, IDProduct)
    );


-- สร้าง ตาราง 
CREATE TABLE Employees
    (EmployeeID int NOT NULL AUTO_INCREMENT,
    fname VARCHAR(255),
    lname VARCHAR(255),
    PRIMARY KEY (EmployeeID)
 );

-- แทรก ข้อมูล ลง ตาราง 
INSERT INTO Employees
VALUES (63050159,"Usukami", "Naruto");
INSERT INTO Employees
VALUES (null,"Monkey", "Luffy");
INSERT INTO Employees
VALUES (null,"Nutsu", "Dragunel");

-- เลือกข้อมูลจากตาราง
SELECT * FROM Employees;
