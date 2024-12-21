<?php

class DigitCounter
{
    /**
     * Cuenta cuántos dígitos tiene un número.
     *
     * @param int $number El número introducido.
     * @return int La cantidad de dígitos del número.
     */
    public function countDigits($number)
    {
        $count = 0;

        // Convertir número negativo a positivo
        $number = abs($number);

        do {
            $number = floor($number / 10); // Dividir por 10 para eliminar el último dígito
            $count++;
        } while ($number > 0);

        return $count;
    }
}
?>
