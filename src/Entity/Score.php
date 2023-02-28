<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Subject::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Subject;

    /**
     * @ORM\ManyToOne(targetEntity=Student::class, inversedBy="scores")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Student;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?Subject
    {
        return $this->Subject;
    }

    public function setSubject(Subject $Subject): self
    {
        $this->Subject = $Subject;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->Student;
    }

    public function setStudent(?Student $Student): self
    {
        $this->Student = $Student;

        return $this;
    }
}
