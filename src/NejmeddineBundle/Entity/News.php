<?php

namespace NejmeddineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news", indexes={@ORM\Index(name="FK_COOPERER", columns={"ID_COOPERATION"})})
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NEWS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNews;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COOPERATION", type="integer", nullable=false)
     */
    private $idCooperation;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_N", type="string", length=100, nullable=true)
     */
    private $titreN;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_N", type="string", length=20, nullable=true)
     */
    private $typeN;

    /**
     * @var string
     *
     * @ORM\Column(name="MOT_CLES", type="string", length=20, nullable=true)
     */
    private $motCles;

    /**
     * @var string
     *
     * @ORM\Column(name="TEXTE_N", type="text", length=65535, nullable=true)
     */
    private $texteN;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE_N", type="string", length=200, nullable=true)
     */
    private $imageN;


}

