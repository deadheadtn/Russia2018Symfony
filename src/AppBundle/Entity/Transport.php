<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity
 */
class Transport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRANSPORT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="DEPART", type="string", length=20, nullable=true)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATION", type="string", length=20, nullable=true)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_DEPART", type="string", length=20, nullable=true)
     */
    private $dateDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_ARRIVEE", type="string", length=20, nullable=true)
     */
    private $dateArrivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_VOYAGEURS", type="integer", nullable=false)
     */
    private $nbrVoyageurs;


}

