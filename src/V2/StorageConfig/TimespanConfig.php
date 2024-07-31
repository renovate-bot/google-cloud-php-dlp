<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\StorageConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the timespan of the items to include in scanning.
 * Currently only supported when inspecting Cloud Storage and BigQuery.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.StorageConfig.TimespanConfig</code>
 */
class TimespanConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Exclude files, tables, or rows older than this value.
     * If not set, no lower time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * Exclude files, tables, or rows newer than this value.
     * If not set, no upper time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Specification of the field containing the timestamp of scanned items.
     * Used for data sources like Datastore and BigQuery.
     * **For BigQuery**
     * If this value is not specified and the table was modified between the
     * given start and end times, the entire table will be scanned. If this
     * value is specified, then rows are filtered based on the given start and
     * end times. Rows with a `NULL` value in the provided BigQuery column are
     * skipped.
     * Valid data types of the provided BigQuery column are: `INTEGER`, `DATE`,
     * `TIMESTAMP`, and `DATETIME`.
     * If your BigQuery table is [partitioned at ingestion
     * time](https://cloud.google.com/bigquery/docs/partitioned-tables#ingestion_time),
     * you can use any of the following pseudo-columns as your timestamp field.
     * When used with Cloud DLP, these pseudo-column names are case sensitive.
     * - `_PARTITIONTIME`
     * - `_PARTITIONDATE`
     * - `_PARTITION_LOAD_TIME`
     * **For Datastore**
     * If this value is specified, then entities are filtered based on the given
     * start and end times. If an entity does not contain the provided timestamp
     * property or contains empty or invalid values, then it is included.
     * Valid data types of the provided timestamp property are: `TIMESTAMP`.
     * See the
     * [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#bq-timespan)
     * related to this operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId timestamp_field = 3;</code>
     */
    private $timestamp_field = null;
    /**
     * When the job is started by a JobTrigger we will automatically figure out
     * a valid start_time to avoid scanning files that have not been modified
     * since the last time the JobTrigger executed. This will be based on the
     * time of the execution of the last run of the JobTrigger or the timespan
     * end_time used in the last run of the JobTrigger.
     * **For BigQuery**
     * Inspect jobs triggered by automatic population will scan data that is at
     * least three hours old when the job starts. This is because streaming
     * buffer rows are not read during inspection and reading up to the current
     * timestamp will result in skipped rows.
     * See the [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#recently-streamed-data)
     * related to this operation.
     *
     * Generated from protobuf field <code>bool enable_auto_population_of_timespan_config = 4;</code>
     */
    private $enable_auto_population_of_timespan_config = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Exclude files, tables, or rows older than this value.
     *           If not set, no lower time limit is applied.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Exclude files, tables, or rows newer than this value.
     *           If not set, no upper time limit is applied.
     *     @type \Google\Cloud\Dlp\V2\FieldId $timestamp_field
     *           Specification of the field containing the timestamp of scanned items.
     *           Used for data sources like Datastore and BigQuery.
     *           **For BigQuery**
     *           If this value is not specified and the table was modified between the
     *           given start and end times, the entire table will be scanned. If this
     *           value is specified, then rows are filtered based on the given start and
     *           end times. Rows with a `NULL` value in the provided BigQuery column are
     *           skipped.
     *           Valid data types of the provided BigQuery column are: `INTEGER`, `DATE`,
     *           `TIMESTAMP`, and `DATETIME`.
     *           If your BigQuery table is [partitioned at ingestion
     *           time](https://cloud.google.com/bigquery/docs/partitioned-tables#ingestion_time),
     *           you can use any of the following pseudo-columns as your timestamp field.
     *           When used with Cloud DLP, these pseudo-column names are case sensitive.
     *           - `_PARTITIONTIME`
     *           - `_PARTITIONDATE`
     *           - `_PARTITION_LOAD_TIME`
     *           **For Datastore**
     *           If this value is specified, then entities are filtered based on the given
     *           start and end times. If an entity does not contain the provided timestamp
     *           property or contains empty or invalid values, then it is included.
     *           Valid data types of the provided timestamp property are: `TIMESTAMP`.
     *           See the
     *           [known
     *           issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#bq-timespan)
     *           related to this operation.
     *     @type bool $enable_auto_population_of_timespan_config
     *           When the job is started by a JobTrigger we will automatically figure out
     *           a valid start_time to avoid scanning files that have not been modified
     *           since the last time the JobTrigger executed. This will be based on the
     *           time of the execution of the last run of the JobTrigger or the timespan
     *           end_time used in the last run of the JobTrigger.
     *           **For BigQuery**
     *           Inspect jobs triggered by automatic population will scan data that is at
     *           least three hours old when the job starts. This is because streaming
     *           buffer rows are not read during inspection and reading up to the current
     *           timestamp will result in skipped rows.
     *           See the [known
     *           issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#recently-streamed-data)
     *           related to this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Exclude files, tables, or rows older than this value.
     * If not set, no lower time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Exclude files, tables, or rows older than this value.
     * If not set, no lower time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Exclude files, tables, or rows newer than this value.
     * If not set, no upper time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Exclude files, tables, or rows newer than this value.
     * If not set, no upper time limit is applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Specification of the field containing the timestamp of scanned items.
     * Used for data sources like Datastore and BigQuery.
     * **For BigQuery**
     * If this value is not specified and the table was modified between the
     * given start and end times, the entire table will be scanned. If this
     * value is specified, then rows are filtered based on the given start and
     * end times. Rows with a `NULL` value in the provided BigQuery column are
     * skipped.
     * Valid data types of the provided BigQuery column are: `INTEGER`, `DATE`,
     * `TIMESTAMP`, and `DATETIME`.
     * If your BigQuery table is [partitioned at ingestion
     * time](https://cloud.google.com/bigquery/docs/partitioned-tables#ingestion_time),
     * you can use any of the following pseudo-columns as your timestamp field.
     * When used with Cloud DLP, these pseudo-column names are case sensitive.
     * - `_PARTITIONTIME`
     * - `_PARTITIONDATE`
     * - `_PARTITION_LOAD_TIME`
     * **For Datastore**
     * If this value is specified, then entities are filtered based on the given
     * start and end times. If an entity does not contain the provided timestamp
     * property or contains empty or invalid values, then it is included.
     * Valid data types of the provided timestamp property are: `TIMESTAMP`.
     * See the
     * [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#bq-timespan)
     * related to this operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId timestamp_field = 3;</code>
     * @return \Google\Cloud\Dlp\V2\FieldId|null
     */
    public function getTimestampField()
    {
        return $this->timestamp_field;
    }

    public function hasTimestampField()
    {
        return isset($this->timestamp_field);
    }

    public function clearTimestampField()
    {
        unset($this->timestamp_field);
    }

    /**
     * Specification of the field containing the timestamp of scanned items.
     * Used for data sources like Datastore and BigQuery.
     * **For BigQuery**
     * If this value is not specified and the table was modified between the
     * given start and end times, the entire table will be scanned. If this
     * value is specified, then rows are filtered based on the given start and
     * end times. Rows with a `NULL` value in the provided BigQuery column are
     * skipped.
     * Valid data types of the provided BigQuery column are: `INTEGER`, `DATE`,
     * `TIMESTAMP`, and `DATETIME`.
     * If your BigQuery table is [partitioned at ingestion
     * time](https://cloud.google.com/bigquery/docs/partitioned-tables#ingestion_time),
     * you can use any of the following pseudo-columns as your timestamp field.
     * When used with Cloud DLP, these pseudo-column names are case sensitive.
     * - `_PARTITIONTIME`
     * - `_PARTITIONDATE`
     * - `_PARTITION_LOAD_TIME`
     * **For Datastore**
     * If this value is specified, then entities are filtered based on the given
     * start and end times. If an entity does not contain the provided timestamp
     * property or contains empty or invalid values, then it is included.
     * Valid data types of the provided timestamp property are: `TIMESTAMP`.
     * See the
     * [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#bq-timespan)
     * related to this operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId timestamp_field = 3;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setTimestampField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->timestamp_field = $var;

        return $this;
    }

    /**
     * When the job is started by a JobTrigger we will automatically figure out
     * a valid start_time to avoid scanning files that have not been modified
     * since the last time the JobTrigger executed. This will be based on the
     * time of the execution of the last run of the JobTrigger or the timespan
     * end_time used in the last run of the JobTrigger.
     * **For BigQuery**
     * Inspect jobs triggered by automatic population will scan data that is at
     * least three hours old when the job starts. This is because streaming
     * buffer rows are not read during inspection and reading up to the current
     * timestamp will result in skipped rows.
     * See the [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#recently-streamed-data)
     * related to this operation.
     *
     * Generated from protobuf field <code>bool enable_auto_population_of_timespan_config = 4;</code>
     * @return bool
     */
    public function getEnableAutoPopulationOfTimespanConfig()
    {
        return $this->enable_auto_population_of_timespan_config;
    }

    /**
     * When the job is started by a JobTrigger we will automatically figure out
     * a valid start_time to avoid scanning files that have not been modified
     * since the last time the JobTrigger executed. This will be based on the
     * time of the execution of the last run of the JobTrigger or the timespan
     * end_time used in the last run of the JobTrigger.
     * **For BigQuery**
     * Inspect jobs triggered by automatic population will scan data that is at
     * least three hours old when the job starts. This is because streaming
     * buffer rows are not read during inspection and reading up to the current
     * timestamp will result in skipped rows.
     * See the [known
     * issue](https://cloud.google.com/sensitive-data-protection/docs/known-issues#recently-streamed-data)
     * related to this operation.
     *
     * Generated from protobuf field <code>bool enable_auto_population_of_timespan_config = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAutoPopulationOfTimespanConfig($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_auto_population_of_timespan_config = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimespanConfig::class, \Google\Cloud\Dlp\V2\StorageConfig_TimespanConfig::class);

