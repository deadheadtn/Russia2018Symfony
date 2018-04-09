<?php
namespace NejmeddineBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * FollowUp
 *
 * @ORM\Table(name="follow_up")
 * @ORM\Entity
 */
class FollowUp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FOLLOWUP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFollowup;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FOLLOW", type="date", nullable=true)
     */
    private $dateFollow;
    /**
     * @var string
     *
     * @ORM\Column(name="STATUT_FOLLOW", type="string", length=20, nullable=true)
     */
    private $statutFollow;
}