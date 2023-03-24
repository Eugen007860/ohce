<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use DateTime;
use Deg540\PHPTestingBoilerplate\Oche;
use Deg540\PHPTestingBoilerplate\Test\Mock\Date;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnBuenasNoches()
    {
        $nombre = "Eugen";
        $date = new Date("noche");
        $oche = new Oche($nombre, $date);

        $result = $oche->salute();

        $this->assertEquals($result, "¡Buenas noches " . $nombre);
    }

    /**
     * @test
     */
    public function shouldReturnBuenosDias()
    {
        $nombre = "Eugen";
        $date = new Date("mañana");
        $oche = new Oche($nombre, $date);

        $result = $oche->salute();

        $this->assertEquals($result, "¡Buenas dias " . $nombre);
    }

    /**
     * @test
     */
    public function shouldReturnBuenasTardes()
    {
        $nombre = "Eugen";
        $date = new Date("tarde");
        $oche = new Oche($nombre, $date);

        $result = $oche->salute();

        $this->assertEquals($result, "¡Buenas tardes " . $nombre);
    }

    /**
     * @test
     */
    public function shouldReturnPalindromo()
    {
        $palabra = "reconocer";
        $oche = new Oche("Eugen", new DateTime());

        $result = $oche->isPalindroma($palabra);

        $this->assertEquals($result, "¡Bonita palabra!");
    }

    /**
     * @test
     */
    public function shouldReturnReverseString()
    {
        $palabra = "stop";
        $oche = new Oche("Eugen", new DateTime());

        $result = $oche->isPalindroma($palabra);

        $this->assertEquals($result, "pots");
    }
}
