<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="match",indexes={@ORM\Index(name="Duel", columns={"Duel"})})
 * @ORM\Entity
 */
class Match
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_match", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="date_match", type="string", length=20, nullable=false)
     */
    private $dateMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_match", type="string", length=20, nullable=false)
     */
    private $heureMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="Duel", type="string", length=50, nullable=false)
     */
    private $duel;

    /**
     * @var string
     *
     * @ORM\Column(name="Groupe", type="string", length=20, nullable=false)
     */
    private $groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="stade", type="string", length=20, nullable=false)
     */
    private $stade;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_ticket", type="integer", nullable=false)
     */
    private $nbrTicket;


}

