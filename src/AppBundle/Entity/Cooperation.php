<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cooperation
 *
 * @ORM\Table(name="cooperation")
 * @ORM\Entity
 */
class Cooperation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COOPERATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCooperation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ADMIN", type="integer", nullable=false)
     */
    private $idAdmin;


}

