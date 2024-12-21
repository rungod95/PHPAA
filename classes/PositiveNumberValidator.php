<?php

class PositiveNumberValidator
{
    /**
     * Solicita al usuario un número positivo y valida la entrada.
     *
     * @param int $number El número introducido por el usuario.
     * @return string Mensaje indicando si es positivo o no.
     */
    public function validate($number)
    {
        if ($number > 0) {
            return "El número $number es positivo.";
        } else {
            return "El número $number no es positivo.";
        }
    }
}
?>
