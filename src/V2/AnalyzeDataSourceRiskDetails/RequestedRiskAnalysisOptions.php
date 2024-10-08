<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Risk analysis options.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.RequestedRiskAnalysisOptions</code>
 */
class RequestedRiskAnalysisOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The job config for the risk job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RiskAnalysisJobConfig job_config = 1;</code>
     */
    protected $job_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $job_config
     *           The job config for the risk job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The job config for the risk job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RiskAnalysisJobConfig job_config = 1;</code>
     * @return \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig|null
     */
    public function getJobConfig()
    {
        return $this->job_config;
    }

    public function hasJobConfig()
    {
        return isset($this->job_config);
    }

    public function clearJobConfig()
    {
        unset($this->job_config);
    }

    /**
     * The job config for the risk job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RiskAnalysisJobConfig job_config = 1;</code>
     * @param \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig $var
     * @return $this
     */
    public function setJobConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RiskAnalysisJobConfig::class);
        $this->job_config = $var;

        return $this;
    }

}


