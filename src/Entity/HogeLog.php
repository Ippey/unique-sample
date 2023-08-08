<?php

namespace App\Entity;

use App\Repository\HogeLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HogeLogRepository::class)]
#[ORM\UniqueConstraint(columns: ['b_id', 'c_id'])]
class HogeLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $bId = null;

    #[ORM\Column]
    private ?int $cId = null;

    #[ORM\Column(length: 255)]
    private ?string $log = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBId(): ?int
    {
        return $this->bId;
    }

    public function setBId(int $bId): static
    {
        $this->bId = $bId;

        return $this;
    }

    public function getCId(): ?int
    {
        return $this->cId;
    }

    public function setCId(int $cId): static
    {
        $this->cId = $cId;

        return $this;
    }

    public function getLog(): ?string
    {
        return $this->log;
    }

    public function setLog(string $log): static
    {
        $this->log = $log;

        return $this;
    }
}
