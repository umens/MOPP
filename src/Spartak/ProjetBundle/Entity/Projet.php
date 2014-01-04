<?php

namespace Spartak\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Spartak\ProjetBundle\Entity\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maintenace_begin", type="datetime")
     */
    private $maintenaceBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maintenance_end", type="datetime")
     */
    private $maintenanceEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="github_url", type="string", length=255)
     */
    private $githubUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     * @return Projet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set maintenaceBegin
     *
     * @param \DateTime $maintenaceBegin
     * @return Projet
     */
    public function setMaintenaceBegin($maintenaceBegin)
    {
        $this->maintenaceBegin = $maintenaceBegin;

        return $this;
    }

    /**
     * Get maintenaceBegin
     *
     * @return \DateTime 
     */
    public function getMaintenaceBegin()
    {
        return $this->maintenaceBegin;
    }

    /**
     * Set maintenanceEnd
     *
     * @param \DateTime $maintenanceEnd
     * @return Projet
     */
    public function setMaintenanceEnd($maintenanceEnd)
    {
        $this->maintenanceEnd = $maintenanceEnd;

        return $this;
    }

    /**
     * Get maintenanceEnd
     *
     * @return \DateTime 
     */
    public function getMaintenanceEnd()
    {
        return $this->maintenanceEnd;
    }

    /**
     * Set githubUrl
     *
     * @param string $githubUrl
     * @return Projet
     */
    public function setGithubUrl($githubUrl)
    {
        $this->githubUrl = $githubUrl;

        return $this;
    }

    /**
     * Get githubUrl
     *
     * @return string 
     */
    public function getGithubUrl()
    {
        return $this->githubUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
