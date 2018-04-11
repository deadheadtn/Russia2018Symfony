<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EQUIPE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUPE", type="string", length=20, nullable=true)
     */
    private $groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS", type="string", length=20, nullable=true)
     */
    private $pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="CLASSEMENT", type="integer", nullable=true)
     */
    private $classement;


}

