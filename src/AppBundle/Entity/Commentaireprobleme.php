<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaireprobleme
 *
 * @ORM\Table(name="commentaireprobleme", indexes={@ORM\Index(name="IDX_7D32A43A36108C11", columns={"idProbleme_cp"}), @ORM\Index(name="IDX_7D32A43A57E28490", columns={"idUser_cp"}), @ORM\Index(name="idProbleme", columns={"idProbleme_cp", "idUser_cp"})})
 * @ORM\Entity
 */
class Commentaireprobleme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommentaire", type="datetime", nullable=false)
     */
    private $datecommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrVote", type="integer", nullable=false)
     */
    private $nbrvote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean", nullable=false)
     */
    private $valide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notif", type="boolean", nullable=false)
     */
    private $notif;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProbleme_cp", type="integer", nullable=true)
     */
    private $idproblemeCp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser_cp", type="integer", nullable=true)
     */
    private $iduserCp;

    /**
     * @var integer
     *
     * @ORM\Column(name="notificationadmin", type="integer", nullable=true)
     */
    private $notificationadmin = '1';


}

