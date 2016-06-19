<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:22
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="professor")
 */
class Professor extends Pessoa
{

    /**
     * @var Collection|Disciplina
     * @ORM\OneToMany(targetEntity="Disciplina", mappedBy="disciplina")
     */
    private $disciplina;

    /**
     * @ORM\OneToOne(targetEntity="Usuario", inversedBy="professor")
     *  @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * Professor constructor.
     * @param $disciplina
     */
    public function __construct()
    {
        $this->disciplina = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * @param mixed $disciplina
     */
    public function setDisciplina(Disciplina $disciplina)
    {
        if (!$this->disciplina->contains($disciplina)) {
            $this->disciplina[] = $disciplina;
            $disciplina->setProfessor($this);
        }
    }

    /**
     * Remove disciplina
     *
     * @param \Paada\Model\Disciplina $disciplina
     */
    public function removeDisciplina(\Paada\Model\Disciplina $disciplina)
    {
        $this->disciplina->removeElement($disciplina);
    }

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     * @return Professor
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }


}