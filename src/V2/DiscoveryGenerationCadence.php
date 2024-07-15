<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * What must take place for a profile to be updated and how
 * frequently it should occur.
 * New tables are scanned as quickly as possible depending on system
 * capacity.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryGenerationCadence</code>
 */
class DiscoveryGenerationCadence extends \Google\Protobuf\Internal\Message
{
    /**
     * Governs when to update data profiles when a schema is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoverySchemaModifiedCadence schema_modified_cadence = 1;</code>
     */
    private $schema_modified_cadence = null;
    /**
     * Governs when to update data profiles when a table is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryTableModifiedCadence table_modified_cadence = 2;</code>
     */
    private $table_modified_cadence = null;
    /**
     * Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 3;</code>
     */
    private $inspect_template_modified_cadence = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DiscoverySchemaModifiedCadence $schema_modified_cadence
     *           Governs when to update data profiles when a schema is modified.
     *     @type \Google\Cloud\Dlp\V2\DiscoveryTableModifiedCadence $table_modified_cadence
     *           Governs when to update data profiles when a table is modified.
     *     @type \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence $inspect_template_modified_cadence
     *           Governs when to update data profiles when the inspection rules
     *           defined by the `InspectTemplate` change.
     *           If not set, changing the template will not cause a data profile to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Governs when to update data profiles when a schema is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoverySchemaModifiedCadence schema_modified_cadence = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DiscoverySchemaModifiedCadence|null
     */
    public function getSchemaModifiedCadence()
    {
        return $this->schema_modified_cadence;
    }

    public function hasSchemaModifiedCadence()
    {
        return isset($this->schema_modified_cadence);
    }

    public function clearSchemaModifiedCadence()
    {
        unset($this->schema_modified_cadence);
    }

    /**
     * Governs when to update data profiles when a schema is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoverySchemaModifiedCadence schema_modified_cadence = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DiscoverySchemaModifiedCadence $var
     * @return $this
     */
    public function setSchemaModifiedCadence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoverySchemaModifiedCadence::class);
        $this->schema_modified_cadence = $var;

        return $this;
    }

    /**
     * Governs when to update data profiles when a table is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryTableModifiedCadence table_modified_cadence = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryTableModifiedCadence|null
     */
    public function getTableModifiedCadence()
    {
        return $this->table_modified_cadence;
    }

    public function hasTableModifiedCadence()
    {
        return isset($this->table_modified_cadence);
    }

    public function clearTableModifiedCadence()
    {
        unset($this->table_modified_cadence);
    }

    /**
     * Governs when to update data profiles when a table is modified.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryTableModifiedCadence table_modified_cadence = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryTableModifiedCadence $var
     * @return $this
     */
    public function setTableModifiedCadence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryTableModifiedCadence::class);
        $this->table_modified_cadence = $var;

        return $this;
    }

    /**
     * Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 3;</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence|null
     */
    public function getInspectTemplateModifiedCadence()
    {
        return $this->inspect_template_modified_cadence;
    }

    public function hasInspectTemplateModifiedCadence()
    {
        return isset($this->inspect_template_modified_cadence);
    }

    public function clearInspectTemplateModifiedCadence()
    {
        unset($this->inspect_template_modified_cadence);
    }

    /**
     * Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 3;</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence $var
     * @return $this
     */
    public function setInspectTemplateModifiedCadence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence::class);
        $this->inspect_template_modified_cadence = $var;

        return $this;
    }

}

