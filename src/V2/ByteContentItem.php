<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for bytes to inspect or redact.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ByteContentItem</code>
 */
class ByteContentItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *     @type string $data
     *           Content data to inspect or redact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of data stored in the bytes string. Default will be TEXT_UTF8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem.BytesType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\ByteContentItem\BytesType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Content data to inspect or redact.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

