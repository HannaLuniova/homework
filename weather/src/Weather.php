<?php

namespace Luniova;

class Weather
{
    protected string $cityName;
    protected int $temperature;

    /**
     * @param string $cityName
     * @return $this
     */
    public function setCityName(string $cityName): static
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemperature(): int
    {
        $this->temperature = file_get_contents("https://www.gismeteo.by/");
        preg_match_all("/Витебск<\/a><\/td>.*?\n.*?<td>(.*?)<\/td>/uim", $this->temperature, $match);
        return  $match[1][0];
    }




}