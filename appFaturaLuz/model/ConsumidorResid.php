<?php
require_once 'iConsumidorEnergia.php';


class Residencial implements iConsumidorEnergia{

    private $consumo;
    private $limite;
    private $gasto;
    private $gastoPosLimite;
    // private array $consumos;

    //__construct
    public function __construct(){
        
        $this->limite = 0;
        $this->gasto = 1.05;
        $this->gastoPosLimite = 1.05;

    }
    

    //methods

    public function getValorFatura(){
        $valorFatura = null;

        $valorFatura = $this->gasto*$this->consumo;

        return $valorFatura;

    }
    
    



    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }

    /**
     * Get the value of limite
     */
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * Set the value of limite
     */
    public function setLimite($limite): self
    {
        $this->limite = $limite;

        return $this;
    }

    /**
     * Get the value of gasto
     */
    public function getGasto()
    {
        return $this->gasto;
    }

    /**
     * Set the value of gasto
     */
    public function setGasto($gasto): self
    {
        $this->gasto = $gasto;

        return $this;
    }

    /**
     * Get the value of gastoPosLimite
     */
    public function getGastoPosLimite()
    {
        return $this->gastoPosLimite;
    }

    /**
     * Set the value of gastoPosLimite
     */
    public function setGastoPosLimite($gastoPosLimite): self
    {
        $this->gastoPosLimite = $gastoPosLimite;

        return $this;
    }
}