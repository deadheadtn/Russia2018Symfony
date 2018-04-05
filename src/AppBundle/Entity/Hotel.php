<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HOTEL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_HOTEL", type="string", length=20, nullable=true)
     */
    private $nomHotel;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBR_ETOILE", type="integer", nullable=false)
     */
    private $nbrEtoile;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=20, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE", type="string", length=100, nullable=false)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=100, nullable=false)
     */
    private $adresse;


}

