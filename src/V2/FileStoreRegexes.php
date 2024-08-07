<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of regular expressions to determine what file store to match
 * against.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FileStoreRegexes</code>
 */
class FileStoreRegexes extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group of regular expression patterns to match against one or
     * more file stores. Maximum of 100 entries. The sum of all regular
     * expression's length can't exceed 10 KiB.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreRegex patterns = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $patterns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\FileStoreRegex>|\Google\Protobuf\Internal\RepeatedField $patterns
     *           Required. The group of regular expression patterns to match against one or
     *           more file stores. Maximum of 100 entries. The sum of all regular
     *           expression's length can't exceed 10 KiB.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group of regular expression patterns to match against one or
     * more file stores. Maximum of 100 entries. The sum of all regular
     * expression's length can't exceed 10 KiB.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreRegex patterns = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatterns()
    {
        return $this->patterns;
    }

    /**
     * Required. The group of regular expression patterns to match against one or
     * more file stores. Maximum of 100 entries. The sum of all regular
     * expression's length can't exceed 10 KiB.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FileStoreRegex patterns = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Dlp\V2\FileStoreRegex>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatterns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FileStoreRegex::class);
        $this->patterns = $arr;

        return $this;
    }

}

