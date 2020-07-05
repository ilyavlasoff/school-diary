<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeacherRepository::class)
 */
class Teacher
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
    private $speciality;

    /**
     * @ORM\Column(type="string")
     */
    private $education;

    /**
     * @ORM\OneToOne(targetEntity="Staff")
     * @ORM\JoinColumn(name="staff_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Grade", inversedBy="headTeacher")
     * @ORM\JoinColumn(name="headTeacher", referencedColumnName="id")
     */
    private $managingClass;

    public function getId(): ?int
    {
        return $this->id;
    }
}
