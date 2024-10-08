<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InfoTypeCategory;

use UnexpectedValueException;

/**
 * Enum of the current industries in the category.
 * We might add more industries in the future.
 *
 * Protobuf type <code>google.privacy.dlp.v2.InfoTypeCategory.IndustryCategory</code>
 */
class IndustryCategory
{
    /**
     * Unused industry
     *
     * Generated from protobuf enum <code>INDUSTRY_UNSPECIFIED = 0;</code>
     */
    const INDUSTRY_UNSPECIFIED = 0;
    /**
     * The infoType is typically used in the finance industry.
     *
     * Generated from protobuf enum <code>FINANCE = 1;</code>
     */
    const FINANCE = 1;
    /**
     * The infoType is typically used in the health industry.
     *
     * Generated from protobuf enum <code>HEALTH = 2;</code>
     */
    const HEALTH = 2;
    /**
     * The infoType is typically used in the telecommunications industry.
     *
     * Generated from protobuf enum <code>TELECOMMUNICATIONS = 3;</code>
     */
    const TELECOMMUNICATIONS = 3;

    private static $valueToName = [
        self::INDUSTRY_UNSPECIFIED => 'INDUSTRY_UNSPECIFIED',
        self::FINANCE => 'FINANCE',
        self::HEALTH => 'HEALTH',
        self::TELECOMMUNICATIONS => 'TELECOMMUNICATIONS',
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


