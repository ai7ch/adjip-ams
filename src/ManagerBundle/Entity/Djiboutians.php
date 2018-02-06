<?php 

	namespace ManagerBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Validator\Constraints as Assert;
 
    /**
    * @ORM\Entity
    * @ORM\Table(name="djiboutians")
    */
	class Djiboutians
	{
		 /**
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(name="first_name", type="string", length=100)
         *
         * @Assert\NotBlank()
         * @Assert\Type(type="string")
         * @Assert\Length(min=3)
         */
        protected $firstName;

        /**
         * @ORM\Column(name="last_name", type="string", length=100)
         *
         * @Assert\NotBlank()
         * @Assert\Type(type="string")
         * @Assert\Length(min=3)
         */
        protected $lastName;

        /**
         * @ORM\Column(type="string", length=50, nullable=true)
         */
        protected $surname;

        /**
         * @ORM\Column(type="smallint")
         *
         * @Assert\NotBlank()
         */
        protected $gender;

        /**
         * @ORM\Column(name="house_number", type="string", length=150, nullable=true)
         */
        protected $houseNumber;

        /**
         * @ORM\Column(type="string", length=100, nullable=true)
         */
        protected $city;

        /**
         * @ORM\Column(name="zip_code",type="smallint", nullable=true)
         */
        protected $zipCode;

        /**
         * @ORM\Column(type="string", length=100, nullable=true)
         */
        protected $country;

        /**
         * @ORM\Column(name="geo_location", type="string", length=100, nullable=true)
         */
        protected $geoLocation;

        /**
         * @ORM\Column(type="string", length=100, nullable=true)
         */
        protected $email;

        /**
         * @ORM\Column(name="phone_mobile" ,type="string", length=15, nullable=true)
         */
        protected $phoneMobile;

        /**
         * @ORM\Column(name="phone_landline" ,type="string", length=15, nullable=true)
         */     
        protected $phoneLandline;

        /**
         * @ORM\Column(name="date_of_birth", type="date", nullable=true, options={"default" = "1950-01-01"})
         */
        protected $dateOfBirth;

        /**
         * @ORM\Column(type="string", length=100, nullable=true)
         */ 
        protected $profession;

        /**
         * @ORM\Column(type="text", nullable=true)
         */ 
        protected $comment;

        /**
         * @ORM\Column(type="string", length=300, nullable=true)
         */
        protected $avatar;

        /**
         * @ORM\Column(name="registered_date", type="datetime")
         *
         * @Assert\NotBlank()
         * @Assert\Type(type="datetime")
         */ 
        protected $registeredDate;

        /**
         * @ORM\Column(name="last_update", type="datetime")
         *
         * @Assert\NotBlank()
         * @Assert\Type(type="datetime")
         */ 
        protected $lastUpdate;
	
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Djiboutians
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Djiboutians
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Djiboutians
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return Djiboutians
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set houseNumber
     *
     * @param string $houseNumber
     *
     * @return Djiboutians
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Djiboutians
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode
     *
     * @return Djiboutians
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Djiboutians
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set geoLocation
     *
     * @param string $geoLocation
     *
     * @return Djiboutians
     */
    public function setGeoLocation($geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * Get geoLocation
     *
     * @return string
     */
    public function getGeoLocation()
    {
        return $this->geoLocation;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Djiboutians
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     *
     * @return Djiboutians
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set phoneLandline
     *
     * @param string $phoneLandline
     *
     * @return Djiboutians
     */
    public function setPhoneLandline($phoneLandline)
    {
        $this->phoneLandline = $phoneLandline;

        return $this;
    }

    /**
     * Get phoneLandline
     *
     * @return string
     */
    public function getPhoneLandline()
    {
        return $this->phoneLandline;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Djiboutians
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Djiboutians
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Djiboutians
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Djiboutians
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set registeredDate
     *
     * @param \DateTime $registeredDate
     *
     * @return Djiboutians
     */
    public function setRegisteredDate($registeredDate)
    {
        $this->registeredDate = $registeredDate;

        return $this;
    }

    /**
     * Get registeredDate
     *
     * @return \DateTime
     */
    public function getRegisteredDate()
    {
        return $this->registeredDate;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Djiboutians
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}
