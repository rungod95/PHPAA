<?php

class ImparesRango
{
    /**
     * Método que devuelve los números impares en un rango.
     *
     * @param int $start Número inicial
     * @param int $end Número final
     * @return array Números impares en el rango
     */
    public function getImpares($start, $end)
    {
        $impares = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0) {
                continue; // Saltar números pares
            }
            $impares[] = $i;
        }

        return $impares;
    }


}
?>