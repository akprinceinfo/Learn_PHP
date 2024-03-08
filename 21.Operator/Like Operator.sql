-- Like Operator

SELECT * FROM 'tableName' WHERE name LIKE 'a%';

--  last
SELECT * FROM 'tableName' WHERE name LIKE '%s';

-- secend
SELECT * FROM 'tableName' WHERE name LIKE '_s%';

-- third number
SELECT * FROM 'tableName' WHERE name LIKE '__s%';

SELECT * FROM 'tableName' WHERE name NOT LIKE '_s%';