<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat")
 * @ORM\Entity
 */
class Resultat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Partit1", type="integer", nullable=false)
     */
    private $partit1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit2", type="integer", nullable=false)
     */
    private $partit2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit3", type="integer", nullable=false)
     */
    private $partit3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit4", type="integer", nullable=false)
     */
    private $partit4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit5", type="integer", nullable=false)
     */
    private $partit5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit6", type="integer", nullable=false)
     */
    private $partit6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit7", type="integer", nullable=false)
     */
    private $partit7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit8", type="integer", nullable=false)
     */
    private $partit8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit9", type="integer", nullable=false)
     */
    private $partit9;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit10", type="integer", nullable=false)
     */
    private $partit10;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit11", type="integer", nullable=false)
     */
    private $partit11;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit12", type="integer", nullable=false)
     */
    private $partit12;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit13", type="integer", nullable=false)
     */
    private $partit13;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit14", type="integer", nullable=false)
     */
    private $partit14;

    /**
     * @var integer
     *
     * @ORM\Column(name="Partit15", type="integer", nullable=false)
     */
    private $partit15;

    /**
     * @var integer
     *
     * @ORM\Column(name="Jornada", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $jornada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Temporada", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $temporada;



    /**
     * Set partit1
     *
     * @param integer $partit1
     * @return Resultat
     */
    public function setPartit1($partit1)
    {
        $this->partit1 = $partit1;

        return $this;
    }

    /**
     * Get partit1
     *
     * @return integer 
     */
    public function getPartit1()
    {
        return $this->partit1;
    }

    /**
     * Set partit2
     *
     * @param integer $partit2
     * @return Resultat
     */
    public function setPartit2($partit2)
    {
        $this->partit2 = $partit2;

        return $this;
    }

    /**
     * Get partit2
     *
     * @return integer 
     */
    public function getPartit2()
    {
        return $this->partit2;
    }

    /**
     * Set partit3
     *
     * @param integer $partit3
     * @return Resultat
     */
    public function setPartit3($partit3)
    {
        $this->partit3 = $partit3;

        return $this;
    }

    /**
     * Get partit3
     *
     * @return integer 
     */
    public function getPartit3()
    {
        return $this->partit3;
    }

    /**
     * Set partit4
     *
     * @param integer $partit4
     * @return Resultat
     */
    public function setPartit4($partit4)
    {
        $this->partit4 = $partit4;

        return $this;
    }

    /**
     * Get partit4
     *
     * @return integer 
     */
    public function getPartit4()
    {
        return $this->partit4;
    }

    /**
     * Set partit5
     *
     * @param integer $partit5
     * @return Resultat
     */
    public function setPartit5($partit5)
    {
        $this->partit5 = $partit5;

        return $this;
    }

    /**
     * Get partit5
     *
     * @return integer 
     */
    public function getPartit5()
    {
        return $this->partit5;
    }

    /**
     * Set partit6
     *
     * @param integer $partit6
     * @return Resultat
     */
    public function setPartit6($partit6)
    {
        $this->partit6 = $partit6;

        return $this;
    }

    /**
     * Get partit6
     *
     * @return integer 
     */
    public function getPartit6()
    {
        return $this->partit6;
    }

    /**
     * Set partit7
     *
     * @param integer $partit7
     * @return Resultat
     */
    public function setPartit7($partit7)
    {
        $this->partit7 = $partit7;

        return $this;
    }

    /**
     * Get partit7
     *
     * @return integer 
     */
    public function getPartit7()
    {
        return $this->partit7;
    }

    /**
     * Set partit8
     *
     * @param integer $partit8
     * @return Resultat
     */
    public function setPartit8($partit8)
    {
        $this->partit8 = $partit8;

        return $this;
    }

    /**
     * Get partit8
     *
     * @return integer 
     */
    public function getPartit8()
    {
        return $this->partit8;
    }

    /**
     * Set partit9
     *
     * @param integer $partit9
     * @return Resultat
     */
    public function setPartit9($partit9)
    {
        $this->partit9 = $partit9;

        return $this;
    }

    /**
     * Get partit9
     *
     * @return integer 
     */
    public function getPartit9()
    {
        return $this->partit9;
    }

    /**
     * Set partit10
     *
     * @param integer $partit10
     * @return Resultat
     */
    public function setPartit10($partit10)
    {
        $this->partit10 = $partit10;

        return $this;
    }

    /**
     * Get partit10
     *
     * @return integer 
     */
    public function getPartit10()
    {
        return $this->partit10;
    }

    /**
     * Set partit11
     *
     * @param integer $partit11
     * @return Resultat
     */
    public function setPartit11($partit11)
    {
        $this->partit11 = $partit11;

        return $this;
    }

    /**
     * Get partit11
     *
     * @return integer 
     */
    public function getPartit11()
    {
        return $this->partit11;
    }

    /**
     * Set partit12
     *
     * @param integer $partit12
     * @return Resultat
     */
    public function setPartit12($partit12)
    {
        $this->partit12 = $partit12;

        return $this;
    }

    /**
     * Get partit12
     *
     * @return integer 
     */
    public function getPartit12()
    {
        return $this->partit12;
    }

    /**
     * Set partit13
     *
     * @param integer $partit13
     * @return Resultat
     */
    public function setPartit13($partit13)
    {
        $this->partit13 = $partit13;

        return $this;
    }

    /**
     * Get partit13
     *
     * @return integer 
     */
    public function getPartit13()
    {
        return $this->partit13;
    }

    /**
     * Set partit14
     *
     * @param integer $partit14
     * @return Resultat
     */
    public function setPartit14($partit14)
    {
        $this->partit14 = $partit14;

        return $this;
    }

    /**
     * Get partit14
     *
     * @return integer 
     */
    public function getPartit14()
    {
        return $this->partit14;
    }

    /**
     * Set partit15
     *
     * @param integer $partit15
     * @return Resultat
     */
    public function setPartit15($partit15)
    {
        $this->partit15 = $partit15;

        return $this;
    }

    /**
     * Get partit15
     *
     * @return integer 
     */
    public function getPartit15()
    {
        return $this->partit15;
    }

    /**
     * Set jornada
     *
     * @param integer $jornada
     * @return Resultat
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
     * @return Resultat
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
