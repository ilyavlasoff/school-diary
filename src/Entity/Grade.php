<?php

namespace App\Entity;

use App\Repository\GradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GradeRepository::class)
 */
class Grade
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=3)
     * @return string
     */
    private $liter;

    /**
     * @ORM\Column(type="date")
     * @return string
     */
    private $year;

    /**
     * @ORM\OneToOne(targetEntity="teacher", mappedBy="managingClass")
     */
    private $headTeacher;

    /**
     * @ORM\OneToMany(targetEntity="Student", mappedBy="grade")
     */
    private $students;

    public function getId(): ?int
    {
        return $this->id;
    }
}
