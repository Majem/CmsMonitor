<?php
/**
 * Created by PhpStorm.
 * user: m.maciejewski
 * Date: 12.09.2018
 * Time: 12:18
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="users")
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
     * @ORM\ManyToMany(targetEntity="Website", inversedBy="users", cascade={"persist", "merge"})
     * @ORM\JoinTable(
     *     name="user_websites",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="website_id", referencedColumnName="id", nullable=false)}
     * )
     *
    */
    private $websites;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add website
     *
     * @param \AppBundle\Entity\Website $website
     *
     * @return User
     */
    public function addWebsite(\AppBundle\Entity\Website $website)
    {
        $this->websites[] = $website;

        return $this;
    }

    /**
     * Remove website
     *
     * @param \AppBundle\Entity\Website $website
     */
    public function removeWebsite(\AppBundle\Entity\Website $website)
    {
        $this->websites->removeElement($website);
    }

    /**
     * Get websites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWebsites()
    {
        return $this->websites;
    }
}
