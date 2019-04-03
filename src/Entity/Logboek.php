<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Begeleidsbriefnr;

    /**
     * @ORM\Column(type="date")
     */
    private $Datum;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Chauffeur;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Truck;

    /**
     * @ORM\Column(type="integer")
     */
    private $Aantalm3;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Laadlocatie;

    /**
     * @ORM\Column(type="time")
     */
    private $tijdvertrek;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Bestemming;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBegeleidsbriefnr(): ?int
    {
        return $this->Begeleidsbriefnr;
    }

    public function setBegeleidsbriefnr(int $Begeleidsbriefnr): self
    {
        $this->Begeleidsbriefnr = $Begeleidsbriefnr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->Datum;
    }

    public function setDatum(\DateTimeInterface $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getChauffeur(): ?string
    {
        return $this->Chauffeur;
    }

    public function setChauffeur(string $Chauffeur): self
    {
        $this->Chauffeur = $Chauffeur;

        return $this;
    }

    public function getTruck(): ?string
    {
        return $this->Truck;
    }

    public function setTruck(string $Truck): self
    {
        $this->Truck = $Truck;

        return $this;
    }

    public function getAantalm3(): ?int
    {
        return $this->Aantalm3;
    }

    public function setAantalm3(int $Aantalm3): self
    {
        $this->Aantalm3 = $Aantalm3;

        return $this;
    }

    public function getLaadlocatie(): ?string
    {
        return $this->Laadlocatie;
    }

    public function setLaadlocatie(string $Laadlocatie): self
    {
        $this->Laadlocatie = $Laadlocatie;

        return $this;
    }

    public function getTijdvertrek(): ?\DateTimeInterface
    {
        return $this->tijdvertrek;
    }

    public function setTijdvertrek(\DateTimeInterface $tijdvertrek): self
    {
        $this->tijdvertrek = $tijdvertrek;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->Bestemming;
    }

    public function setBestemming(string $Bestemming): self
    {
        $this->Bestemming = $Bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->Evenement;
    }

    public function setEvenement(string $Evenement): self
    {
        $this->Evenement = $Evenement;

        return $this;
    }
}
