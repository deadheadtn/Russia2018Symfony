<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @return int
     */
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }

    /**
     * @param int $idEquipe
     */
    public function setIdEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;
    }

    /**
     * @return string
     */
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * @param string $nomEquipe
     */
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param string $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return int
     */
    public function getClassement()
    {
        return $this->classement;
    }

    /**
     * @param int $classement
     */
    public function setClassement($classement)
    {
        $this->classement = $classement;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQUIPE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUPE", type="string", length=20, nullable=true)
     */
    private $groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS", type="string", length=20, nullable=true)
     */
    private $pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="CLASSEMENT", type="integer", nullable=true)
     */
    private $classement;


}

