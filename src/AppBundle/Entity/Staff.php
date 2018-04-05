<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff", indexes={@ORM\Index(name="NOM_EQUIPE", columns={"NOM_EQUIPE"})})
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_STAFF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStaff;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_S", type="string", length=20, nullable=true)
     */
    private $nomS;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_S", type="string", length=20, nullable=true)
     */
    private $prenomS;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="FONCTION_S", type="string", length=20, nullable=true)
     */
    private $fonctionS;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESENCE_S", type="string", length=20, nullable=true)
     */
    private $presenceS;


}

