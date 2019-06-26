<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Address;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Address", cascade = {"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=false)
     */
    protected $address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address = null): self
    {
        $this->address = $address;

        return $this;
    }
}
