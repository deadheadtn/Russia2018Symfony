<?php

namespace Fedi\FediBundle\Entity;

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
     * @ORM\Column(name="ID_RESERVATION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idReservation;
    /**
     * @var \Fedi\FediBundle\Entity\Transport
     *@ORM\ManyToOne(targetEntity="\Fedi\FediBundle\Entity\Transport")
     *      * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="ID_TRANSPORT", referencedColumnName="ID_TRANSPORT")
     *  })
     */

    public $idTransport;

    /**
     * @var string
     *
     *      * @ORM\Column(name="TYPE", type="integer", nullable=false)
    @ORM\Column(name="TYPE", type="string", length=20)
     */
   public  $type;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPART", type="string", length=20)
     */
    private $depart;
    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATION", type="string", length=20)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEPART", type="string", length=20)
     */
    private $dateDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ARRIVEE", type="string", length=20)
     */
    private $dateArrivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_VOYAGEURS", type="integer")
     */
    private $nbrVoyageurs;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAT", type="string", length=20)
     */
    public $etat = 'NON_CONFIRMER';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UTILISATEUR", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * Set type

     *
     * @param string $type

     *
     * @return Reservationt
     */
    public function settype
    ($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function gettype()
    {
        return $this->type;
    }
    /**
     * Get depart
     *
     * @return string
     */
    public function getdepart()
    {
        return $this->depart;
    }
    /**
     * Set depart
     *
     * @param string $depart
     *
     * @return Reservationt
     */
    public function setdepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }
    /**
     * Get destination
     *
     * @return string
     */
    public function getdestination()
    {
        return $this->destination;
    }
    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Reservationt
     */
    public function setdestination($destination)
    {
        $this->destination = $destination;

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
     * Set dateDepart
     *
     * @param string $dateDepart
     *
     * @return Reservationt
     */
    public function setdateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }
    /**
     * Get dateArrivee

     *
     * @return string
     */
    public function getdateArrivee
    ()
    {
        return $this->dateArrivee
            ;
    }
    /**
     * Set dateArrivee

     *
     * @param string $dateArrivee

     *
     * @return Reservationt
     */
    public function setdateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }
    /**
     * Get nbrVoyageurs

     *
     * @return string
     */
    public function getnbrVoyageurs
    ()
    {
        return $this->nbrVoyageurs
            ;
    }
    /**
     * Set nbrVoyageurs

     *
     * @param string $nbrVoyageurs

     *
     * @return Reservationt
     */
    public function setnbrVoyageurs($nbrVoyageurs)
    {
        $this->nbrVoyageurs = $nbrVoyageurs;

        return $this;
    }

    /**
     * Get idTransport
     *
     * @return string
     */
    public function getidTransport()
    {
        return $this->idTransport;
    }
    /**
     * Set idTransport
     *
     * @param string $idTransport
     *
     * @return Reservationt
     */
    public function setidTransport($idTransport)
    {
        $this->idTransport = $idTransport;

        return $this;
    }
    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Reservationt
     */
    public function setidUtilisateur($idUtilisateur)
    {
        $this->idHotel = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getidUtilisateur()
    {
        return $this->idUtilisateur;
    }
}

