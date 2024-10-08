<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Publish a message into a given Pub/Sub topic when DlpJob has completed. The
 * message contains a single field, `DlpJobName`, which is equal to the
 * finished job's
 * [`DlpJob.name`](https://cloud.google.com/sensitive-data-protection/docs/reference/rest/v2/projects.dlpJobs#DlpJob).
 * Compatible with: Inspect, Risk
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Action.PublishToPubSub</code>
 */
class PublishToPubSub extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Pub/Sub topic to send notifications to. The topic must have given
     * publishing access rights to the DLP API service account executing
     * the long running DlpJob sending the notifications.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Cloud Pub/Sub topic to send notifications to. The topic must have given
     *           publishing access rights to the DLP API service account executing
     *           the long running DlpJob sending the notifications.
     *           Format is projects/{project}/topics/{topic}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Pub/Sub topic to send notifications to. The topic must have given
     * publishing access rights to the DLP API service account executing
     * the long running DlpJob sending the notifications.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Cloud Pub/Sub topic to send notifications to. The topic must have given
     * publishing access rights to the DLP API service account executing
     * the long running DlpJob sending the notifications.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

}


