<?php
namespace App\Entity;

enum TypeDeCompte: string
{
    case EPARGNE = 'Compte Epargne';
    case CHEQUE  = 'Compte Cheque';

    public static function fromDatabase(string $value): self
    {
        return match (strtoupper($value)) {
            'EPARGNE' => self::EPARGNE,
            'CHEQUE' => self::CHEQUE,
            default => throw new \ValueError("Invalid type: $value")
        };
    }
}