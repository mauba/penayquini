<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquEquip
 *
 * @ORM\Table(name="equ_equip")
 * @ORM\Entity
 */
class EquEquip
{
    /**
     * @var string
     *
     * @ORM\Column(name="EQU_NOM_CURT", type="string", length=3, nullable=false)
     */
    private $equNomCurt;

    /**
     * @var string
     *
     * @ORM\Column(name="EQU_NOM", type="string", length=45, nullable=false)
     */
    private $equNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQU", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEqu;



    /**
     * Set equNomCurt
     *
     * @param string $equNomCurt
     * @return EquEquip
     */
    public function setEquNomCurt($equNomCurt)
    {
        $this->equNomCurt = $equNomCurt;

        return $this;
    }

    /**
     * Get equNomCurt
     *
     * @return string 
     */
    public function getEquNomCurt()
    {
        return $this->equNomCurt;
    }

    /**
     * Set equNom
     *
     * @param string $equNom
     * @return EquEquip
     */
    public function setEquNom($equNom)
    {
        $this->equNom = $equNom;

        return $this;
    }

    /**
     * Get equNom
     *
     * @return string 
     */
    public function getEquNom()
    {
        return $this->equNom;
    }

    /**
     * Get idEqu
     *
     * @return integer 
     */
    public function getIdEqu()
    {
        return $this->idEqu;
    }
}
