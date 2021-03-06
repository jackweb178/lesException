<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-1670575
class MonException extends  ErrorException
{
    public function __toString()
    {
        switch ($this->severity)
        {
            case E_USER_ERROR ://si l'utilisateur emet une erreur fatal
                $type="Erreur fatal";
                break;

            case E_WARNING : //si php emet une alerte
                $type='Attention';
                break;

            case E_NOTICE : //si php emet une notice
            case  E_USER_NOTICE : //si l'itulisateur emet une notic
                $type='Note';
                break;
        }
        return '<strong>'.$type .'</strong> : [' .$this->code .']'.$this->message . '<br/> <strong>'.$this->file.'</strong> a la ligne <strong>'. $this->line .' </strong>';
    }
}

function error2exception($code ,$message ,$fichier, $ligne)
{
    //le code fait office de severite
    throw  new MonException($message,0,$code,$fichier,$ligne);
}

function customException($e)
{
    echo 'Ligne ',$e->getLine(),' dans ',$e->getFile(), '<br><strong> Exception lancee</strong> : ', $e->getMessage(); ;
}

set_error_handler('error2exception');//convertir les erreur en exception
set_exception_handler('customException');//intercepter lexeception et le personnaliser
function additionner($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {
        throw new MonException('Les deux paramètres doivent être des nombres'); // On lance une exception "MonException".
    }

    return $a + $b;
}

echo additionner(12, 3), '<br />';
echo additionner('azerty', 54), '<br />';
echo additionner(4, 8);



