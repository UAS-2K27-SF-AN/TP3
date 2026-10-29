<?php

namespace App\Service;

class MessageGenerator
{
    public function getMessage(int $id): string
    {
        return "Voici le contenu dynamique de l’article n°$id, généré par le service !";
    }
}
