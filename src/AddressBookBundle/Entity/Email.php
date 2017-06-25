<?php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="AddressBookBundle\Repository\EmailRepository")
 */
class Email
{
    /**
     * @ORM\OneToMany(targetEntity="Person", mappedBy="email")
     */
    private $persons;


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
     * @ORM\Column(name="email_address", type="string", length=100)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="email_type", type="string", length=50)
     */
    private $emailType;

    public function __construct()
    {
        $this->persons = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @param mixed $persons
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }

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
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Email
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set emailType
     *
     * @param string $emailType
     * @return Email
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;

        return $this;
    }

    /**
     * Get emailType
     *
     * @return string
     */
    public function getEmailType()
    {
        return $this->emailType;
    }
}
