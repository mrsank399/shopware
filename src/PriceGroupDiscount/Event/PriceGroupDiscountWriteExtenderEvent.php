<?php declare(strict_types=1);

namespace Shopware\PriceGroupDiscount\Event;

use Shopware\Api\Write\FieldAware\FieldExtenderCollection;
use Symfony\Component\EventDispatcher\Event;

class PriceGroupDiscountWriteExtenderEvent extends Event
{
    const NAME = 'price_group_discount.write.extender';

    /**
     * @var FieldExtenderCollection
     */
    protected $extenderCollection;

    public function __construct(FieldExtenderCollection $extenderCollection)
    {
        $this->extenderCollection = $extenderCollection;
    }

    public function getExtenderCollection(): FieldExtenderCollection
    {
        return $this->extenderCollection;
    }
}