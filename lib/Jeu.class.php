<?php

class jeu
{
    private int $numero;
    private string $libelle;
    //private int $ageMini;
    //private int $ageMax;
    private string $categorie;
    private TrancheAge $trancheAge;

    #region constructors
    /**
     * @param int $numero
     * @param string $libelle
     * @param int $ageMini
     * @param int $ageMax
     */
    public function __construct4(int $numero, string $libelle, TrancheAge $trancheAge)
    {
        $this->numero = $numero;
        $this->libelle = $libelle;
        $this->trancheAge = $trancheAge;
    }

    /**
     * @param int $numero
     * @param string $libelle
     * @param int $ageMini
     * @param int $ageMax
     * @param string $categorie
     */
    public function __construct(int $numero, string $libelle, string $categorie, TrancheAge $trancheAge)
    {
        $this->numero = $numero;
        $this->libelle = $libelle;
        $this->trancheAge = $trancheAge;
        $this->categorie = $categorie;
    }
    #endregion
    #region getters
    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @return TrancheAge
     */
    public function getTrancheAge(): TrancheAge
    {
        return $this->trancheAge;
    }


    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }
    #endregion
    #region setters
    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }
    #endregion

    public function Convenir(int $age): bool
    {
        $result = false;
        if($age <= $this->ageMax && $age>= $this->ageMini){
            $result = true;
        }
        return $result;
    }
}