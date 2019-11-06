<?php
declare(strict_types=1);


namespace App\Entity;

use CrEOF\Spatial\PHP\Types\Geography\Point;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Order
 * @package App\Entity\Order
 * @ORM\Entity()
 */
class Order
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Catalog
     *
     * @ORM\ManyToOne(targetEntity="Catalog", inversedBy="orders")
     */
    private $catalog;

    /**
     * @var Point
     *
     * @ORM\Column(type="geopoint", nullable=false, options={"srid"="4326"})
     */
    private $placement;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Catalog
     */
    public function getCatalog(): Catalog
    {
        return $this->catalog;
    }

    /**
     * @param Catalog $catalog
     * @return Order
     */
    public function setCatalog(Catalog $catalog): Order
    {
        $this->catalog = $catalog;
        return $this;
    }

    /**
     * @return Point
     */
    public function getPlacement(): Point
    {
        return $this->placement;
    }

    /**
     * @param Point $placement
     * @return Order
     */
    public function setPlacement(Point $placement): self
    {
        $this->placement = $placement;

        return $this;
    }

}