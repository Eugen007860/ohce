<?php

namespace Deg540\PHPTestingBoilerplate\Test\Mock;

class Date extends \DateTime
{
    private int $hour;
    private string $horario;
    public function __construct(string $horario)
    {
        $this->horario = $horario;
    }

    public function format(string $format): int
    {
        if ($this->horario == "tarde") {
            return 13;
        } elseif ($this->horario == "mañana") {
            return 10;
        }
        return 22;
    }
}
