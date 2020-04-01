<?php
/**
 * abstraktni trida ktera implementuje interface
 */
abstract class ustrednySamec implements iustrednySamec{
  /**
  *atribut ktery je pristupny jen ve tride 
  * @var type 
  */
    protected $napetiSamec; 
   /**
   *funkce pro ziskani hodnoty atributu
   * @return type
   */
    function getNapetiSamec() {
      return $this->napetiSamec;
  }
 /**
   * fuknce ktera nastavi hodnotu atributu 
   * @param type $napetiSamec
   */
  function setNapetiSamec($napetiSamec) {
      $this->napetiSamec = $napetiSamec;
  }

}