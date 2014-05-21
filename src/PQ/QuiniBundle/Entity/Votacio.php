<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votacio
 *
 * @ORM\Table(name="votacio")
 * @ORM\Entity
 */
class Votacio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resultat1", type="integer", nullable=false)
     */
    private $resultat1;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat2", type="integer", nullable=false)
     */
    private $resultat2;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat3", type="integer", nullable=false)
     */
    private $resultat3;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat4", type="integer", nullable=false)
     */
    private $resultat4;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat5", type="integer", nullable=false)
     */
    private $resultat5;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat6", type="integer", nullable=false)
     */
    private $resultat6;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat7", type="integer", nullable=false)
     */
    private $resultat7;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat8", type="integer", nullable=false)
     */
    private $resultat8;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat9", type="integer", nullable=false)
     */
    private $resultat9;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat10", type="integer", nullable=false)
     */
    private $resultat10;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat11", type="integer", nullable=false)
     */
    private $resultat11;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat12", type="integer", nullable=false)
     */
    private $resultat12;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat13", type="integer", nullable=false)
     */
    private $resultat13;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat14", type="integer", nullable=false)
     */
    private $resultat14;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat15", type="integer", nullable=false)
     */
    private $resultat15;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_p", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idP;

    /**
     * @var integer
     *
     * @ORM\Column(name="jornada", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $jornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temporada", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $temporada;



    /**
     * Set resultat1
     *
     * @param integer $resultat1
     * @return Votacio
     */
    public function setResultat1($resultat1)
    {
        $this->resultat1 = $resultat1;

        return $this;
    }

    /**
     * Get resultat1
     *
     * @return integer 
     */
    public function getResultat1()
    {
        return $this->resultat1;
    }

    /**
     * Set resultat2
     *
     * @param integer $resultat2
     * @return Votacio
     */
    public function setResultat2($resultat2)
    {
        $this->resultat2 = $resultat2;

        return $this;
    }

    /**
     * Get resultat2
     *
     * @return integer 
     */
    public function getResultat2()
    {
        return $this->resultat2;
    }

    /**
     * Set resultat3
     *
     * @param integer $resultat3
     * @return Votacio
     */
    public function setResultat3($resultat3)
    {
        $this->resultat3 = $resultat3;

        return $this;
    }

    /**
     * Get resultat3
     *
     * @return integer 
     */
    public function getResultat3()
    {
        return $this->resultat3;
    }

    /**
     * Set resultat4
     *
     * @param integer $resultat4
     * @return Votacio
     */
    public function setResultat4($resultat4)
    {
        $this->resultat4 = $resultat4;

        return $this;
    }

    /**
     * Get resultat4
     *
     * @return integer 
     */
    public function getResultat4()
    {
        return $this->resultat4;
    }

    /**
     * Set resultat5
     *
     * @param integer $resultat5
     * @return Votacio
     */
    public function setResultat5($resultat5)
    {
        $this->resultat5 = $resultat5;

        return $this;
    }

    /**
     * Get resultat5
     *
     * @return integer 
     */
    public function getResultat5()
    {
        return $this->resultat5;
    }

    /**
     * Set resultat6
     *
     * @param integer $resultat6
     * @return Votacio
     */
    public function setResultat6($resultat6)
    {
        $this->resultat6 = $resultat6;

        return $this;
    }

    /**
     * Get resultat6
     *
     * @return integer 
     */
    public function getResultat6()
    {
        return $this->resultat6;
    }

    /**
     * Set resultat7
     *
     * @param integer $resultat7
     * @return Votacio
     */
    public function setResultat7($resultat7)
    {
        $this->resultat7 = $resultat7;

        return $this;
    }

    /**
     * Get resultat7
     *
     * @return integer 
     */
    public function getResultat7()
    {
        return $this->resultat7;
    }

    /**
     * Set resultat8
     *
     * @param integer $resultat8
     * @return Votacio
     */
    public function setResultat8($resultat8)
    {
        $this->resultat8 = $resultat8;

        return $this;
    }

    /**
     * Get resultat8
     *
     * @return integer 
     */
    public function getResultat8()
    {
        return $this->resultat8;
    }

    /**
     * Set resultat9
     *
     * @param integer $resultat9
     * @return Votacio
     */
    public function setResultat9($resultat9)
    {
        $this->resultat9 = $resultat9;

        return $this;
    }

    /**
     * Get resultat9
     *
     * @return integer 
     */
    public function getResultat9()
    {
        return $this->resultat9;
    }

    /**
     * Set resultat10
     *
     * @param integer $resultat10
     * @return Votacio
     */
    public function setResultat10($resultat10)
    {
        $this->resultat10 = $resultat10;

        return $this;
    }

    /**
     * Get resultat10
     *
     * @return integer 
     */
    public function getResultat10()
    {
        return $this->resultat10;
    }

    /**
     * Set resultat11
     *
     * @param integer $resultat11
     * @return Votacio
     */
    public function setResultat11($resultat11)
    {
        $this->resultat11 = $resultat11;

        return $this;
    }

    /**
     * Get resultat11
     *
     * @return integer 
     */
    public function getResultat11()
    {
        return $this->resultat11;
    }

    /**
     * Set resultat12
     *
     * @param integer $resultat12
     * @return Votacio
     */
    public function setResultat12($resultat12)
    {
        $this->resultat12 = $resultat12;

        return $this;
    }

    /**
     * Get resultat12
     *
     * @return integer 
     */
    public function getResultat12()
    {
        return $this->resultat12;
    }

    /**
     * Set resultat13
     *
     * @param integer $resultat13
     * @return Votacio
     */
    public function setResultat13($resultat13)
    {
        $this->resultat13 = $resultat13;

        return $this;
    }

    /**
     * Get resultat13
     *
     * @return integer 
     */
    public function getResultat13()
    {
        return $this->resultat13;
    }

    /**
     * Set resultat14
     *
     * @param integer $resultat14
     * @return Votacio
     */
    public function setResultat14($resultat14)
    {
        $this->resultat14 = $resultat14;

        return $this;
    }

    /**
     * Get resultat14
     *
     * @return integer 
     */
    public function getResultat14()
    {
        return $this->resultat14;
    }

    /**
     * Set resultat15
     *
     * @param integer $resultat15
     * @return Votacio
     */
    public function setResultat15($resultat15)
    {
        $this->resultat15 = $resultat15;

        return $this;
    }

    /**
     * Get resultat15
     *
     * @return integer 
     */
    public function getResultat15()
    {
        return $this->resultat15;
    }

    /**
     * Set idP
     *
     * @param integer $idP
     * @return Votacio
     */
    public function setIdP($idP)
    {
        $this->idP = $idP;

        return $this;
    }

    /**
     * Get idP
     *
     * @return integer 
     */
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * Set jornada
     *
     * @param integer $jornada
     * @return Votacio
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;

        return $this;
    }

    /**
     * Get jornada
     *
     * @return integer 
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * Set temporada
     *
     * @param \DateTime $temporada
     * @return Votacio
     */
    public function setTemporada($temporada)
    {
        $this->temporada = $temporada;

        return $this;
    }

    /**
     * Get temporada
     *
     * @return \DateTime 
     */
    public function getTemporada()
    {
        return $this->temporada;
    }
}
