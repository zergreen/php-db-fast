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


CREATE TABLE Employees
    (EmployeeID int NOT NULL AUTO_INCREMENT,
    fname VARCHAR(255),
    lname VARCHAR(255),
    PRIMARY KEY (EmployeeID)
 );

INSERT INTO Employees
VALUES (null,"Usukami", "Naruto");
