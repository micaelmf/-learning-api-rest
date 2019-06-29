<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VeterinaryRepository")
 */
class Veterinary
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
     * @ORM\Column(type="string", length=10)
     */
    private $crmv;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Address", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Clinic", inversedBy="veterinaries")
     */
    private $clinic;

    public function __construct()
    {
        $this->clinic = new ArrayCollection();
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

    public function getCrmv(): ?string
    {
        return $this->crmv;
    }

    public function setCrmv(string $crmv): self
    {
        $this->crmv = $crmv;

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

    /**
     * @return Collection|Clinic[]
     */
    public function getClinic(): Collection
    {
        return $this->clinic;
    }

    public function addClinic(Clinic $clinic): self
    {
        if (!$this->clinic->contains($clinic)) {
            $this->clinic[] = $clinic;
        }

        return $this;
    }

    public function removeClinic(Clinic $clinic): self
    {
        if ($this->clinic->contains($clinic)) {
            $this->clinic->removeElement($clinic);
        }

        return $this;
    }

    
}
