<?php

namespace Deg540\PHPTestingBoilerplate;

class Oche
{
    private string $nombre;
    private \DateTime $date;

    public function __construct(string $nombre, $date)
    {
        // set the default timezone to use.
        $this->nombre = $nombre;
        $this->date = $date;
    }
    public function salute(): string
    {
        $hour = $this->date->format("H");
        if ($hour >= 6 and $hour < 12) {
            return "¡Buenas dias " . $this->nombre;
        } elseif ($hour >= 12 and $hour < 20) {
            return "¡Buenas tardes " . $this->nombre;
        }
        return "¡Buenas noches " . $this->nombre;
    }

    public function isPalindroma($palabra)
    {
        if (strrev($palabra) === $palabra) {
            return "¡Bonita palabra!";
        }
        return strrev($palabra);
    }
}
