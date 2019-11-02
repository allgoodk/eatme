<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Catalog
 * @package App\Entity
 * @ORM\Entity()
 */
class Catalog
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column()
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Order", mappedBy="catalog")
     */
    private $orders;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="catalogs")
     */
    private $user;

    /**
     * Catalog constructor.
     */
    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
     */
    public function getOrders(): ArrayCollection
    {
        return $this->orders;
    }

    /**
     * @param []Order $orders
     * @return Catalog
     */
    public function setOrders(array $orders): Catalog
    {
        foreach ($orders as $order) {
            $this->addOrder($order);
        }

        return $this;
    }

    /**
     * @param Order $order
     * @return $this
     */
    public function addOrder(Order $order)
    {
        $this->orders->add($order);

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Catalog
     */
    public function setUser(User $user): Catalog
    {
        $this->user = $user;
        return $this;
    }
}