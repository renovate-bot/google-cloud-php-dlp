<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InspectConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to control the number of findings returned for inspection.
 * This is not used for de-identification or data profiling.
 * When redacting sensitive data from images, finding limits don't apply. They
 * can cause unexpected or inconsistent results, where only some data is
 * redacted. Don't include finding limits in
 * [RedactImage][google.privacy.dlp.v2.DlpService.RedactImage]
 * requests. Otherwise, Cloud DLP returns an error.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InspectConfig.FindingLimits</code>
 */
class FindingLimits extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of findings that are returned for each item scanned.
     * When set within an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest],
     * this field is ignored.
     * This value isn't a hard limit. If the number of findings for an item
     * reaches this limit, the inspection of that item ends gradually, not
     * abruptly. Therefore, the actual number of findings that Cloud DLP returns
     * for the item can be multiple times higher than this value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_item = 1;</code>
     */
    private $max_findings_per_item = 0;
    /**
     * Max number of findings that are returned per request or job.
     * If you set this field in an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest], the
     * resulting maximum value is the value that you set or 3,000, whichever is
     * lower.
     * This value isn't a hard limit. If an inspection reaches this limit, the
     * inspection ends gradually, not abruptly. Therefore, the actual number of
     * findings that Cloud DLP returns can be multiple times higher than this
     * value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_request = 2;</code>
     */
    private $max_findings_per_request = 0;
    /**
     * Configuration of findings limit given for specified infoTypes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InspectConfig.FindingLimits.InfoTypeLimit max_findings_per_info_type = 3;</code>
     */
    private $max_findings_per_info_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_findings_per_item
     *           Max number of findings that are returned for each item scanned.
     *           When set within an
     *           [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest],
     *           this field is ignored.
     *           This value isn't a hard limit. If the number of findings for an item
     *           reaches this limit, the inspection of that item ends gradually, not
     *           abruptly. Therefore, the actual number of findings that Cloud DLP returns
     *           for the item can be multiple times higher than this value.
     *     @type int $max_findings_per_request
     *           Max number of findings that are returned per request or job.
     *           If you set this field in an
     *           [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest], the
     *           resulting maximum value is the value that you set or 3,000, whichever is
     *           lower.
     *           This value isn't a hard limit. If an inspection reaches this limit, the
     *           inspection ends gradually, not abruptly. Therefore, the actual number of
     *           findings that Cloud DLP returns can be multiple times higher than this
     *           value.
     *     @type array<\Google\Cloud\Dlp\V2\InspectConfig\FindingLimits\InfoTypeLimit>|\Google\Protobuf\Internal\RepeatedField $max_findings_per_info_type
     *           Configuration of findings limit given for specified infoTypes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of findings that are returned for each item scanned.
     * When set within an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest],
     * this field is ignored.
     * This value isn't a hard limit. If the number of findings for an item
     * reaches this limit, the inspection of that item ends gradually, not
     * abruptly. Therefore, the actual number of findings that Cloud DLP returns
     * for the item can be multiple times higher than this value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_item = 1;</code>
     * @return int
     */
    public function getMaxFindingsPerItem()
    {
        return $this->max_findings_per_item;
    }

    /**
     * Max number of findings that are returned for each item scanned.
     * When set within an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest],
     * this field is ignored.
     * This value isn't a hard limit. If the number of findings for an item
     * reaches this limit, the inspection of that item ends gradually, not
     * abruptly. Therefore, the actual number of findings that Cloud DLP returns
     * for the item can be multiple times higher than this value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_item = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFindingsPerItem($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_findings_per_item = $var;

        return $this;
    }

    /**
     * Max number of findings that are returned per request or job.
     * If you set this field in an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest], the
     * resulting maximum value is the value that you set or 3,000, whichever is
     * lower.
     * This value isn't a hard limit. If an inspection reaches this limit, the
     * inspection ends gradually, not abruptly. Therefore, the actual number of
     * findings that Cloud DLP returns can be multiple times higher than this
     * value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_request = 2;</code>
     * @return int
     */
    public function getMaxFindingsPerRequest()
    {
        return $this->max_findings_per_request;
    }

    /**
     * Max number of findings that are returned per request or job.
     * If you set this field in an
     * [InspectContentRequest][google.privacy.dlp.v2.InspectContentRequest], the
     * resulting maximum value is the value that you set or 3,000, whichever is
     * lower.
     * This value isn't a hard limit. If an inspection reaches this limit, the
     * inspection ends gradually, not abruptly. Therefore, the actual number of
     * findings that Cloud DLP returns can be multiple times higher than this
     * value.
     *
     * Generated from protobuf field <code>int32 max_findings_per_request = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFindingsPerRequest($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_findings_per_request = $var;

        return $this;
    }

    /**
     * Configuration of findings limit given for specified infoTypes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InspectConfig.FindingLimits.InfoTypeLimit max_findings_per_info_type = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaxFindingsPerInfoType()
    {
        return $this->max_findings_per_info_type;
    }

    /**
     * Configuration of findings limit given for specified infoTypes.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InspectConfig.FindingLimits.InfoTypeLimit max_findings_per_info_type = 3;</code>
     * @param array<\Google\Cloud\Dlp\V2\InspectConfig\FindingLimits\InfoTypeLimit>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaxFindingsPerInfoType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InspectConfig\FindingLimits\InfoTypeLimit::class);
        $this->max_findings_per_info_type = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FindingLimits::class, \Google\Cloud\Dlp\V2\InspectConfig_FindingLimits::class);

