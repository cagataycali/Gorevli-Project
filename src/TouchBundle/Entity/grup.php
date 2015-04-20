<?php

namespace TouchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * grup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class grup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="grupAd", type="string", length=255)
     */
    private $grupAd;


    /**
     *
     * * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="grup")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="announcement", mappedBy="grup")
     **/
    private $announcement;
    /**
     * @ORM\OneToMany(targetEntity="member", mappedBy="grup")
     **/
    private $member;

    public function __construct()
    {

        // your own logic

        $this->member = new ArrayCollection(); //
        $this->announcement = new ArrayCollection(); //duyuruları
    }



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
     * Set grupAd
     *
     * @param string $grupAd
     * @return grup
     */
    public function setGrupAd($grupAd)
    {
        $this->grupAd = $grupAd;

        return $this;
    }

    /**
     * Get grupAd
     *
     * @return string 
     */
    public function getGrupAd()
    {
        return $this->grupAd;
    }

    /**
     * Set user
     *
     * @param \TouchBundle\Entity\User $user
     * @return grup
     */
    public function setUser(\TouchBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \TouchBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add announcement
     *
     * @param \TouchBundle\Entity\announcement $announcement
     * @return grup
     */
    public function addAnnouncement(\TouchBundle\Entity\announcement $announcement)
    {
        $this->announcement[] = $announcement;

        return $this;
    }

    /**
     * Remove announcement
     *
     * @param \TouchBundle\Entity\announcement $announcement
     */
    public function removeAnnouncement(\TouchBundle\Entity\announcement $announcement)
    {
        $this->announcement->removeElement($announcement);
    }

    /**
     * Get announcement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Add member
     *
     * @param \TouchBundle\Entity\member $member
     * @return grup
     */
    public function addMember(\TouchBundle\Entity\member $member)
    {
        $this->member[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \TouchBundle\Entity\member $member
     */
    public function removeMember(\TouchBundle\Entity\member $member)
    {
        $this->member->removeElement($member);
    }

    /**
     * Get member
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMember()
    {
        return $this->member;
    }
}
