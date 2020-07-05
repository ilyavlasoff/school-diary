<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StaffRepository::class)
 */
class Staff
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="money")
     */
    private $salary;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $passport;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $jobTitle;

    /**
     * @ORM\Column(type="time")
     */
    private $startWorkTime;

    /**
     * @ORM\Column(type="time")
     */
    private $endWorkTime;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

}
