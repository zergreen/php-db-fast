INSERT INTO Customer(idcust, custname, sex, address, tel)
VALUES('9999', 'zzzzzz', 'M', 'address', '1234564');

-- $a1 = "Test"; $a2 = "TestName"; $a3 = "M"; $a4 = "TestAddress"; $a5 = "12345";
-- INSERT INTO Customer(idcust, custname, sex, address, tel)
-- VALUES('$a1','$a2','$a3','$a4','$a5');

DELETE FROM customer WHERE idcust='9999'; 

UPDATE Customer SET custname = "UpdateName", sex = "F" , address = "UpdateAddress", tel = "999999"
WHERE idcust="9999";