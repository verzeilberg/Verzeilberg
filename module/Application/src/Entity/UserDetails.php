<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Laminas\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This trait is used in the user class for extra info.
 */
trait UserDetails {

    /**
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     * @Annotation\Options({
     * "label": "Voornaam",
     * "label_attributes": {"class": "col-sm-1 col-md-1 col-lg-1 form-control-label"}
     * })
     * @Annotation\Attributes({"class":"form-control", "placeholder":"Voornaam"})
     */
    private $firstName;

    /**
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     * @Annotation\Options({
     * "label": "Achternaam",
     * "label_attributes": {"class": "col-sm-1 col-md-1 col-lg-1 form-control-label"}
     * })
     * @Annotation\Attributes({"class":"form-control", "placeholder":"Achternaam"})
     */
    private $lastName;

    /**
     * @ORM\Column(name="bio", type="text", nullable=true)
     */
    private $bio;

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio() {
        return $this->bio;
    }

    /**
     * Set bio
     *
     * @param string $bio
     */
    public function setBio($bio) {
        $this->bio = $bio;
    }

}
