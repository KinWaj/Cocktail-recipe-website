<?php

namespace App\Entity;

use App\Repository\DrinkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DrinkRepository::class)]
class Drink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\Column(type: 'string', length: 15)]
    private $type;

    #[ORM\Column(type: 'string', length: 35)]
    private $glass;

    #[ORM\Column(type: 'text')]
    private $instruction;

    #[ORM\Column(type: 'text')]
    private $ingridients;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getGlass(): ?string
    {
        return $this->glass;
    }

    public function setGlass(string $glass): self
    {
        $this->glass = $glass;

        return $this;
    }

    public function getInstruction(): ?string
    {
        return $this->instruction;
    }

    public function setInstruction(string $instruction): self
    {
        $this->instruction = $instruction;

        return $this;
    }

    public function getIngridients(): ?string
    {
        return $this->ingridients;
    }

    public function setIngridients(string $ingridients): self
    {
        $this->ingridients = $ingridients;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
