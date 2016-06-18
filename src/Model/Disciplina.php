<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:24
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="disciplina")
 */
class Disciplina
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Collection|Professor
     * @ORM\ManyToOne(targetEntity="Professor", inversedBy="disciplina")
     * @ORM\JoinColumn(name="professor_id", referencedColumnName="id")
     */
    private $professor;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Turma", inversedBy="disciplinas")
     * @ORM\JoinColumn(name="turma_id", referencedColumnName="id")
     */
    private $turma;
    /**
     * @ORM\Column(type="string")
     */
    private $nome_disciplina;
    /**
     * @var Collection|Agenda[]
     * @ORM\OneToMany(targetEntity="Agenda",mappedBy="disciplina", cascade={"all"})
     */
    private $agenda;

    /**
     * Disciplina constructor.
     */
    public function __construct()
    {
        $this->agenda = new ArrayCollection();
        $this->professor = new ArrayCollection();

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * @param mixed $professor
     */
    public function setProfessor(Professor $professor)
    {
        if (!$this->professor->contains($professor)) {
            $this->professor[] = $professor;
            $professor->setDisciplina($this);
        }
    }

    /**
     * Remove agenda
     *
     * @param \Paada\Model\Agenda $agenda
     */
    public function removeProfessor(Professor $professor)
    {
        $this->professor->removeElement($professor);
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma(Turma $turma)
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getNomeDisciplina()
    {
        return $this->nome_disciplina;
    }

    /**
     * @param mixed $nome_disciplina
     */
    public function setNomeDisciplina($nome_disciplina)
    {
        $this->nome_disciplina = $nome_disciplina;
    }

    /**
     * @return mixed
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * @param mixed $agenda
     */
    public function setAgenda(Agenda $agenda)
    {
        if (!$this->agenda->contains($agenda)) {
            $this->agenda[] = $agenda;
            $agenda->setDisciplina($this);
        }
    }

    /**
     * Remove agenda
     *
     * @param \Paada\Model\Agenda $agenda
     */
    public function removeAgenda(Agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }
}