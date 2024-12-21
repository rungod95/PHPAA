<?php

class IncomeClassifier
{
    /**
    *param float $income Ingreso anual
    *return string Clasificación del ingreso
    */

public function classifyincome($income)
{
    if ($income<15000){
        return "Bajo";
    }elseif ($income>=15000 && $income<30000){
        return "Medio";
    }elseif ($income>=30000 && $income<50000){
        return "Alto";
    }elseif ($income>=50000 && $income<100000){
        return "Muy alto";
    }else{

        return "Ingresos elevados";


    }
    }
}
?>