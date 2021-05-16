<?php

/** Класс калькулятор
 * Class Calc
 */
class Calc
{
    /**
     * @var float переменная для вычеслений калькулятора
     */
    public float $a;

    /**
     * Calc constructor. Конструктор инициализирует переменные a
     * @param $a
     */
    public function __construct($a)
    {
        $this->a = $a;
    }

    /** Функция для вычисления квадратного корня
     * @return float
     */
    public function root(): float
    {
        return sqrt($this->a);
    }

    /** Функция для вычисления синуса
     * @return float
     */
    public function sinus(): float
    {
        return sin($this->a);
    }

    /** Функция для вычисления модуля числа
     * @return float
     */
    public function module(): float
    {
        return abs($this->a);
    }
}
