<?php

class GradeEvaluator
{
    /**
     * Método que evalúa la calificación de un estudiante.
     *
     * @param float $grade Calificación (0-10)
     * @return string Evaluación textual
     */
    public function getEvaluation($grade)
    {
        if (!is_numeric($grade) || $grade < 0 || $grade > 10) {
            return "Calificación inválida";
        }

        switch (true) {
            case ($grade >= 9 && $grade <= 10):
                return "Sobresaliente";
            case ($grade >= 7 && $grade < 9):
                return "Notable";
            case ($grade >= 5 && $grade < 7):
                return "Aprobado";
            case ($grade >= 0 && $grade < 5):
                return "Suspenso";
        }
    }
}
?>
