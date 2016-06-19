<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:06
 */

namespace Paada\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="responsavel")
 */
class Responsavel extends Pessoa
{
    /**
     * @var Collection|Aluno
     * @ORM\OneToMany(targetEntity="Aluno", mappedBy="responsavel")
     */
    private $aluno;

    /**
     * @ORM\OneToOne(targetEntity="Usuario", inversedBy="permissao")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * Responsavel constructor.
     */
    public function __construct()
    {
        $this->aluno = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * @param mixed $aluno
     * @return Aluno
     */
    public function setAluno(Aluno $aluno)
    {
        if (!$this->aluno->contains($aluno)) {
            $this->aluno[] = $aluno;
            $aluno->setResponsavel($this);
        }
    }

    /**
     * Remove aluno
     *
     * @param Aluno $aluno
     */
    public function removeAluno(Aluno $aluno)
    {
        $this->aluno->removeElement($aluno);
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
     * @return Responsavel
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }


}