<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="NOM_EQUIPE", columns={"NOM_EQUIPE"})})
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_JOUEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_J", type="string", length=20, nullable=true)
     */
    private $nomJ;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_J", type="string", length=20, nullable=true)
     */
    private $prenomJ;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_J", type="integer", nullable=true)
     */
    private $numeroJ;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBBUTS_J", type="integer", nullable=true)
     */
    private $nbbutsJ;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLACEMENT_J", type="string", length=20, nullable=true)
     */
    private $emplacementJ;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_J", type="string", length=20, nullable=true)
     */
    private $photoJ;

    /**
     * @var string
     *
     * @ORM\Column(name="APPRECIATION_J", type="string", length=20, nullable=true)
     */
    private $appreciationJ;

    /**
     * @var string
     *
     * @ORM\Column(name="NATIONALITE_J", type="string", length=20, nullable=true)
     */
    private $nationaliteJ;


}

