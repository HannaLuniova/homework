-- page 36
SELECT *
FROM orders
WHERE NOT ((`ODATE` = 10/03/1990 AND `SNUM` >1002) OR `AMT` > 2000.00)

-- page 41
SELECT
    *
FROM
    salespeople
WHERE
    (`COMM` BETWEEN .10 AND .12) AND NOT `COMM` IN(.10, .12)

-- page 53
    SELECT
    `SNUM`,
    `ODATE`,
    MAX(`AMT`)
FROM
    orders
GROUP BY
    `SNUM`,
    `ODATE`
HAVING
    MAX(`AMT`) > 3000.00;


 -- НЕТ ВРЕМЕНИ ДОЧИТАТЬ, НО Я ОБЯЗАТЕЛЬНО ДОЧИТАЮ