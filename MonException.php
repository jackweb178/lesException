<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-1670513
class MonException extends  Exception
{
    public function __construct($message , $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return $this->message;
    }

}

function additionner($a,$b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {
        throw  new MonException("Les deux parametre doivent etre des nombre ");
    }
    return $a+$b;
}

try {
    echo additionner(12,3) ,'<br/>';
    echo additionner('azerty', 54),'<br/>';
    echo additionner(4,8);

}catch (MonException $e) //Nous allons attraper l'exception s'il yen a une qui est leve
{
    echo $e; //on affiche le message d'erreur grace a la methpode __toString que lon a ecrite
}

echo ' <br/> Fin du scripte ';// ce message s'affiche , ca prouve que le scripte est executer jusquau bout