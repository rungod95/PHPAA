<?php

class ForEachExample
{
    /**
     * Convierte una cadena separada por comas en una lista de elementos.
     *
     * @param string $string Cadena de texto con elementos separados por comas.
     * @return array Lista de elementos.
     */
    public function convertToList($input)
    {
         return array_map('trim', explode(',', $input));
    }
}
?>

