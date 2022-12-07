<?php

namespace App\Entity;

use App\Repository\ParticpantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticpantRepository::class)]
class Particpant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    private $participants;

    private $lastMessage;

    private $messages;


    public function getId(): ?int
    {
        return $this->id;
    }
}
