<?php

class BreakExample
{
    /**
     * Encuentra el primer número divisible por 7 en un rango de números.
     *
     * @param int $start Número inicial del rango.
     * @param int $end Número final del rango.
     * @return int El primer número divisible por 7 o null si no se encuentra.
     */
    public function findFirstDivisibleBySeven($start, $end)
    {
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 7 === 0) {
                return $i;
            }
        }
        return null; // Si no se encuentra ningún número divisible por 7
    }
}