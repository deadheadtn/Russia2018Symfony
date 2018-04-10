<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationt
 *
 * @ORM\Table(name="reservationt", indexes={@ORM\Index(name="ID_UTILISATEUR", columns={"ID_UTILISATEUR"}), @ORM\Index(name="ID_TRANSPORT", columns={"ID_TRANSPORT"})})
 * @ORM\Entity
 */
class Reservationt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RESERVATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRANSPORT", type="integer", nullable=true)
     */
    private $idTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPART", type="string", length=20, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATION", type="string", length=20, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEPART", type="string", length=20, nullable=false)
     */
    private $dateDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ARRIVEE", type="string", length=20, nullable=false)
     */
    private $dateArrivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_VOYAGEURS", type="integer", nullable=false)
     */
    private $nbrVoyageurs;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAT", type="string", length=20, nullable=false)
     */
    private $etat = 'NON_CONFIRMER';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;


}

