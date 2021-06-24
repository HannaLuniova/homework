<?php

namespace Luniova;

class Exchange
{
    protected float $BYN;
    protected float $usdExchange = 0.4004;
    protected float $eurExchange = 0.3291;
    protected float $rubExchange = 28.9073;
    protected float $uahExchange = 10.8488;
    protected float $plnExchange = 1.4746;

    protected float $usdExchangeV = 0.6004;
    protected float $eurExchangeV = 0.4291;
    protected float $rubExchangeV = 29.9073;
    protected float $uahExchangeV = 12.8488;
    protected float $plnExchangeV = 2.4746;

    public function __construct($BYN)
    {
        $this->setBYN($BYN);
    }

    /**
     * @param float $BYN
     * @return $this
     */
    public function setBYN(float $BYN): static
    {
        $this->BYN = $BYN;
        return $this;
    }

    public function toUSD(): float
    {
        if ($this->BYN * $this->usdExchange >= 1000) {
            return $this->BYN * $this->usdExchangeV;
        } else {
            return $this->BYN * $this->usdExchange;
        }
    }

    public function toEUR(): float
    {
        if ($this->BYN * $this->eurExchange >= 1000) {
            return $this->BYN * $this->eurExchangeV;
        } else {
            return $this->BYN * $this->eurExchange;
        }
    }

    public function toRUB(): float
    {
        if ($this->BYN * $this->rubExchange >= 100_000) {
            return $this->BYN * $this->rubExchangeV;
        } else {
            return $this->BYN * $this->rubExchange;
        }
    }

    public function toUAH(): float
    {
        if ($this->BYN * $this->uahExchange >= 1000) {
            return $this->BYN * $this->uahExchangeV;
        } else {
            return $this->BYN * $this->uahExchange;
        }
    }

    public function toPLN(): float
    {
        if ($this->BYN * $this->plnExchange >= 1000) {
            return $this->BYN * $this->plnExchangeV;
        } else {
            return $this->BYN * $this->plnExchange;
        }
    }

}