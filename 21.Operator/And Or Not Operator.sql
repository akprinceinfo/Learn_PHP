-- And Or Not Operator

SELECT FROM 'tableName' WHERE roll = > 20 AND address = 'Dhaka';

--and / OR

SELECT name As 'name'
FROM 'tableName'
WHERE
    class = 10
    Or class = 11;

--NOT
SELECT * FROM 'tableName' WHERE NOT roll = 20;