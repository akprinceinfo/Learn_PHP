-- Limit & Order

SELECT * FROM 'tableName' LIMIT 4;

SELECT * FROM 'tableName' WHERE address = "dhaka" LIMIT 4;

--Order

SELECT *
FROM "tableName"
WHERE
    address = 'dhaka'
ORDER BY name
LIMIT 4;

SELECT * FROM 'tableName' LIMIT 3, 5;