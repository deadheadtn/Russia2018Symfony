<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SituationEquipe
 *
 * @ORM\Table(name="situation_equipe",indexes={@ORM\Index(name="nomequipe", columns={"nomequipe"})})
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\SituationEquipeRepository")
 */
class SituationEquipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var int
     *
     * @ORM\Column(name="joue", type="integer")
     */
    public $joue;

    /**
     * @var int
     *
     * @ORM\Column(name="victoire", type="integer")
     */
    public $victoire;

    /**
     * @var int
     *
     * @ORM\Column(name="equiv", type="integer")
     */
    public $equiv;

    /**
     * @var int
     *
     * @ORM\Column(name="defaite", type="integer")
     */
    public $defaite;

    /**
     * @var int
     *
     * @ORM\Column(name="GF", type="integer")
     */
    public $gF;

    /**
     * @var int
     *
     * @ORM\Column(name="GS", type="integer")
     */
    public $gS;

    /**
     * @var int
     *
     * @ORM\Column(name="pts", type="integer")
     */
    public $pts;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomequipe", referencedColumnName="ID_EQUIPE")
     * })
     */
    public $nomequipe;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set joue
     *
     * @param integer $joue
     *
     * @return SituationEquipe
     */
    public function setJoue($joue)
    {
        $this->joue = $joue;
    
        return $this;
    }

    /**
     * Get joue
     *
     * @return integer
     */
    public function getJoue()
    {
        return $this->joue;
    }

    /**
     * Set victoire
     *
     * @param integer $victoire
     *
     * @return SituationEquipe
     */
    public function setVictoire($victoire)
    {
        $this->victoire = $victoire;
    
        return $this;
    }

    /**
     * Get victoire
     *
     * @return integer
     */
    public function getVictoire()
    {
        return $this->victoire;
    }

    /**
     * Set equiv
     *
     * @param integer $equiv
     *
     * @return SituationEquipe
     */
    public function setEquiv($equiv)
    {
        $this->equiv = $equiv;
    
        return $this;
    }

    /**
     * Get equiv
     *
     * @return integer
     */
    public function getEquiv()
    {
        return $this->equiv;
    }

    /**
     * Set defaite
     *
     * @param integer $defaite
     *
     * @return SituationEquipe
     */
    public function setDefaite($defaite)
    {
        $this->defaite = $defaite;
    
        return $this;
    }

    /**
     * Get defaite
     *
     * @return integer
     */
    public function getDefaite()
    {
        return $this->defaite;
    }

    /**
     * Set gF
     *
     * @param integer $gF
     *
     * @return SituationEquipe
     */
    public function setGF($gF)
    {
        $this->gF = $gF;
    
        return $this;
    }

    /**
     * Get gF
     *
     * @return integer
     */
    public function getGF()
    {
        return $this->gF;
    }

    /**
     * Set gS
     *
     * @param integer $gS
     *
     * @return SituationEquipe
     */
    public function setGS($gS)
    {
        $this->gS = $gS;
    
        return $this;
    }

    /**
     * Get gS
     *
     * @return integer
     */
    public function getGS()
    {
        return $this->gS;
    }

    /**
     * Set pts
     *
     * @param integer $pts
     *
     * @return SituationEquipe
     */
    public function setPts($pts)
    {
        $this->pts = $pts;
    
        return $this;
    }

    /**
     * Get pts
     *
     * @return integer
     */
    public function getPts()
    {
        return $this->pts;
    }

    /**
     * Set nomequipe
     *
     * @param string $nomequipe
     *
     * @return SituationEquipe
     */
    public function setNomequipe($nomequipe)
    {
        $this->nomequipe = $nomequipe;
    
        return $this;
    }

    /**
     * Get nomequipe
     *
     * @return string
     */
    public function getNomequipe()
    {
        return $this->nomequipe;
    }
}

