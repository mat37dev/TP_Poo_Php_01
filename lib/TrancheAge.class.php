<?php

class TrancheAge
{
    private string $code;
    private int $ageMini;
    private int $ageMax;

    //region constructeur
    /**
     * @param string $code
     * @param int $ageMini
     * @param int $ageMax
     */
    public function __construct(string $code, int $ageMini, int $ageMax)
    {
        $this->code = $code;
        $this->ageMini = $ageMini;
        $this->ageMax = $ageMax;
    }
    //endregion

    //region Getters
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getAgeMini(): int
    {
        return $this->ageMini;
    }

    /**
     * @return int
     */
    public function getAgeMax(): int
    {
        return $this->ageMax;
    }


    //endregion

    //region Setters
    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @param int $ageMini
     */
    public function setAgeMini(int $ageMini): void
    {
        $this->ageMini = $ageMini;
    }

    /**
     * @param int $ageMax
     */
    public function setAgeMax(int $ageMax): void
    {
        $this->ageMax = $ageMax;
    }
    //endregion


    private function controleAge():void{
        if($this->ageMini > 0 && $this->$this->ageMax> 0){
            if($this->ageMini > $this->ageMax){
                $temp = $this->ageMini;
                $this->ageMini = $this->ageMax;
                $this->ageMax = $temp;
            }
        }
        else{
            $this->ageMax=0;
            $this->ageMini=0;
        }
    }
}