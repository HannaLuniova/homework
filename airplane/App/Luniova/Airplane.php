<?php

namespace Luniova;

class Airplane
{
    /** Кол-во пассажиров на борту
     * @var int
     */
    protected int $passenger;

    /** Расход топлива
     * @var float
     */
    protected float $fuelConsumption;

    /**
     * @param int $seat Кол-во посадочных мест
     * @param float $fuelReserved Запас топлива
     */

    public function __construct(
        protected int $seat = 50,
        protected float $fuelReserved = 200)
    {
    }

    /**
     * @param int $seat
     * @return Airplane
     */
    public function setSeat(int $seat): static
    {
        $this->seat = $seat;
        return $this;
    }

    /**
     * @param int $passenger
     * @return Airplane
     */
    public function setPassenger(int $passenger): static
    {
        $this->passenger = $passenger;
        return $this;
    }

    /**
     * @param float $fuelReserved
     * @return Airplane
     */
    public function setFuelReserved(float $fuelReserved): static
    {
        $this->fuelReserved = $fuelReserved;
        return $this;
    }

    /**
     * @param float $fuelConsumption
     * @return Airplane
     */
    public function setFuelConsumption(float $fuelConsumption): static
    {
        $this->fuelConsumption = $fuelConsumption;
        return $this;
    }

    /** Расстояние, которое может пролететь самолёт
     * @return float
     */
    public function flyDistance(): float
    {
        return $this->fuelReserved / $this->fuelConsumption * 100;
    }

    /** Кол-во свободных мест
     * @return int
     */
    public function freeSeat(): int
    {
        return $this->seat - $this->passenger;
    }
}