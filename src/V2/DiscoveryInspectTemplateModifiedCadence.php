<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The cadence at which to update data profiles when the inspection rules
 * defined by the `InspectTemplate` change.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence</code>
 */
class DiscoveryInspectTemplateModifiedCadence extends \Google\Protobuf\Internal\Message
{
    /**
     * How frequently data profiles can be updated when the template is modified.
     * Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency frequency = 1;</code>
     */
    private $frequency = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $frequency
     *           How frequently data profiles can be updated when the template is modified.
     *           Defaults to never.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * How frequently data profiles can be updated when the template is modified.
     * Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency frequency = 1;</code>
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * How frequently data profiles can be updated when the template is modified.
     * Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency frequency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfileUpdateFrequency::class);
        $this->frequency = $var;

        return $this;
    }

}

