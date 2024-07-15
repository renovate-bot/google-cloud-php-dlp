<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListDeidentifyTemplates.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListDeidentifyTemplatesRequest</code>
 */
class ListDeidentifyTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * + Organizations scope, location specified:
     *   `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/`<var>ORG_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Page token to continue retrieval. Comes from the previous call
     * to `ListDeidentifyTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Size of the page. This value can be limited by the server. If zero server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Comma-separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case insensitive. The
     * default sorting order is ascending. Redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the template was created.
     * - `update_time`: corresponds to the time the template was last updated.
     * - `name`: corresponds to the template's name.
     * - `display_name`: corresponds to the template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    private $order_by = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     */
    private $location_id = '';

    /**
     * @param string $parent Required. Parent resource name.
     *
     *                       The format of this value varies depending on the scope of the request
     *                       (project or organization) and whether you have [specified a processing
     *                       location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *
     *                       + Projects scope, location specified:
     *                       `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *                       + Projects scope, no location specified (defaults to global):
     *                       `projects/`<var>PROJECT_ID</var>
     *                       + Organizations scope, location specified:
     *                       `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
     *                       + Organizations scope, no location specified (defaults to global):
     *                       `organizations/`<var>ORG_ID</var>
     *
     *                       The following example `parent` string specifies a parent project with the
     *                       identifier `example-project`, and specifies the `europe-west3` location
     *                       for processing data:
     *
     *                       parent=projects/example-project/locations/europe-west3
     *                       Please see {@see DlpServiceClient::organizationLocationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\ListDeidentifyTemplatesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           The format of this value varies depending on the scope of the request
     *           (project or organization) and whether you have [specified a processing
     *           location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *           + Projects scope, location specified:
     *             `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Projects scope, no location specified (defaults to global):
     *             `projects/`<var>PROJECT_ID</var>
     *           + Organizations scope, location specified:
     *             `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Organizations scope, no location specified (defaults to global):
     *             `organizations/`<var>ORG_ID</var>
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type string $page_token
     *           Page token to continue retrieval. Comes from the previous call
     *           to `ListDeidentifyTemplates`.
     *     @type int $page_size
     *           Size of the page. This value can be limited by the server. If zero server
     *           returns a page of max size 100.
     *     @type string $order_by
     *           Comma-separated list of fields to order by,
     *           followed by `asc` or `desc` postfix. This list is case insensitive. The
     *           default sorting order is ascending. Redundant space characters are
     *           insignificant.
     *           Example: `name asc,update_time, create_time desc`
     *           Supported fields are:
     *           - `create_time`: corresponds to the time the template was created.
     *           - `update_time`: corresponds to the time the template was last updated.
     *           - `name`: corresponds to the template's name.
     *           - `display_name`: corresponds to the template's display name.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * + Organizations scope, location specified:
     *   `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/`<var>ORG_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * + Organizations scope, location specified:
     *   `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/`<var>ORG_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Page token to continue retrieval. Comes from the previous call
     * to `ListDeidentifyTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token to continue retrieval. Comes from the previous call
     * to `ListDeidentifyTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Size of the page. This value can be limited by the server. If zero server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Size of the page. This value can be limited by the server. If zero server
     * returns a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Comma-separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case insensitive. The
     * default sorting order is ascending. Redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the template was created.
     * - `update_time`: corresponds to the time the template was last updated.
     * - `name`: corresponds to the template's name.
     * - `display_name`: corresponds to the template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Comma-separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case insensitive. The
     * default sorting order is ascending. Redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the template was created.
     * - `update_time`: corresponds to the time the template was last updated.
     * - `name`: corresponds to the template's name.
     * - `display_name`: corresponds to the template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

