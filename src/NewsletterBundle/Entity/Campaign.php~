<?php

namespace NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaign
 *
 * @ORM\Table(name="campaign")
 * @ORM\Entity(repositoryClass="NewsletterBundle\Repository\CampaignRepository")
 */
class Campaign
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion", type="string", length=255)
     */
    private $promotion;

    /**
     * @var int
     *
     * @ORM\Column(name="open", type="integer", unique=true)
     */
    private $open;

    /**
     * @var int
     *
     * @ORM\Column(name="bounce", type="integer")
     */
    private $bounce;

    /**
     * @var int
     *
     * @ORM\Column(name="click", type="integer")
     */
    private $click;


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
     * Set title
     *
     * @param string $title
     *
     * @return Campaign
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
     * Set rpcampaign
     *
     * @param string $rpcampaign
     *
     * @return Campaign
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
     * Set open
     *
     * @param integer $open
     *
     * @return Campaign
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return int
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set bounce
     *
     * @param integer $bounce
     *
     * @return Campaign
     */
    public function setBounce($bounce)
    {
        $this->bounce = $bounce;

        return $this;
    }

    /**
     * Get bounce
     *
     * @return int
     */
    public function getBounce()
    {
        return $this->bounce;
    }

    /**
     * Set click
     *
     * @param integer $click
     *
     * @return Campaign
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Get click
     *
     * @return int
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Set promotion
     *
     * @param string $promotion
     *
     * @return Campaign
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return string
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}
