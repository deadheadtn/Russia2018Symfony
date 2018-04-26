<?php

namespace Nesrine\JoueurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="NOM_EQUIPE", columns={"NOM_EQUIPE"})})
 * @ORM\Entity(repositoryClass="Nesrine\JoueurBundle\Repository\JoueurRepository")
 */
class Joueur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_JOUEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_J", type="string", length=20, nullable=true)
     */
    private $nomJ;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_J", type="string", length=20, nullable=true)
     */
    private $prenomJ;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE_J", type="integer", nullable=true)
     */
    private $ageJ;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_EQUIPE", type="string", length=20, nullable=true)
     */
    private $nomEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_J", type="integer", nullable=true)
     */
    private $numeroJ;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBBUTS_J", type="integer", nullable=true)
     */
    private $nbbutsJ;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLACEMENT_J", type="string", length=20, nullable=true)
     */
    private $emplacementJ;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_J", type="string", length=255, nullable=true)
     */
    public $photoJ;

    /**
     * @Assert\File(maxSize="500k")
     */
    public $file;

    /**
     * @var string
     *
     * @ORM\Column(name="APPRECIATION_J", type="string", length=20, nullable=true)
     */
    private $appreciationJ;

    /**
     * @var string
     *
     * @ORM\Column(name="NATIONALITE_J", type="string", length=20, nullable=true)
     */
    private $nationaliteJ;
    public function getidJoueur()
    {
        return $this->idJoueur;
    }
    public function setidJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }

    public function getnomJ()
    {
        return $this->nomJ;
    }
    public function setnomJ($nomJ)
    {
        $this->nomJ = $nomJ;

        return $this;
    }

    public function getprenomJ()
    {
        return $this->prenomJ;
    }
    public function setprenomJ($prenomJ)
    {
        $this->prenomJ = $prenomJ;

        return $this;
    }

    public function getageJ()
    {
        return $this->ageJ;
    }
    public function setageJ($ageJ)
    {
        $this->ageJ = $ageJ;

        return $this;
    }
    public function getnomEquipe()
    {
        return $this->nomEquipe;
    }
    public function setnomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getnumeroJ()
    {
        return $this->numeroJ;
    }
    public function setnumeroJ($numeroJ)
    {
        $this->numeroJ = $numeroJ;

        return $this;
    }

    public function getnbbutsJ()
    {
        return $this->nbbutsJ;
    }
    public function setnbbutsJ($nbbutsJ)
    {
        $this->nbbutsJ = $nbbutsJ;

        return $this;
    }

    public function getemplacementJ()
    {
        return $this->emplacementJ;
    }
    public function setemplacementJ($emplacementJ)
    {
        $this->emplacementJ = $emplacementJ;

        return $this;
    }

    public function getWebPath(){
        return null===$this->photoJ ? null : $this->getUploadDir.'/'.$this->photoJ;
    }

    protected function getUploadRootDir(){
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir(){
        return 'images';
    }

    public function uploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->photoJ=$this->file->getClientOriginalName();
        $this->file=null;
    }

    /**
     * Get photoJ
     *
     * @return string
     */
    public function getphotoJ()
    {
        return $this->photoJ;
    }

    /**
     * Set photoJ
     *
     * @param string $photoJ
     *
     * @return Categorie
     */
    public function setphotoJ($photoJ)
    {
        $this->photoJ = $photoJ;

        return $this;
    }


    public function getappreciationJ()
    {
        return $this->appreciationJ;
    }
    public function setappreciationJ($appreciationJ)
    {
        $this->appreciationJ = $appreciationJ;

        return $this;
    }

    public function getnationaliteJ()
    {
        return $this->nationaliteJ;
    }
    public function setnationaliteJ($nationaliteJ)
    {
        $this->nationaliteJ = $nationaliteJ;

        return $this;
    }
}

