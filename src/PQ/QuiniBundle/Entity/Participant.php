<?php

namespace PQ\QuiniBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity
 */
class Participant implements UserInterface , \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     */
    private $idP;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_P", type="string", length=20, nullable=false)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="cognoms_p", type="string", length=30, nullable=false)
     */
    private $cognomsP;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=25, nullable=false)
     */
    private $alias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rol", type="boolean", nullable=false)
     */
    private $rol;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasenya", type="string", length=15, nullable=false)
     */
    private $contrasenya;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacio", type="integer", nullable=false)
     */
    private $puntuacio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ult_punt", type="integer", nullable=false)
     */
    private $ultPunt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Posicio", type="integer", nullable=false)
     */
    private $posicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="canvi", type="integer", nullable=false)
     */
    private $canvi;

    /**
     * @var string
     *
     * @ORM\Column(name="correu", type="string", length=254, nullable=false)
     */
    private $correu;

    /**
     * @var string
     *
     * @ORM\Column(name="estat", type="string", length=25, nullable=false)
     */
    private $estat;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $username;



    /**
     * Set idP
     *
     * @param integer $idP
     * @return Participant
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
     * Set nomP
     *
     * @param string $nomP
     * @return Participant
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;

        return $this;
    }

    /**
     * Get nomP
     *
     * @return string 
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * Set cognomsP
     *
     * @param string $cognomsP
     * @return Participant
     */
    public function setCognomsP($cognomsP)
    {
        $this->cognomsP = $cognomsP;

        return $this;
    }

    /**
     * Get cognomsP
     *
     * @return string 
     */
    public function getCognomsP()
    {
        return $this->cognomsP;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Participant
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set rol
     *
     * @param boolean $rol
     * @return Participant
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return boolean 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set contrasenya
     *
     * @param string $contrasenya
     * @return Participant
     */
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get contrasenya
     *
     * @return string 
     */
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * Set puntuacio
     *
     * @param integer $puntuacio
     * @return Participant
     */
    public function setPuntuacio($puntuacio)
    {
        $this->puntuacio = $puntuacio;

        return $this;
    }

    /**
     * Get puntuacio
     *
     * @return integer 
     */
    public function getPuntuacio()
    {
        return $this->puntuacio;
    }

    /**
     * Set ultPunt
     *
     * @param integer $ultPunt
     * @return Participant
     */
    public function setUltPunt($ultPunt)
    {
        $this->ultPunt = $ultPunt;

        return $this;
    }

    /**
     * Get ultPunt
     *
     * @return integer 
     */
    public function getUltPunt()
    {
        return $this->ultPunt;
    }

    /**
     * Set posicio
     *
     * @param integer $posicio
     * @return Participant
     */
    public function setPosicio($posicio)
    {
        $this->posicio = $posicio;

        return $this;
    }

    /**
     * Get posicio
     *
     * @return integer 
     */
    public function getPosicio()
    {
        return $this->posicio;
    }

    /**
     * Set canvi
     *
     * @param integer $canvi
     * @return Participant
     */
    public function setCanvi($canvi)
    {
        $this->canvi = $canvi;

        return $this;
    }

    /**
     * Get canvi
     *
     * @return integer 
     */
    public function getCanvi()
    {
        return $this->canvi;
    }

    /**
     * Set correu
     *
     * @param string $correu
     * @return Participant
     */
    public function setCorreu($correu)
    {
        $this->correu = $correu;

        return $this;
    }

    /**
     * Get correu
     *
     * @return string 
     */
    public function getCorreu()
    {
        return $this->correu;
    }

    /**
     * Set estat
     *
     * @param string $estat
     * @return Participant
     */
    public function setEstat($estat)
    {
        $this->estat = $estat;

        return $this;
    }

    /**
     * Get estat
     *
     * @return string 
     */
    public function getEstat()
    {
        return $this->estat;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Participant
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt(){
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
                $this->idP,
                $this->username,
                $this->password,
                // see section on salt below
                // $this->salt,
            ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->idP,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

}
