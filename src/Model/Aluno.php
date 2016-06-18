<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:49
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="aluno")
 */
class Aluno extends Usuario
{
    use Pessoa;

    /**
     * @ManyToOne(targetEntity="Responsavel", fetch="EAGER",
     *     inversedBy="aluno")
     * @ORM\JoinColumn(name="responsavel_id", referencedColumnName="id")
     *
     */
    private $responsavel;

    /**
     * @Column(type="date")
     */
    private $data_nascimento;

    /**
     * @ORM\ManyToMany(targetEntity="Turma", mappedBy="alunos")
     * @ORM\JoinTable(name="turma_alunos",
     *     joinColumns={
     *         @ORM\JoinColumn(name="aluno_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="turma_id", referencedColumnName="id")
     *  }
     * )
     *
     */
    private $turma;


    /**
     * @var \Doctrine\Common\Collections\Collection|Notas[]
     * @OneToMany(targetEntity="Notas", mappedBy="aluno")
     */
    private $notas;

    /**
     * Aluno constructor.
     *
     */
    public function __construct()
    {
        $this->notas = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param Notas $nota
     */
    public function setNotas(Notas $nota)
    {
        if (!$this->notas->contains($nota)) {
            $this->notas[] = $nota;
            $nota->setAluno($this);
        }

    }

    /**
     * Remove turma
     *
     * @param \Paada\Model\Turma $turma
     */
    public function removeTurma(Turma $turma)
    {
        $this->turma->removeElement($turma);
    }

    /**
     * @return mixed
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * @param mixed $responsavel
     */
    public function setResponsavel(Responsavel $responsavel)
    {
        $this->responsavel = $responsavel;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
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


}