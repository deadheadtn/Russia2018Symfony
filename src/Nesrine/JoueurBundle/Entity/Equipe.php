<?php

namespace Nesrine\JoueurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=255, nullable=true)
     */
    public $logo;

    /**
     * @Assert\File(maxSize="500k")
     */
    public $file;


    /**
     * @var integer
     *
     * @ORM\Column(name="CLASSEMENT", type="integer", nullable=true)
     */
    private $classement;

    public function getidEquipe()
    {
        return $this->idEquipe;
    }
    public function setidEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;

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

    public function getgroupe()
    {
        return $this->groupe;
    }
    public function setgroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getpays()
    {
        return $this->pays;
    }
    public function setpays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getWebPath(){
        return null===$this->logo ? null : $this->getUploadDir.'/'.$this->logo;
    }

    protected function getUploadRootDir(){
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir(){
        return 'images';
    }

    public function uploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->logo=$this->file->getClientOriginalName();
        $this->file=null;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getlogo()
    {
        return $this->logo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Categorie
     */
    public function setphotoJ($logo)
    {
        $this->photoJ = $logo;

        return $this;
    }

    public function getclassement()
    {
        return $this->classement;
    }
    public function setclassement($classement)
    {
        $this->classement = $classement;

        return $this;
    }

}

