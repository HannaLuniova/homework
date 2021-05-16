<?php

abstract class Table
{
    protected float $width;
    protected float $height;
    protected float $length;
    protected float $priceWork = 20;
    protected float $priceSquare = 1;
    protected float $priceHeight = 1;

    public function __construct($width = 0, $length = 0, $height = 0)
    {
        $this->setWidthS($width);
        $this->setLengthS($length);
        $this->setHeightS($height);
    }

    /**
     * рассчитывает ширину стола  в дм
     * @param float $width
     */
    public function setWidthD(float $width): void
    {
        $this->width = $width;
    }

    /**
     * рассчитывает длину стола  в дм
     * @param float $length
     */
    public function setLengthD(float $length): void
    {
        $this->length = $length;
    }

    /**
     * рассчитывает высоту стола  в дм
     * @param float $height
     */
    public function setHeightD(float $height): void
    {
        $this->height = $height;
    }

    /**
     * рассчитывает ширину стола из см в дм
     * @param float $width
     */
    public function setWidthS(float $width): void
    {
        $this->width = $width / 10;
    }

    /**
     * рассчитывает длину стола из см в дм
     * @param float $length
     */
    public function setLengthS(float $length): void
    {
        $this->length = $length / 10;
    }

    /**
     * рассчитывает высоту ножек из см в дм
     * @param float $height
     */
    public function setHeightS(float $height): void
    {
        $this->height = $height / 10;
    }

    /**
     * рассчитывает ширину стола из м в дм
     * @param float $width
     */
    public function setWidthM(float $width): void
    {
        $this->width = $width * 10;
    }

    /**
     * рассчитывает длину стола из м в дм
     * @param float $length
     */
    public function setLengthM(float $length): void
    {
        $this->length = $length * 10;
    }

    /**
     * рассчитывает высоту ножек из м в дм
     * @param float $height
     */
    public function setHeightM(float $height): void
    {
        $this->height = $height * 10;
    }

    /**
     * рассчитывает ширину стола из дюймов в дм
     * @param float $width
     */
    public function setWidthI(float $width): void
    {
        $this->width = $width / 3.937;
    }

    /**
     * рассчитывает длину стола из дюймов в дм
     * @param float $length
     */
    public function setLengthI(float $length): void
    {
        $this->length = $length / 3.937;
    }

    /**
     * рассчитывает высоту ножек из дюймов в дм
     * @param float $height
     */
    public function setHeightI(float $height): void
    {
        $this->height = $height / 3.937;
    }

    abstract public function payment(): float;

}