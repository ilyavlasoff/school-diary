<?php

namespace App\Entity;

use App\Repository\ChildParentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChildParentRepository::class)
 */
class ChildParent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Student", mappedBy="parents")
     */
    private $children;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $phoneNumber;

    public function getId(): ?int
    {
        return $this->id;
    }
}
