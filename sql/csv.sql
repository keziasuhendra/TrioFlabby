SELECT 
    *
FROM
    UserBasic 
INTO OUTFILE 'C:/xampp/htdocs/TrioFlabby/sql/userbasic.csv' 
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
