<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Values of the row.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Table.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Individual cells.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value values = 1;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $values
     *           Individual cells.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Individual cells.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Individual cells.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value values = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Value::class);
        $this->values = $arr;

        return $this;
    }

}


