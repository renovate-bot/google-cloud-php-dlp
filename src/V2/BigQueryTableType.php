<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * Over time new types may be added. Currently VIEW, MATERIALIZED_VIEW, and
 * non-BigLake external tables are not supported.
 *
 * Protobuf type <code>google.privacy.dlp.v2.BigQueryTableType</code>
 */
class BigQueryTableType
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>BIG_QUERY_TABLE_TYPE_UNSPECIFIED = 0;</code>
     */
    const BIG_QUERY_TABLE_TYPE_UNSPECIFIED = 0;
    /**
     * A normal BigQuery table.
     *
     * Generated from protobuf enum <code>BIG_QUERY_TABLE_TYPE_TABLE = 1;</code>
     */
    const BIG_QUERY_TABLE_TYPE_TABLE = 1;
    /**
     * A table that references data stored in Cloud Storage.
     *
     * Generated from protobuf enum <code>BIG_QUERY_TABLE_TYPE_EXTERNAL_BIG_LAKE = 2;</code>
     */
    const BIG_QUERY_TABLE_TYPE_EXTERNAL_BIG_LAKE = 2;
    /**
     * A snapshot of a BigQuery table.
     *
     * Generated from protobuf enum <code>BIG_QUERY_TABLE_TYPE_SNAPSHOT = 3;</code>
     */
    const BIG_QUERY_TABLE_TYPE_SNAPSHOT = 3;

    private static $valueToName = [
        self::BIG_QUERY_TABLE_TYPE_UNSPECIFIED => 'BIG_QUERY_TABLE_TYPE_UNSPECIFIED',
        self::BIG_QUERY_TABLE_TYPE_TABLE => 'BIG_QUERY_TABLE_TYPE_TABLE',
        self::BIG_QUERY_TABLE_TYPE_EXTERNAL_BIG_LAKE => 'BIG_QUERY_TABLE_TYPE_EXTERNAL_BIG_LAKE',
        self::BIG_QUERY_TABLE_TYPE_SNAPSHOT => 'BIG_QUERY_TABLE_TYPE_SNAPSHOT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

