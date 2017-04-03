<?php

namespace NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="NewsletterBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="rpcampaign", type="string", length=255, unique=true)
     */
    private $rpcampaign;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

  /**
   * @ORM\ManyToOne(targetEntity="NewsletterBundle\Entity\Campaign", cascade={"persist"})
   */
    private $campaign;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Newsletter
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
     * Set rpcampaign
     *
     * @param string $rpcampaign
     *
     * @return Newsletter
     */
    public function setRpcampaign($rpcampaign)
    {
        $this->rpcampaign = $rpcampaign;

        return $this;
    }

    /**
     * Get rpcampaign
     *
     * @return string
     */
    public function getRpcampaign()
    {
        return $this->rpcampaign;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Newsletter
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set campaign
     *
     * @param \NewsletterBundle\Entity\Campaign $campaign
     *
     * @return Newsletter
     */
    public function setCampaign(\NewsletterBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \NewsletterBundle\Entity\Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
}
