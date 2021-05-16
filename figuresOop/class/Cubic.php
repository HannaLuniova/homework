<?php

class Cubic extends Figures
{
    /** Площадь куба — это сумма площади всех его сторон.
     * @return float
     */
    public function square(): float
    {
        return pow($this->a, 2) * 6;
    }

    /** Периметр куба - это совокупность длин всех ребер куба. a – длина ребра куба.
     * @return float
     */
    public function perimeter(): float
    {
        return 12 * $this->a;
    }
}