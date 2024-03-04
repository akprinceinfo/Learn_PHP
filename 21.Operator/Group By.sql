-- Group By

SELECT city, COUNT(id) as Total FROM 'tableName' GROUP BY countery;

------------------------------------------------

SELECT countery, COUNT(id) as ID, SUM(salary)
FROM 'tableName'
GROUP BY
    countery;

----------------------------------------------

SELECT
    countery,
    COUNT(id) as ID,
    countery as countery,
    SUM(salary) as Total_salary,
    AVG(salary) as Avg_salary,
    MAX(salary) as Max_salary,
    MIN(salary) as Min_Salary
FROM 'tableName'
GROUP BY
    countery;

-----------------------------------------------