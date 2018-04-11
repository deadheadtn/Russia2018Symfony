<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="FK_CHOISIR", columns={"ID_HOTEL"}), @ORM\Index(name="ID_UTILISATEUR", columns={"ID_UTILISATEUR"})})
 * @ORM\Entity
 */
class Reservation
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
     * @ORM\Column(name="ID_HOTEL", type="integer", nullable=true)
     */
    private $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ARRIVEE", type="string", length=20, nullable=true)
     */
    private $dateArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEPART", type="string", length=20, nullable=true)
     */
    private $dateDepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_NUIT", type="integer", nullable=true)
     */
    private $nbrNuit;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_CHAMBRE", type="integer", nullable=true)
     */
    private $nbrChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_PERSONNE", type="integer", nullable=true)
     */
    private $nbrPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAT_RESERVATION", type="string", length=20, nullable=true)
     */
    private $etatReservation = 'NON_CONFIRME';

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;


}

