<?php

namespace TouchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * member
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class member
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
     * @ORM\Column(name="memberAd", type="string", length=255)
     */
    private $memberAd;


    /**
     * @ORM\ManyToOne(targetEntity="grup", inversedBy="member")
     * @ORM\JoinColumn(name="grup_id", referencedColumnName="id")
     **/
    private $grup;


    /**
* @ORM\OneToOne(targetEntity="User", inversedBy="member")
     * @ORM\JoinColumn(name="fos_user_id", referencedColumnName="id")
     **/
    private $user;






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
     * Set memberAd
     *
     * @param string $memberAd
     * @return member
     */
    public function setMemberAd($memberAd)
    {
        $this->memberAd = $memberAd;

        return $this;
    }

    /**
     * Get memberAd
     *
     * @return string 
     */
    public function getMemberAd()
    {
        return $this->memberAd;
    }

    /**
     * Set grup
     *
     * @param \TouchBundle\Entity\grup $grup
     * @return member
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

    /**
     * Set user
     *
     * @param \TouchBundle\Entity\User $user
     * @return member
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
}
