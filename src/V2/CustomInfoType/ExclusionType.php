<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType;

use UnexpectedValueException;

/**
 * Type of exclusion rule.
 *
 * Protobuf type <code>google.privacy.dlp.v2.CustomInfoType.ExclusionType</code>
 */
class ExclusionType
{
    /**
     * A finding of this custom info type will not be excluded from results.
     *
     * Generated from protobuf enum <code>EXCLUSION_TYPE_UNSPECIFIED = 0;</code>
     */
    const EXCLUSION_TYPE_UNSPECIFIED = 0;
    /**
     * A finding of this custom info type will be excluded from final results,
     * but can still affect rule execution.
     *
     * Generated from protobuf enum <code>EXCLUSION_TYPE_EXCLUDE = 1;</code>
     */
    const EXCLUSION_TYPE_EXCLUDE = 1;

    private static $valueToName = [
        self::EXCLUSION_TYPE_UNSPECIFIED => 'EXCLUSION_TYPE_UNSPECIFIED',
        self::EXCLUSION_TYPE_EXCLUDE => 'EXCLUSION_TYPE_EXCLUDE',
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


