----Средний размер комиссионных в каждом городе, кроме Нью-Йорка

SELECT
    `CITY` AS 'Город',
    ROUND(AVG(`COMM`),2) AS 'Размер средних комиссионных'
FROM
    `salespeople`
GROUP BY
    `CITY`
HAVING NOT
    `CITY` = 'New York'

-- Вывести заказы всех клиентов из Рима и Берлина

SELECT
    *
FROM
    `orders`
WHERE
    `CNUM` IN(
    SELECT
        CNUM
    FROM
        `customers`
    WHERE
        `CITY` IN("Berlin", "Rome")