<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-2649412

function additionner($a,$b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {   //on lance une exception "MonException"
        throw  new InvalidArgumentException("Les deux parametre doivent etre des nombre ");
    }
    return $a+$b;
}

try {
    echo additionner(12,3) ,'<br/>';
    echo additionner('as',54),'<br/>';
} finally {//ce bloc sera executer  quoi quil arrive
    echo additionner(4,5);
}



