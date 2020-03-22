<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EditionRepository")
 */
class Edition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event", inversedBy="editions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Department", inversedBy="editions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $department;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lodging;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $transport;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $best_seller;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $worst_seller;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pickup_place;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $pickup_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $load_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $departure;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $return_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(?string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getLodging(): ?string
    {
        return $this->lodging;
    }

    public function setLodging(?string $lodging): self
    {
        $this->lodging = $lodging;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(?string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getBestSeller(): ?string
    {
        return $this->best_seller;
    }

    public function setBestSeller(?string $best_seller): self
    {
        $this->best_seller = $best_seller;

        return $this;
    }

    public function getWorstSeller(): ?string
    {
        return $this->worst_seller;
    }

    public function setWorstSeller(string $worst_seller): self
    {
        $this->worst_seller = $worst_seller;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getPickupPlace(): ?string
    {
        return $this->pickup_place;
    }

    public function setPickupPlace(?string $pickup_place): self
    {
        $this->pickup_place = $pickup_place;

        return $this;
    }

    public function getPickupDate(): ?\DateTimeInterface
    {
        return $this->pickup_date;
    }

    public function setPickupDate(?\DateTimeInterface $pickup_date): self
    {
        $this->pickup_date = $pickup_date;

        return $this;
    }

    public function getLoadDate(): ?\DateTimeInterface
    {
        return $this->load_date;
    }

    public function setLoadDate(?\DateTimeInterface $load_date): self
    {
        $this->load_date = $load_date;

        return $this;
    }

    public function getDeparture(): ?\DateTimeInterface
    {
        return $this->departure;
    }

    public function setDeparture(?\DateTimeInterface $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getReturnDate(): ?\DateTimeInterface
    {
        return $this->return_date;
    }

    public function setReturnDate(?\DateTimeInterface $return_date): self
    {
        $this->return_date = $return_date;

        return $this;
    }
}
