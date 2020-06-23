<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $birthCertificate;

    /**
     * @ORM\Column(type="string", nullable=true, length=10)
     */
    private $passport;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(
     */

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="ChildParent", inversedBy="children")
     * @ORM\JoinTable(name="students_parents")
     */
    private $parents;

    public function getId(): ?int
    {
        return $this->id;
    }
}
