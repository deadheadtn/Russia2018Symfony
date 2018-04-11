<?php

namespace Fedi\FediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="Fedi\FediBundle\Repository\HotelRepository")
 */
class Hotel
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="ID_HOTEL", type="string", length=255)
      * @ORM\GeneratedValue(strategy="AUTO")

     */
    private $idHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_HOTEL", type="string", length=255)
     */
    private $nomHotel;

    /**
     * @var int
     *
     * @ORM\Column(name="NBR_ETOILE", type="integer")
     */
    private $nbrEtoile;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE", type="string", length=255)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=255)
     */
    private $adresse;




    /**
     * Set idHotel
     *
     * @param string $idHotel
     *
     * @return Hotel
     */
    public function setIdHotel($idHotel)
    {
        $this->idHotel = $idHotel;
    
        return $this;
    }

    /**
     * Get idHotel
     *
     * @return string
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }

    /**
     * Set nomHotel
     *
     * @param string $nomHotel
     *
     * @return Hotel
     */
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;
    
        return $this;
    }

    /**
     * Get nomHotel
     *
     * @return string
     */
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

    /**
     * Set nbrEtoile
     *
     * @param integer $nbrEtoile
     *
     * @return Hotel
     */
    public function setNbrEtoile($nbrEtoile)
    {
        $this->nbrEtoile = $nbrEtoile;
    
        return $this;
    }

    /**
     * Get nbrEtoile
     *
     * @return integer
     */
    public function getNbrEtoile()
    {
        return $this->nbrEtoile;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Hotel
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Hotel
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return Hotel
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Hotel
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

}

