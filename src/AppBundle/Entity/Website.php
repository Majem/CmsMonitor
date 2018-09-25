<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="websites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WebsiteRepository")
 */
class Website
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="site_name", type="string", length=255)
     */
    private $siteName;

    /**
     * @var string
     *
     * @ORM\Column(name="site_name_alias", type="string", length=255, nullable=true)
     */
    private $siteNameAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="site_url", type="string", length=255)
     */
    private $siteUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="site_ssl", type="boolean")
     */
    private $siteSsl;


    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="websites", cascade={"persist", "merge"})
     */
    private $users;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set siteName
     *
     * @param string $siteName
     *
     * @return Website
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get siteName
     *
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set siteNameAlias
     *
     * @param string $siteNameAlias
     *
     * @return Website
     */
    public function setSiteNameAlias($siteNameAlias)
    {
        $this->siteNameAlias = $siteNameAlias;

        return $this;
    }

    /**
     * Get siteNameAlias
     *
     * @return string
     */
    public function getSiteNameAlias()
    {
        return $this->siteNameAlias;
    }

    /**
     * Set siteUrl
     *
     * @param string $siteUrl
     *
     * @return Website
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Get siteUrl
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set siteSsl
     *
     * @param boolean $siteSsl
     *
     * @return Website
     */
    public function setSiteSsl($siteSsl)
    {
        $this->siteSsl = $siteSsl;

        return $this;
    }

    /**
     * Get siteSsl
     *
     * @return bool
     */
    public function getSiteSsl()
    {
        return $this->siteSsl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Website
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
