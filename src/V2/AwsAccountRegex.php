<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AWS account regex.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AwsAccountRegex</code>
 */
class AwsAccountRegex extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Regex to test the AWS account ID against.
     * If empty, all accounts match.
     *
     * Generated from protobuf field <code>string account_id_regex = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $account_id_regex = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id_regex
     *           Optional. Regex to test the AWS account ID against.
     *           If empty, all accounts match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Regex to test the AWS account ID against.
     * If empty, all accounts match.
     *
     * Generated from protobuf field <code>string account_id_regex = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAccountIdRegex()
    {
        return $this->account_id_regex;
    }

    /**
     * Optional. Regex to test the AWS account ID against.
     * If empty, all accounts match.
     *
     * Generated from protobuf field <code>string account_id_regex = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountIdRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id_regex = $var;

        return $this;
    }

}

