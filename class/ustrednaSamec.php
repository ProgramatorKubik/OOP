<?php
/**
 *  normalni trida ktera dedi predchozi abstraktni tridu
 */
class ustrednaSamec extends ustrednySamec{
    /**
     *  konstanta ktera se nastavila a uz se nemeni
     */
    const TYPE = 1;
  /**
     * funkce pro ziskani hodnoty atributu
     * @return type
     */
    public function getNapetiSamec() {
      return $this->napetiSamec;
  }
  /**
 * fuknce ktera nastavi hodnotu atributu
 * @param type $napetiSamec
 */
   public function setNapetiSamec($napetiSamec) {
      $this->napetiSamec = $napetiSamec;
  }
}