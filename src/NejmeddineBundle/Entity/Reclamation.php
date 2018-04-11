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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;


}

