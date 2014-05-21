<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtqPartitQuiniela
 *
 * @ORM\Table(name="ptq_partit_quiniela", indexes={@ORM\Index(name="IDX_PTQ_ANY_JORNADA", columns={"PTQ_ANY", "PTQ_JORNADA"}), @ORM\Index(name="FK_PTQ_EQU_LOCAL", columns={"ID_EQU_LOCAL"}), @ORM\Index(name="FK_PTQ_EQU_VISITANT", columns={"ID_EQU_VISITANT"})})
 * @ORM\Entity
 */
class PtqPartitQuiniela
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PTQ_CASELLA", type="integer", nullable=false)
     */
    private $ptqCasella;

    /**
     * @var string
     *
     * @ORM\Column(name="PTQ_RESULTAT", type="string", length=1, nullable=true)
     */
    private $ptqResultat;

    /**
     * @var integer
     *
     * @ORM\Column(name="PTQ_ANY", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ptqAny;

    /**
     * @var integer
     *
     * @ORM\Column(name="PTQ_JORNADA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ptqJornada;

    /**
     * @var \PQ\QuiniBundle\Entity\EquEquip
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PQ\QuiniBundle\Entity\EquEquip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EQU_VISITANT", referencedColumnName="ID_EQU")
     * })
     */
    private $idEquVisitant;

    /**
     * @var \PQ\QuiniBundle\Entity\EquEquip
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PQ\QuiniBundle\Entity\EquEquip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EQU_LOCAL", referencedColumnName="ID_EQU")
     * })
     */
    private $idEquLocal;



    /**
     * Set ptqCasella
     *
     * @param integer $ptqCasella
     * @return PtqPartitQuiniela
     */
    public function setPtqCasella($ptqCasella)
    {
        $this->ptqCasella = $ptqCasella;

        return $this;
    }

    /**
     * Get ptqCasella
     *
     * @return integer 
     */
    public function getPtqCasella()
    {
        return $this->ptqCasella;
    }

    /**
     * Set ptqResultat
     *
     * @param string $ptqResultat
     * @return PtqPartitQuiniela
     */
    public function setPtqResultat($ptqResultat)
    {
        $this->ptqResultat = $ptqResultat;

        return $this;
    }

    /**
     * Get ptqResultat
     *
     * @return string 
     */
    public function getPtqResultat()
    {
        return $this->ptqResultat;
    }

    /**
     * Set ptqAny
     *
     * @param integer $ptqAny
     * @return PtqPartitQuiniela
     */
    public function setPtqAny($ptqAny)
    {
        $this->ptqAny = $ptqAny;

        return $this;
    }

    /**
     * Get ptqAny
     *
     * @return integer 
     */
    public function getPtqAny()
    {
        return $this->ptqAny;
    }

    /**
     * Set ptqJornada
     *
     * @param integer $ptqJornada
     * @return PtqPartitQuiniela
     */
    public function setPtqJornada($ptqJornada)
    {
        $this->ptqJornada = $ptqJornada;

        return $this;
    }

    /**
     * Get ptqJornada
     *
     * @return integer 
     */
    public function getPtqJornada()
    {
        return $this->ptqJornada;
    }

    /**
     * Set idEquVisitant
     *
     * @param \PQ\QuiniBundle\Entity\EquEquip $idEquVisitant
     * @return PtqPartitQuiniela
     */
    public function setIdEquVisitant(EquEquip $idEquVisitant)
    {
        $this->idEquVisitant = $idEquVisitant;

        return $this;
    }

    /**
     * Get idEquVisitant
     *
     * @return \PQ\QuiniBundle\Entity\EquEquip 
     */
    public function getIdEquVisitant()
    {
        return $this->idEquVisitant;
    }

    /**
     * Set idEquLocal
     *
     * @param \PQ\QuiniBundle\Entity\EquEquip $idEquLocal
     * @return PtqPartitQuiniela
     */
    public function setIdEquLocal(EquEquip $idEquLocal)
    {
        $this->idEquLocal = $idEquLocal;

        return $this;
    }

    /**
     * Get idEquLocal
     *
     * @return \PQ\QuiniBundle\Entity\EquEquip 
     */
    public function getIdEquLocal()
    {
        return $this->idEquLocal;
    }
}
