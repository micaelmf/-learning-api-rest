<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClinicRepository")
 */
class Clinic
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=155)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Address", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Veterinary", mappedBy="clinic")
     */
    private $veterinaries;

    public function __construct()
    {
        $this->veterinaries = new ArrayCollection();
    }

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

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection|Veterinary[]
     */
    public function getVeterinaries(): Collection
    {
        return $this->veterinaries;
    }

    public function addVeterinary(Veterinary $veterinary): self
    {
        if (!$this->veterinaries->contains($veterinary)) {
            $this->veterinaries[] = $veterinary;
            $veterinary->addClinic($this);
        }

        return $this;
    }

    public function removeVeterinary(Veterinary $veterinary): self
    {
        if ($this->veterinaries->contains($veterinary)) {
            $this->veterinaries->removeElement($veterinary);
            $veterinary->removeClinic($this);
        }

        return $this;
    }
}
