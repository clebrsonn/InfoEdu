<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:36
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ano_letivo")
 */
class AnoLetivo
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $titulo;
    /**
     * @ORM\Column(type="date")
     */
    private $data_criacao;


    /**
     * @var \Doctrine\Common\Collections\Collection|Turma[]
     * @ORM\OneToMany(targetEntity="Turma", mappedBy="ano_letivo")
     */
    private $turmas;

    /**
     * AnoLetivo constructor.
     */
    public function __construct()
    {
        $this->turmas = new ArrayCollection();
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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * @param mixed $data_criacao
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
    }

    /**
     * @return mixed
     */
    public function getTurmas()
    {
        return $this->turmas;
    }

    /**
     * @param mixed Turma $turmas
     */
    public function setTurmas(Turma $turma)
    {
        if (!$this->turmas->contains($turma)) {
            $this->turmas[] = $turma;
            $turma->setAnoLetivo($this);
        }
    }

    /**
     * Remove turmas
     *
     * @param \Paada\Model\Turma $turmas
     */
    public function removeTurma(Turma $turmas)
    {
        $this->turmas->removeElement($turmas);
    }

}