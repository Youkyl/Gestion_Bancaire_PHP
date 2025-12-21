<?php
namespace App\Entity;

enum TypeDeTransaction: string
{
    case DEPOT = 'Entree';
    case RETRAIT  = 'Sortie';

        public static function fromDatabase(string $value): self
    {
        return match (strtoupper($value)) {
            'DEPOT' => self::DEPOT,
            'RETRAIT' => self::RETRAIT,
            default => throw new \ValueError("Invalid type: $value")
        };
    }
}