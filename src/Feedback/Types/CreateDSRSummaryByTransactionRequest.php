<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Feedback\Types;

/**
 *
 * @property \DTS\eBaySDK\Feedback\Types\TransactionKey[] $transactionKey
 */
class CreateDSRSummaryByTransactionRequest extends \DTS\eBaySDK\Feedback\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'transactionKey' => [
            'type' => 'DTS\eBaySDK\Feedback\Types\TransactionKey',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'transactionKey'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'createDSRSummaryByTransactionRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
