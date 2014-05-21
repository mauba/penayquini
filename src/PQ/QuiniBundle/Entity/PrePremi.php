<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePremi
 *
 * @ORM\Table(name="pre_premi", indexes={@ORM\Index(name="PTQ_JORNADA", columns={"PTQ_JORNADA"})})
 * @ORM\Entity
 */
class PrePremi
{
    /**
     * @var float
     *
     * @ORM\Column(name="PRE_IMPORT", type="float", precision=10, scale=2, nullable=false)
     */
    private $preImport;

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
     * Set preImport
     *
     * @param float $preImport
     * @return PrePremi
     */
    public function setPreImport($preImport)
    {
        $this->preImport = $preImport;

        return $this;
    }

    /**
     * Get preImport
     *
     * @return float 
     */
    public function getPreImport()
    {
        return $this->preImport;
    }

    /**
     * Set ptqAny
     *
     * @param integer $ptqAny
     * @return PrePremi
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
     * @return PrePremi
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
}
