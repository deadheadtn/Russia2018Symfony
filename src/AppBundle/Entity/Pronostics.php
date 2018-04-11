<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pronostics
 *
 * @ORM\Table(name="pronostics", indexes={@ORM\Index(name="NOM_EQUIPE", columns={"ID_EQUIPE"})})
 * @ORM\Entity
 */
class Pronostics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQUIPE", type="integer", nullable=false)
     */
    private $idEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="VOTE", type="integer", nullable=false)
     */
    private $vote;


}

