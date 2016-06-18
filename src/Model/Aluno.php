<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:49
 */

namespace Paada\Model;


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
     *
     * @Column(type="string")
     */
    private $responsavel;

    /**
     * @Column(type="date")
     */
    private $data_nascimento;

    /**
     * @OneToMany(targetEntity="Disciplina",mappedBy="turma")
     *
     * @Column(type="string")
     */
    private $turma;


    /**
     * @Column(type="string")
     */
    private $notas;

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
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