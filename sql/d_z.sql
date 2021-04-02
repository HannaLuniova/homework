-- 1. Создать таблтцу через sql

CREATE TABLE ice_cream(
    id INTEGER,
    TYPE VARCHAR(50),
    trademark VARCHAR(50),
    weight INT,
    price INT
);

-- 2. Добавить атрибут и кортеж

INSERT INTO `ice_cream`(`Type`, `trademark`, `weight`, `price`)
VALUES("Пломбир", "Юкки", 75, 1.75);
INSERT INTO `ice_cream`(`Type`, `trademark`, `weight`, `price`)
VALUES("Сорбет", "Soletto", 60, 0.6);
INSERT INTO `ice_cream`(`Type`, `trademark`, `weight`, `price`)
VALUES("Фруктовый лёд", "Топ", 70, 1.5);
INSERT INTO `ice_cream`(`Type`, `trademark`, `weight`, `price`)
VALUES("Щербет", "7_копеек", 80, 2);
INSERT INTO `ice_cream`(`Type`, `trademark`, `weight`, `price`)
VALUES("Молочное и сливочное", "Лакомка", 100, 3);

-- 3. Удалить таблицу

DROP TABLE ice_cream

-- 4. создать через импорт
CREATE TABLE `ice_cream` (
  `id` int NOT NULL,
  `Type` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `trademark` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `ice_cream` (`id`, `Type`, `trademark`, `weight`, `price`) VALUES
(1, 'Пломбир', 'Юкки', 75, 1.75),
(2, 'Сорбет', 'Soletto', 60, 0.6),
(3, 'Фруктовый лёд', 'Топ', 70, 1.5),
(4, 'Щербет', '7_копеек', 80, 2),
(5, 'Молочное и сливочное', 'Лакомка', 100, 3);
ALTER TABLE `ice_cream`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `ice_cream`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

  -- 5. Поменять стоимость Soletto на 1 рубль и вес на 90гр
  UPDATE
    `ice_cream`
SET
    `weight` = 90,
    `price` = 1
WHERE
    `id`=2

    -- 6. увеличить цену на 10%

    UPDATE
    `ice_cream`
SET
    `price` = `price`*10/100+`price`


    -- 7. удалить запись 7_копеек

    DELETE
FROM
    `ice_cream`
WHERE
    `id` = 4

    -- 8. Найти по первой букве название мороженого "Лакомка"

    SELECT
    *
FROM
    `ice_cream`
WHERE
    `trademark` LIKE 'Л%'

    -- 9. Найти тип мороженого "Сорбет"
    SELECT
    *
FROM
    `ice_cream`
WHERE
    `Type` LIKE '%Сорбет'

        -- 10. Найти окончание "ое"

        SELECT
    *
FROM
    `ice_cream`
WHERE
    `Type` LIKE '%ое % %'

    -- 11. Найти id 8,1 при помощи IN
    SELECT
    *
FROM
    `ice_cream`
WHERE
    `id` IN(8, 1)

    -- 12. SUM,MIN, MAX,AVG,COUNT

SELECT
    SUM(`price`) AS 'Общая сумма всех записей',
    MAX(`price`) AS 'Максимальная цена',
    MIN(`price`) AS 'Минимальная цена',
    AVG(`price`) AS 'Средняя цена',
    COUNT(`price`) AS 'кол-во заполненных кортежей в поле `price` '
FROM
    `ice_cream`