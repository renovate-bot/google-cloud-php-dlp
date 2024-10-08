<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Row key for identifying a record in BigQuery table.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.BigQueryKey</code>
 */
class BigQueryKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     */
    protected $table_reference = null;
    /**
     * Row number inferred at the time the table was scanned. This value is
     * nondeterministic, cannot be queried, and may be null for inspection
     * jobs. To locate findings within a table, specify
     * `inspect_job.storage_config.big_query_options.identifying_fields` in
     * `CreateDlpJobRequest`.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     */
    protected $row_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $table_reference
     *           Complete BigQuery table reference.
     *     @type int|string $row_number
     *           Row number inferred at the time the table was scanned. This value is
     *           nondeterministic, cannot be queried, and may be null for inspection
     *           jobs. To locate findings within a table, specify
     *           `inspect_job.storage_config.big_query_options.identifying_fields` in
     *           `CreateDlpJobRequest`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getTableReference()
    {
        return $this->table_reference;
    }

    public function hasTableReference()
    {
        return isset($this->table_reference);
    }

    public function clearTableReference()
    {
        unset($this->table_reference);
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTableReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->table_reference = $var;

        return $this;
    }

    /**
     * Row number inferred at the time the table was scanned. This value is
     * nondeterministic, cannot be queried, and may be null for inspection
     * jobs. To locate findings within a table, specify
     * `inspect_job.storage_config.big_query_options.identifying_fields` in
     * `CreateDlpJobRequest`.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     * @return int|string
     */
    public function getRowNumber()
    {
        return $this->row_number;
    }

    /**
     * Row number inferred at the time the table was scanned. This value is
     * nondeterministic, cannot be queried, and may be null for inspection
     * jobs. To locate findings within a table, specify
     * `inspect_job.storage_config.big_query_options.identifying_fields` in
     * `CreateDlpJobRequest`.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_number = $var;

        return $this;
    }

}

