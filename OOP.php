<?php
/**
 * inkludovani 
 */
include 'class/iustrednySamec.php'; 
include 'class/ustrednySamec.php';  
include 'class/ustrednaSamec.php'; 
/**
 * atribut nastaveni napeti
 */
$napetiSamec = 24;
/**
 * instance tridy 
 */
$newSamec = new ustrednaSamec(); 
/**
 * vypsani  var dump 
 */
var_dump($newSamec::TYPE); 
/**
 * nastaveni atributu 
 */
$newSamec->setNapetiSamec($napetiSamec);      
/**
 * vypsani atributu ve var dump 
 */
var_dump($newSamec->getNapetiSamec());   