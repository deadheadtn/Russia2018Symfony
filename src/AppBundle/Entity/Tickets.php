<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets", indexes={@ORM\Index(name="ID_MATCH", columns={"ID_MATCH"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TICKET", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var \Match
     *
     * @ORM\ManyToOne(targetEntity="Match")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MATCH", referencedColumnName="id_match")
     * })
     */
    private $idMatch;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

