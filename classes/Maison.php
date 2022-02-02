<?php

class Maison extends Habitation {

    public  bool $garden;
    public int $etages;
    public bool $garage;


    public function __construct(string $pays,
                                string $ville,
                                int $postalCode,
                                int $bedroom,
                                int $pieces,
                                bool $garden,
                                int $etages,
                                bool $garage) {
        $this->garden = $garden;
        $this->etages = $etages;
        $this->garage = $garage;
        parent::__construct($pays, $ville, $postalCode, $bedroom, $pieces);
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
     * @return bool
     */
    public function isGarden(): bool
    {
        return $this->garden;
    }

    /**
     * @param bool $garden
     */
    public function setGarden(bool $garden): void
    {
        $this->garden = $garden;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}

