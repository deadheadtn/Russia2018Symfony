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
     * @return int
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * @param int $idNews
     */
    public function setIdNews($idNews)
    {
        $this->idNews = $idNews;
    }

    /**
     * @return int
     */
    public function getIdCooperation()
    {
        return $this->idCooperation;
    }

    /**
     * @param int $idCooperation
     */
    public function setIdCooperation($idCooperation)
    {
        $this->idCooperation = $idCooperation;
    }

    /**
     * @return string
     */
    public function getTitreN()
    {
        return $this->titreN;
    }

    /**
     * @param string $titreN
     */
    public function setTitreN($titreN)
    {
        $this->titreN = $titreN;
    }

    /**
     * @return string
     */
    public function getTypeN()
    {
        return $this->typeN;
    }

    /**
     * @param string $typeN
     */
    public function setTypeN($typeN)
    {
        $this->typeN = $typeN;
    }

    /**
     * @return string
     */
    public function getMotCles()
    {
        return $this->motCles;
    }

    /**
     * @param string $motCles
     */
    public function setMotCles($motCles)
    {
        $this->motCles = $motCles;
    }

    /**
     * @return string
     */
    public function getTexteN()
    {
        return $this->texteN;
    }

    /**
     * @param string $texteN
     */
    public function setTexteN($texteN)
    {
        $this->texteN = $texteN;
    }

    /**
     * @return string
     */
    public function getImageN()
    {
        return $this->imageN;
    }

    /**
     * @param string $imageN
     */
    public function setImageN($imageN)
    {
        $this->imageN = $imageN;
    }
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

