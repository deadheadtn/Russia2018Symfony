<?php

namespace Fedi\FediBundle\Entity;

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
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HOTEL", type="integer", nullable=true)
     */
    public $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ARRIVEE", type="string", length=20)
     */
    public $dateArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEPART", type="string", length=20, nullable=true)
     */
    public $dateDepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_NUIT", type="integer", nullable=true)
     */
    public $nbrNuit;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=20, nullable=true)
     */
    public $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_CHAMBRE", type="integer", nullable=true)
     */
    public $nbrChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_PERSONNE", type="integer", nullable=true)
     */
    public $nbrPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAT_RESERVATION", type="string", length=20, nullable=true)
     */
    public $etatReservation = 'NON_CONFIRME';

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    public $idUtilisateur;

    /**
     * Set idReservation
     *
     * @param string $idReservation
     *
     * @return Reservation
     */
    public function setidReservation($idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Get idReservation
     *
     * @return string
     */
    public function getidReservation()
    {
        return $this->idHotel;
    }

/**
 * Set dateArrivee
 *
 * @param string $dateArrivee
 *
 * @return Reservation
 */
public function setdateArrivee($dateArrivee)
{
    $this->dateArrivee = $dateArrivee;

    return $this;
}

/**
 * Get dateArrivee
 *
 * @return string
 */
public function getdateArrivee()
{
    return $this->dateArrivee;
}

    /**
     * Set dateDepart

     *
     * @param string $dateDepart

     *
     * @return Reservation
     */
    public function setdateDepart
    ($dateDepart
    )
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return string
     */
    public function getdateDepart()
    {
        return $this->dateDepart;
    }
    /**
     * Set idHotel
     *
     * @param string $idHotel
     *
     * @return Reservation
     */
    public function setidHotel($idHotel)
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    /**
     * Get idHotel
     *
     * @return string
     */
    public function getidHotel()
    {
        return $this->idHotel;
    }

}

