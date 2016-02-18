<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DateTime $LastTimeModified
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\MerchantData\Enums\CompleteStatusCodeType $CompleteStatus
 * @property boolean $BuyerSelectedShipping
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\MerchantData\Enums\InquiryStatusCodeType $InquiryStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\ReturnStatusCodeType $ReturnStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property \DTS\eBaySDK\MerchantData\Enums\DigitalStatusCodeType $DigitalStatus
 */
class TransactionStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eBayPaymentStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'CheckoutStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'LastTimeModified' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastTimeModified'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'CompleteStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompleteStatus'
        ],
        'BuyerSelectedShipping' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerSelectedShipping'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'InquiryStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InquiryStatus'
        ],
        'ReturnStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatus'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
        ],
        'DigitalStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DigitalStatus'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}