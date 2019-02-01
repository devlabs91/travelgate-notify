<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\OrdersType;

/**
 * Class representing OrderAType
 */
class OrderAType
{

    /**
     * Identifies the type of order.
     *
     * @property string $orderType
     */
    private $orderType = null;

    /**
     * The identification number associated to the orders.
     *
     * @property string $orderID
     */
    private $orderID = null;

    /**
     * The recipient(s) to whom the order pertains.
     *
     * @property string[] $listOfRecipientRPH
     */
    private $listOfRecipientRPH = null;

    /**
     * A collection of products.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[] $products
     */
    private $products = null;

    /**
     * Gets as orderType
     *
     * Identifies the type of order.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets a new orderType
     *
     * Identifies the type of order.
     *
     * @param string $orderType
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * The identification number associated to the orders.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * The identification number associated to the orders.
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Adds as listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @return self
     * @param string $listOfRecipientRPH
     */
    public function addToListOfRecipientRPH($listOfRecipientRPH)
    {
        $this->listOfRecipientRPH[] = $listOfRecipientRPH;
        return $this;
    }

    /**
     * isset listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListOfRecipientRPH($index)
    {
        return isset($this->listOfRecipientRPH[$index]);
    }

    /**
     * unset listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListOfRecipientRPH($index)
    {
        unset($this->listOfRecipientRPH[$index]);
    }

    /**
     * Gets as listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @return string[]
     */
    public function getListOfRecipientRPH()
    {
        return $this->listOfRecipientRPH;
    }

    /**
     * Sets a new listOfRecipientRPH
     *
     * The recipient(s) to whom the order pertains.
     *
     * @param string $listOfRecipientRPH
     * @return self
     */
    public function setListOfRecipientRPH(array $listOfRecipientRPH)
    {
        $this->listOfRecipientRPH = $listOfRecipientRPH;
        return $this;
    }

    /**
     * Adds as product
     *
     * A collection of products.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType $product
     */
    public function addToProducts(\Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * A collection of products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * A collection of products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * A collection of products.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * A collection of products.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OrdersType\OrderAType\ProductsAType\ProductAType[] $products
     * @return self
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
        return $this;
    }


}

