<?php


    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-1670482
    function  additionner($a,$b)
    {   if (!is_numeric($a) || !is_numeric($b))
        {
            //On lance une nouvelle exception grace a throw et on instancie un objet de classe exception
            throw new  Exception('Les deux parametre doivent etre des nombres');
        }
        return $a+$b;
    }

try //on va effetuer les instruction situer dans ce bloc
{
    echo additionner(12,3),'<br/>';
    echo additionner('azerty', 45), '<br/>';
    echo additionner(4,9);
} catch (Exception $e)//on va attraper les exception 'Exception' sil y en a une qui est levée
{

}
