-- DATABASE data select

SELECT * FROM tsblename;

-- TABLE data select

SELECT id, name, class FROM tableName;

-- TABLE header name change

SELECT id AS 'ID', name AS 'Student Name' FROM 'tableName';

-- table data serch

SELECT * FROM 'tableName' WHERE class = 10;

SELECT * FROM 'tableName' WHERE roll >= 20;