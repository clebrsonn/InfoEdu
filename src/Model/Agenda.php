<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:46
 */

namespace Paada\Model;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="agenda")
 *
 */
class Agenda
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Disciplina",inversedBy="agenda", cascade={"all"})
     * @ORM\JoinColumn(name="disciplina_id", referencedColumnName="id")
     *
     */
    private $disciplina;

    /**
     * @ORM\Column(type="date")
     *
     */
    private $data;

    /**
     * @ORM\Column(type="text")
     *
     */
    private $texto;

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
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * @param mixed $disciplina
     * @return Agenda
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return Agenda
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     * @return Agenda
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }


}