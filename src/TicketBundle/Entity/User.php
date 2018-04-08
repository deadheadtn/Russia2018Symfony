<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="situationProf", type="string", length=255, nullable=true)
     */
    private $situationprof;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=255, nullable=true)
     */
    private $secteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="experienceTot", type="integer", nullable=true)
     */
    private $experiencetot;

    /**
     * @var integer
     *
     * @ORM\Column(name="solde", type="integer", nullable=true)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="paysNatal", type="string", length=40, nullable=true)
     */
    private $paysnatal;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrfinancement", type="integer", nullable=false)
     */
    private $nbrfinancement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrVote", type="integer", nullable=false)
     */
    private $nbrvote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrcommentaire", type="integer", nullable=false)
     */
    private $nbrcommentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrprojetssuivis", type="integer", nullable=false)
     */
    private $nbrprojetssuivis;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true)
     */
    private $facebookAccessToken;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true)
     */
    private $googleId;

    /**
     * @var string
     *
     * @ORM\Column(name="google_access_token", type="string", length=255, nullable=true)
     */
    private $googleAccessToken;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_id", type="string", length=255, nullable=true)
     */
    private $linkedinId;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_access_token", type="string", length=255, nullable=true)
     */
    private $linkedinAccessToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrCommentaireProbleme", type="integer", nullable=true)
     */
    private $nbrcommentaireprobleme;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrProbleme", type="integer", nullable=true)
     */
    private $nbrprobleme;


}

