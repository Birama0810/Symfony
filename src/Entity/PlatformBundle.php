<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlatformBundleRepository")
 */
class PlatformBundle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $yml;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYml(): ?string
    {
        return $this->yml;
    }

    public function setYml(string $yml): self
    {
        $this->yml = $yml;

        return $this;
    }
}
