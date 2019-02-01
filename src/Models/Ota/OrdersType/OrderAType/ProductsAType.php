<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType;

/**
 * Class representing ProductsAType
 */
class ProductsAType
{

    /**
     * The details associated to a specific product.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[] $product
     */
    private $product = [
        
    ];

    /**
     * Adds as product
     *
     * The details associated to a specific product.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType $product
     */
    public function addToProduct(\Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * The details associated to a specific product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * The details associated to a specific product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * The details associated to a specific product.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * The details associated to a specific product.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }


}

