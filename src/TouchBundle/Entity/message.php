<?php

namespace TouchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * message
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class message
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
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="readed", type="integer")
     */
    private $readed;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer")
     */
    private $deleted;


    /**
     * Gönderen
     * * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="message")
     * @ORM\JoinColumn(name="fos_user_id", referencedColumnName="id")
     **/
    private $user;

    /**
     * alan
     * * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="to")
     * @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     **/
    private $member;


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
     * Set message
     *
     * @param string $message
     * @return message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set readed
     *
     * @param integer $readed
     * @return message
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return integer 
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return message
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set user
     *
     * @param \TouchBundle\Entity\User $user
     * @return message
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
     * Set member
     *
     * @param \TouchBundle\Entity\User $member
     * @return message
     */
    public function setMember(\TouchBundle\Entity\User $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \TouchBundle\Entity\User 
     */
    public function getMember()
    {
        return $this->member;
    }
}
