SELECT 
    *
FROM
    User
INTO OUTFILE 'C:/xampp/htdocs/TrioFlabby/sql/user.csv' 
FIELDS ENCLOSED BY '"' 
TERMINATED BY ',' 
ESCAPED BY '"' 
LINES TERMINATED BY '\r\n';

SELECT 
    *
FROM
    PreferredLocation 
INTO OUTFILE 'C:/xampp/htdocs/TrioFlabby/sql/preferredlocation.csv' 
FIELDS ENCLOSED BY '"' 
TERMINATED BY ',' 
ESCAPED BY '"' 
LINES TERMINATED BY '\r\n';

SELECT 
    *
FROM
    OrderHistory 
INTO OUTFILE 'C:/xampp/htdocs/TrioFlabby/sql/orderhistory.csv' 
FIELDS ENCLOSED BY '"' 
TERMINATED BY ',' 
ESCAPED BY '"' 
LINES TERMINATED BY '\r\n';
