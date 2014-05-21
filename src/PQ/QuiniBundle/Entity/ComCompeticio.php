<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComCompeticio
 *
 * @ORM\Table(name="com_competicio")
 * @ORM\Entity
 */
class ComCompeticio
{
    /**
     * @var string
     *
     * @ORM\Column(name="COM_NOM", type="string", length=45, nullable=false)
     */
    private $comNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="COM_ANY_ACTUAL", type="integer", nullable=false)
     */
    private $comAnyActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="COM_JORNADA_ACTUAL", type="integer", nullable=false)
     */
    private $comJornadaActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COM", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;



    /**
     * Set comNom
     *
     * @param string $comNom
     * @return ComCompeticio
     */
    public function setComNom($comNom)
    {
        $this->comNom = $comNom;

        return $this;
    }

    /**
     * Get comNom
     *
     * @return string 
     */
    public function getComNom()
    {
        return $this->comNom;
    }

    /**
     * Set comAnyActual
     *
     * @param integer $comAnyActual
     * @return ComCompeticio
     */
    public function setComAnyActual($comAnyActual)
    {
        $this->comAnyActual = $comAnyActual;

        return $this;
    }

    /**
     * Get comAnyActual
     *
     * @return integer 
     */
    public function getComAnyActual()
    {
        return $this->comAnyActual;
    }

    /**
     * Set comJornadaActual
     *
     * @param integer $comJornadaActual
     * @return ComCompeticio
     */
    public function setComJornadaActual($comJornadaActual)
    {
        $this->comJornadaActual = $comJornadaActual;

        return $this;
    }

    /**
     * Get comJornadaActual
     *
     * @return integer 
     */
    public function getComJornadaActual()
    {
        return $this->comJornadaActual;
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
