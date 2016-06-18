<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:24
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="turma")
 */
class Turma
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AnoLetivo", inversedBy="turmas")
     */
    private $ano_letivo;

    /**
     * @ORM\Column(type="string")
     */
    private $nome_turma;
    /**
     * @var \Doctrine\Common\Collections\Collection|Disciplina[]
     * @ORM\OneToMany(targetEntity="Disciplina", mappedBy="turma")
     */
    private $disciplinas;


    /**
     * @var \Doctrine\Common\Collections\Collection|Aluno[]
     * @ORM\ManyToMany(targetEntity="Aluno", inversedBy="turma")
     */
    private $alunos;

    /**
     * Turma constructor.
     */
    public function __construct()
    {
        $this->alunos = new ArrayCollection();
        $this->disciplinas = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAnoLetivo()
    {
        return $this->ano_letivo;
    }

    /**
     * @param mixed $ano_letivo
     */
    public function setAnoLetivo(AnoLetivo $ano_letivo)
    {
        $this->ano_letivo = $ano_letivo;
    }

    /**
     * @return mixed
     */
    public function getNomeTurma()
    {
        return $this->nome_turma;
    }

    /**
     * @param mixed $nome_turma
     */
    public function setNomeTurma($nome_turma)
    {
        $this->nome_turma = $nome_turma;
    }


}