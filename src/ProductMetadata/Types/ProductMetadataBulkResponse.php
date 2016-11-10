<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ProductMetadata\Types;

/**
 *
 * @property \DTS\eBaySDK\ProductMetadata\Types\ProductMetadataResponse[] $productMetadataResponse
 */
class ProductMetadataBulkResponse extends \DTS\eBaySDK\ProductMetadata\Types\BaseResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'productMetadataResponse' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\ProductMetadataResponse',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productMetadataResponse'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
