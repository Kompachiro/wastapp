<?php

namespace App\Entity;

use App\Repository\ParticpantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'participation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_id = null;

    #[ORM\ManyToMany(targetEntity: Chat::class, inversedBy: 'members')]
    private Collection $chat_id;

    public function __construct()
    {
        $this->chat_id = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getChatId(): Collection
    {
        return $this->chat_id;
    }

    public function addChatId(Chat $chatId): self
    {
        if (!$this->chat_id->contains($chatId)) {
            $this->chat_id->add($chatId);
        }

        return $this;
    }

    public function removeChatId(Chat $chatId): self
    {
        $this->chat_id->removeElement($chatId);

        return $this;
    }
}
