<?php

namespace NejmeddineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", uniqueConstraints={@ORM\UniqueConstraint(name="ID_UTILISATEUR", columns={"ID_UTILISATEUR"})}, indexes={@ORM\Index(name="FK_FAIRE", columns={"ID_UTILISATEUR"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RECLAMATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="SUJET_REC", type="string", length=20, nullable=true)
     */
    private $sujetRec;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_REC", type="text", length=65535, nullable=true)
     */
    private $descriptionRec;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_REC", type="string", length=20, nullable=true)
     */
    private $dateRec;

    /**
     * @var integer
     *
     * @ORM\Column(name="ETAT_REC", type="integer", nullable=true)
     */
    private $etatRec;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @return int
     */
    public function getIdReclamation()
    {
        return $this->idReclamation;
    }

    /**
     * @param int $idReclamation
     */
    public function setIdReclamation($idReclamation)
    {
        $this->idReclamation = $idReclamation;
    }

    /**
     * @return string
     */
    public function getSujetRec()
    {
        return $this->sujetRec;
    }

    /**
     * @param string $sujetRec
     */
    public function setSujetRec($sujetRec)
    {
        $this->sujetRec = $sujetRec;
    }

    /**
     * @return string
     */
    public function getDescriptionRec()
    {
        return $this->descriptionRec;
    }

    /**
     * @param string $descriptionRec
     */
    public function setDescriptionRec($descriptionRec)
    {
        $this->descriptionRec = $descriptionRec;
    }

    /**
     * @return string
     */
    public function getDateRec()
    {
        return $this->dateRec;
    }

    /**
     * @param string $dateRec
     */
    public function setDateRec($dateRec)
    {
        $this->dateRec = $dateRec;
    }

    /**
     * @return int
     */
    public function getEtatRec()
    {
        return $this->etatRec;
    }

    /**
     * @param int $etatRec
     */
    public function setEtatRec($etatRec)
    {
        $this->etatRec = $etatRec;
    }

    /**
     * @return \User
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param \User $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }


}

