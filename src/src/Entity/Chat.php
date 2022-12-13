<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatRepository::class)]
class Chat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'participant_one', targetEntity: User::class)]
    private Collection $user_one;

    #[ORM\OneToMany(mappedBy: 'participant_two', targetEntity: User::class)]
    private Collection $user_two;

    public function __construct()
    {
        $this->user_one = new ArrayCollection();
        $this->user_two = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserOne(): Collection
    {
        return $this->user_one;
    }

    public function addUserOne(User $userOne): self
    {
        if (!$this->user_one->contains($userOne)) {
            $this->user_one->add($userOne);
            $userOne->setParticipantOne($this);
        }

        return $this;
    }

    public function removeUserOne(User $userOne): self
    {
        if ($this->user_one->removeElement($userOne)) {
            // set the owning side to null (unless already changed)
            if ($userOne->getParticipantOne() === $this) {
                $userOne->setParticipantOne(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserTwo(): Collection
    {
        return $this->user_two;
    }

    public function addUserTwo(User $userTwo): self
    {
        if (!$this->user_two->contains($userTwo)) {
            $this->user_two->add($userTwo);
            $userTwo->setParticipantTwo($this);
        }

        return $this;
    }

    public function removeUserTwo(User $userTwo): self
    {
        if ($this->user_two->removeElement($userTwo)) {
            // set the owning side to null (unless already changed)
            if ($userTwo->getParticipantTwo() === $this) {
                $userTwo->setParticipantTwo(null);
            }
        }

        return $this;
    }
}