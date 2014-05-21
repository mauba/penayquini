<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrmParametres
 *
 * @ORM\Table(name="prm_parametres")
 * @ORM\Entity
 */
class PrmParametres
{
    /**
     * @var string
     *
     * @ORM\Column(name="PRM_VALUE", type="string", length=64, nullable=false)
     */
    private $prmValue;

    /**
     * @var string
     *
     * @ORM\Column(name="PRM_NAME", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prmName;



    /**
     * Set prmValue
     *
     * @param string $prmValue
     * @return PrmParametres
     */
    public function setPrmValue($prmValue)
    {
        $this->prmValue = $prmValue;

        return $this;
    }

    /**
     * Get prmValue
     *
     * @return string 
     */
    public function getPrmValue()
    {
        return $this->prmValue;
    }

    /**
     * Get prmName
     *
     * @return string 
     */
    public function getPrmName()
    {
        return $this->prmName;
    }
}
