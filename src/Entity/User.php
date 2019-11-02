<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Entity
 * @ORM\Entity()
 */
class User
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column()
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column()
     */
    private $lastName;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Catalog", mappedBy="user")
     */
    private $catalogs;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCatalogs(): ArrayCollection
    {
        return $this->catalogs;
    }

    /**
     * @param ArrayCollection $catalogs
     * @return User
     */
    public function setCatalogs(ArrayCollection $catalogs): User
    {
        $this->catalogs = $catalogs;
        return $this;
    }
}