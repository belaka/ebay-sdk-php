<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $carrierEnum
 * @property string $carrierName
 * @property \DTS\eBaySDK\PostOrder\Types\Text $comments
 * @property string $fileId
 * @property boolean $forwardShippingLabelProvided
 * @property \DTS\eBaySDK\PostOrder\Enums\LabelActionEnum $labelAction
 * @property string $labelId
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $labelSentDate
 * @property \DTS\eBaySDK\PostOrder\Enums\NoSellerUploadLabelReasonEnum $noLabelReason
 * @property \DTS\eBaySDK\PostOrder\Types\B:Amount $returnLabelCost
 * @property string $trackingNumber
 */
class ProvideLabelRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'carrierEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierEnum'
        ],
        'carrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierName'
        ],
        'comments' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Text',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ],
        'fileId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fileId'
        ],
        'forwardShippingLabelProvided' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'forwardShippingLabelProvided'
        ],
        'labelAction' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelAction'
        ],
        'labelId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelId'
        ],
        'labelSentDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelSentDate'
        ],
        'noLabelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'noLabelReason'
        ],
        'returnLabelCost' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\B:Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnLabelCost'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
