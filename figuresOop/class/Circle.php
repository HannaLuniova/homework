<?php

class Circle extends Figures
{
    protected float $r;

    public function __construct($r)
    {
        $this->setR($r);
    }

    /**
     * @param float $r
     */
    public function setR(float $r): void
    {
        $this->r = $r;
    }

    /** S = π * r2 – Площадь круга через радиус
     * @return float
     */
    public function square(): float
    {
        return pi() * ($this->r ** 2);
    }

    /**S = 2*π*r Формула для вычисления периметра круга
     * @return float
     */
    public function perimeter(): float
    {
        return 2 * pi() * $this->r;
    }
}
