<?php

class PyramidGenerator
{
    /**
     * Método que genera una pirámide de asteriscos.
     *
     * @param int $rows Número de filas
     * @return string Pirámide de asteriscos
     */

    public function generatePyramid($rows)
    {
        $pyramid = [];
        for ($i = 1; $i <= $rows; $i++) {
            $spaces = str_repeat(" ", $rows - $i);
            $stars = str_repeat("*", 2 * $i - 1);
            $pyramid[] = $spaces . $stars;
        }
        return $pyramid; // Esto debe devolver un array
    }

}
?>