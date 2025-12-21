<?php


namespace App\Entity;

class Transaction{

    private $id;
    private $montant;
    private $type;
    private $compte;
    private $date;
    private $frais;

    public function __construct(
        $montant,
        $type,
        $compte,
        $frais,
        $date = null,
        $id = null
    ) {
        $this->id = $id;
        $this->montant = $montant;
        $this->type = $type;
        $this->frais = $frais;
        $this->compte = $compte;
        $this->date = $date;
    }

    public function Transaction()
    {

    }


    public function getId(): ?string
    {
        return $this->id;
    }

    public function getMontant(): float
    {
        return $this->montant;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCompte(): Comptes
    {
        return $this->compte;
    }

    public function getDate(): string
    {
        return $this->date;
    }


    public function getFrais(): float
    {
        return $this->frais;
    }

    public function __toString()
    {
        return "Transaction ID: " . $this->id . ", Montant: " . $this->montant . ", Type: " . $this->type . ", Date: " . $this->date;

    }


}