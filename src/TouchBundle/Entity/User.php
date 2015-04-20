<?php
namespace TouchBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="grup", mappedBy="user")
     **/
    private $grup;

    /**
     * @ORM\OneToMany(targetEntity="announcement", mappedBy="user")
     **/
    private $announcement;

    /**
     * @ORM\OneToMany(targetEntity="message", mappedBy="user")
     **/
    private $message;

    /**
     * @ORM\OneToMany(targetEntity="message", mappedBy="user")
     **/
    private $to;


    /**
     * @ORM\OneToOne(targetEntity="member", mappedBy="user")
     **/
    private $member;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->grup = new ArrayCollection(); // gruplar
        $this->announcement = new ArrayCollection(); //duyurular
        $this->message =new ArrayCollection(); //mesajlar
        $this->to = new ArrayCollection(); //
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
     * Add grup
     *
     * @param \TouchBundle\Entity\grup $grup
     * @return User
     */
    public function addGrup(\TouchBundle\Entity\grup $grup)
    {
        $this->grup[] = $grup;

        return $this;
    }

    /**
     * Remove grup
     *
     * @param \TouchBundle\Entity\grup $grup
     */
    public function removeGrup(\TouchBundle\Entity\grup $grup)
    {
        $this->grup->removeElement($grup);
    }

    /**
     * Get grup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrup()
    {
        return $this->grup;
    }

    /**
     * Add announcement
     *
     * @param \TouchBundle\Entity\announcement $announcement
     * @return User
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
     * Add message
     *
     * @param \TouchBundle\Entity\message $message
     * @return User
     */
    public function addMessage(\TouchBundle\Entity\message $message)
    {
        $this->message[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \TouchBundle\Entity\message $message
     */
    public function removeMessage(\TouchBundle\Entity\message $message)
    {
        $this->message->removeElement($message);
    }

    /**
     * Get message
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Add to
     *
     * @param \TouchBundle\Entity\message $to
     * @return User
     */
    public function addTo(\TouchBundle\Entity\message $to)
    {
        $this->to[] = $to;

        return $this;
    }

    /**
     * Remove to
     *
     * @param \TouchBundle\Entity\message $to
     */
    public function removeTo(\TouchBundle\Entity\message $to)
    {
        $this->to->removeElement($to);
    }

    /**
     * Get to
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set member
     *
     * @param \TouchBundle\Entity\member $member
     * @return User
     */
    public function setMember(\TouchBundle\Entity\member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \TouchBundle\Entity\member 
     */
    public function getMember()
    {
        return $this->member;
    }
}
