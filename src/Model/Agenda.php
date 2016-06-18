<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:46
 */

namespace Paada\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Paada\Model\Disciplina;

/**
 * @Entity
 * @Table(name="agenda")
 *
 */
class Agenda
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     *
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Disciplina",inversedBy="agenda", cascade={"all"})
     * @Column(type="integer")
     */
    private $disciplina;

    /**
     * @Column(type="date")
     *
     */
    private $data;

    /**
     * @Column(type="string")
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