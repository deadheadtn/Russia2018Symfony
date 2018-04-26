<?php

namespace Nesrine\JoueurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff", indexes={@ORM\Index(name="NOM_EQUIPE", columns={"NOM_EQUIPE"})})
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_STAFF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_S", type="string", length=20, nullable=true)
     */
    private $nomS;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_S", type="string", length=20, nullable=true)
     */
    private $prenomS;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="FONCTION_S", type="string", length=20, nullable=true)
     */
    private $fonctionS;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESENCE_S", type="string", length=20, nullable=true)
     */
    private $presenceS;

    public function getidStaff()
    {
        return $this->idStaff;
    }
    public function setidStaff($idStaff)
    {
        $this->idStaff = $idStaff;

        return $this;
    }

    public function getnomS()
    {
        return $this->nomS;
    }
    public function setnomS($nomS)
    {
        $this->nomS = $nomS;

        return $this;
    }

    public function getprenomS()
    {
        return $this->prenomS;
    }
    public function setprenomS($prenomS)
    {
        $this->prenomS = $prenomS;

        return $this;
    }

    public function getnomEquipe()
    {
        return $this->nomEquipe;
    }
    public function setnomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }
    public function getfonctionS()
    {
        return $this->fonctionS;
    }
    public function setfonctionS($fonctionS)
    {
        $this->fonctionS = $fonctionS;

        return $this;
    }

    public function getpresenceS()
    {
        return $this->presenceS;
    }
    public function setpresenceS($presenceS)
    {
        $this->presenceS = $presenceS;

        return $this;
    }

}

