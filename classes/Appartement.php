<?php

class Appartement extends Habitation {
    public bool $garage;

    public function __construct(string $pays, string $ville, int $postalCode, int $bedroom, int $pieces, bool $garage) {

        $this->garage = $garage;
        parent::__construct($pays, $ville, $postalCode, $bedroom, $pieces);
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
    public function __toString() : string
    {
        return $this->garage;
    }
}
