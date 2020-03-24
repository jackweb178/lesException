<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-1670526

try {
    $bd=new PDO('mysql:host=localhost;dbname=poo','root','');//tentative de connexion
    echo 'Connexion reuissi !';//si la connexion a reuissi alors cette instruction sera executer

}catch (PDOException $e) //Nous allons attraper l'exception s'il yen a une qui est leve
{
    echo 'La connexion a echouer <br/>';
    echo 'Information : code de lerreur [',$e->getCode(),']<br/> Message derreur ', $e->getMessage(); //on affiche le message d'erreur grace a la methpode __toString que lon a ecrite
}