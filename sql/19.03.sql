
--Найти продавцов, которые обслуживали заказы 10/06/1990(edited)
SELECT
    `salespeople`.`SNAME`
FROM
    `salespeople`,
    `orders`
WHERE
    orders.SNUM = salespeople.SNUM AND orders.ODATE = '1990-06-10'

--Подсчитать количество продавцов, которые работали с клиентами с самым низким рейтингом
    SELECT
  COUNT(DISTINCT `salespeople`.SNAME) as 'Количество продавцов'
FROM
    `salespeople`,
    `customers`
WHERE
    `salespeople`.SNUM = `customers`.SNUM AND `customers`.RATING =(
    SELECT
        MIN(`customers`.RATING)
    FROM
        `customers`
)

-- Найти города, в которых больше двух клиентов.
SELECT
    `customers`.`CITY`
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
    `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `customers`.`CITY`
HAVING
    COUNT(`customers`.`CNUM`) > 2

--Найти города, сумма заказов из которых больше, чем средняя сумма заказов за 10/03/1990

SELECT DISTINCT
    customers.CITY as 'Города'
FROM
    `customers`,
    orders
WHERE
    customers.CNUM = orders.CNUM AND orders.AMT >(
    SELECT
        AVG(orders.AMT)
    FROM
        orders
    WHERE
        odate = '1990-03-10'
)