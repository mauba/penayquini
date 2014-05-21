<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParPartit
 *
 * @ORM\Table(name="par_partit")
 * @ORM\Entity
 */
class ParPartit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PAR_JORNADA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parJornada;

    /**
     * @var integer
     *
     * @ORM\Column(name="PAR_ANY", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parAny;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQU_LOCAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEquLocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQU_VISITANT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEquVisitant;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COM", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCom;



    /**
     * Set parJornada
     *
     * @param integer $parJornada
     * @return ParPartit
     */
    public function setParJornada($parJornada)
    {
        $this->parJornada = $parJornada;

        return $this;
    }

    /**
     * Get parJornada
     *
     * @return integer 
     */
    public function getParJornada()
    {
        return $this->parJornada;
    }

    /**
     * Set parAny
     *
     * @param integer $parAny
     * @return ParPartit
     */
    public function setParAny($parAny)
    {
        $this->parAny = $parAny;

        return $this;
    }

    /**
     * Get parAny
     *
     * @return integer 
     */
    public function getParAny()
    {
        return $this->parAny;
    }

    /**
     * Set idEquLocal
     *
     * @param integer $idEquLocal
     * @return ParPartit
     */
    public function setIdEquLocal($idEquLocal)
    {
        $this->idEquLocal = $idEquLocal;

        return $this;
    }

    /**
     * Get idEquLocal
     *
     * @return integer 
     */
    public function getIdEquLocal()
    {
        return $this->idEquLocal;
    }

    /**
     * Set idEquVisitant
     *
     * @param integer $idEquVisitant
     * @return ParPartit
     */
    public function setIdEquVisitant($idEquVisitant)
    {
        $this->idEquVisitant = $idEquVisitant;

        return $this;
    }

    /**
     * Get idEquVisitant
     *
     * @return integer 
     */
    public function getIdEquVisitant()
    {
        return $this->idEquVisitant;
    }

    /**
     * Set idCom
     *
     * @param integer $idCom
     * @return ParPartit
     */
    public function setIdCom($idCom)
    {
        $this->idCom = $idCom;

        return $this;
    }

    /**
     * Get idCom
     *
     * @return integer 
     */
    public function getIdCom()
    {
        return $this->idCom;
    }
}
