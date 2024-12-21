<?php

class AgeCategory
{
    /**
     * Método que devuelve la categoría de edad
     *
     * @param int $age Edad proporcionada por el usuario
     * @return string Categoría de edad
     */
    public function getAgeCategory($age)
    {
        // Verificar que la edad sea numérica
        if (!is_numeric($age) || $age < 0) {
            return "Invalid age";
        }

        // Determinar la categoría de edad
        if ($age <= 5) {
            return "Baby";
        } elseif ($age <= 12) {
            return "Child";
        } elseif ($age <= 17) {
            return "Teen";
        } elseif ($age <= 64) {
            return "Adult";
        } else {
            return "Senior";
        }
    }
}
?>
