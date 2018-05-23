<?php

namespace Fedi\FediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity(repositoryClass="Fedi\FediBundle\Repository\TransportRepository")
 */
class Transport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRANSPORT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=20)
     */
    private $type;

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
     * @return Transport
     */
    public function setidTransport($idTransport)
    {
        $this->idTransport = $idTransport;

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
     * Set type
     *
     * @param string $type
     *
     * @return Transport
     */
    public function settype($type)
    {
        $this->type = $type;

        return $this;
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
     * @return Transport
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
     * @return Transport
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
     * @return Transport
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
     * @return Transport
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
     * @return Transport
     */
    public function setnbrVoyageurs($nbrVoyageurs)
    {
        $this->nbrVoyageurs = $nbrVoyageurs;

        return $this;
    }

    public function __toString() {
        return (string) $this->nbrVoyageurs; }
}

