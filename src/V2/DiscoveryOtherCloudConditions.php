<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Requirements that must be true before a resource is profiled for the first
 * time.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryOtherCloudConditions</code>
 */
class DiscoveryOtherCloudConditions extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum age a resource must be before Cloud DLP can profile it. Value must
     * be 1 hour or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 1;</code>
     */
    protected $min_age = null;
    protected $conditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $min_age
     *           Minimum age a resource must be before Cloud DLP can profile it. Value must
     *           be 1 hour or greater.
     *     @type \Google\Cloud\Dlp\V2\AmazonS3BucketConditions $amazon_s3_bucket_conditions
     *           Amazon S3 bucket conditions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum age a resource must be before Cloud DLP can profile it. Value must
     * be 1 hour or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinAge()
    {
        return $this->min_age;
    }

    public function hasMinAge()
    {
        return isset($this->min_age);
    }

    public function clearMinAge()
    {
        unset($this->min_age);
    }

    /**
     * Minimum age a resource must be before Cloud DLP can profile it. Value must
     * be 1 hour or greater.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_age = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinAge($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_age = $var;

        return $this;
    }

    /**
     * Amazon S3 bucket conditions.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AmazonS3BucketConditions amazon_s3_bucket_conditions = 2;</code>
     * @return \Google\Cloud\Dlp\V2\AmazonS3BucketConditions|null
     */
    public function getAmazonS3BucketConditions()
    {
        return $this->readOneof(2);
    }

    public function hasAmazonS3BucketConditions()
    {
        return $this->hasOneof(2);
    }

    /**
     * Amazon S3 bucket conditions.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AmazonS3BucketConditions amazon_s3_bucket_conditions = 2;</code>
     * @param \Google\Cloud\Dlp\V2\AmazonS3BucketConditions $var
     * @return $this
     */
    public function setAmazonS3BucketConditions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AmazonS3BucketConditions::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->whichOneof("conditions");
    }

}

