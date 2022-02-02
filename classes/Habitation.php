<?php

class Habitation {

    public string $pays;
    public string $ville;
    public int $postalCode;
    public int $bedroom;
    public int $pieces;

public function __construct(string $pays ,string $ville ,int $postalCode ,int $bedroom ,int $pieces) {
    $this->$pays =$pays;
    $this->$ville = $ville;
    $this->$postalCode = $postalCode;
    $this->$bedroom = $bedroom;
    $this->$pieces = $pieces;
}

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    /**
     * @param int $postalCode
     */
    public function setPostalCode(int $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return int
     */
    public function getBedroom(): int
    {
        return $this->bedroom;
    }

    /**
     * @param int $bedroom
     */
    public function setBedroom(int $bedroom): void
    {
        $this->bedroom = $bedroom;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }

}