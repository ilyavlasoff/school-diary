<?php

namespace App\Entity;

use App\Repository\LessonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LessonRepository::class)
 */
class Lesson
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    /**
     * @ORM\Column(type="string")
     */
    private $lessonType;

    /**
     * @ORM\Column(type="string")
     */
    private $homeWork;

    /**
     * @ORM\Column(type="string")
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }
}
