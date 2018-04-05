<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Probleme
 *
 * @ORM\Table(name="probleme", indexes={@ORM\Index(name="IDX_7AB2D714DABCD33D", columns={"idUser_prob"})})
 * @ORM\Entity
 */
class Probleme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProbleme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprobleme;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveauRequis", type="integer", nullable=false)
     */
    private $niveaurequis;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatProbleme", type="string", length=255, nullable=false)
     */
    private $etatprobleme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProbleme", type="datetime", nullable=false)
     */
    private $dateprobleme;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=255, nullable=false)
     */
    private $secteur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean", nullable=false)
     */
    private $valide;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrCommentaireProbleme", type="integer", nullable=false)
     */
    private $nbrcommentaireprobleme;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser_prob", type="integer", nullable=true)
     */
    private $iduserProb;

    /**
     * @var integer
     *
     * @ORM\Column(name="notificationadmin", type="integer", nullable=true)
     */
    private $notificationadmin;


}

