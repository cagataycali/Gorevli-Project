<?php

namespace TouchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * announcement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class announcement
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


    /**
     * @var string
     *
     * @ORM\Column(name="announcement", type="string", length=255)
     */
    private $announcement;

    /**
     *
     * * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="announcement")
     * @ORM\JoinColumn(name="fos_user_id", referencedColumnName="id")
     **/
    private $user;

    /**
     *
     * * @var integer
     *
     * @ORM\ManyToOne(targetEntity="grup", inversedBy="announcement")
     * @ORM\JoinColumn(name="grup_id", referencedColumnName="id")
     **/
    private $grup;


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
     * Set title
     *
     * @param string $title
     * @return announcement
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set announcement
     *
     * @param string $announcement
     * @return announcement
     */
    public function setAnnouncement($announcement)
    {
        $this->announcement = $announcement;

        return $this;
    }

    /**
     * Get announcement
     *
     * @return string 
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Set user
     *
     * @param \TouchBundle\Entity\User $user
     * @return announcement
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
     * Set grup
     *
     * @param \TouchBundle\Entity\grup $grup
     * @return announcement
     */
    public function setGrup(\TouchBundle\Entity\grup $grup = null)
    {
        $this->grup = $grup;

        return $this;
    }

    /**
     * Get grup
     *
     * @return \TouchBundle\Entity\grup 
     */
    public function getGrup()
    {
        return $this->grup;
    }
}
