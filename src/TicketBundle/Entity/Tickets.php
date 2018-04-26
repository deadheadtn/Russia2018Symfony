<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\TicketsRepository")
 */
class Tickets
{/**
 * @var integer
 *
 * @ORM\Column(name="ID_TICKET", type="integer", nullable=false)
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $idTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIX", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_Ticket", type="string", length=20, nullable=false)
     */
    private $etatTicket = 'Non Vendu';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Ajout", type="datetime", nullable=true)
     */
    private $dateAjout = 'CURRENT_TIMESTAMP';


    /**
     * @return int
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * @param int $idTicket
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;
    }



    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEtatTicket()
    {
        return $this->etatTicket;
    }

    /**
     * @param string $etatTicket
     */
    public function setEtatTicket($etatTicket)
    {
        $this->etatTicket = $etatTicket;
    }

    /**
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * @param \DateTime $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }




    /**
     * @return \User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \User $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

}

