<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The rule that specifies conditions when findings of infoTypes specified in
 * `InspectionRuleSet` are removed from results.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ExclusionRule</code>
 */
class ExclusionRule extends \Google\Protobuf\Internal\Message
{
    /**
     * How the rule is applied, see MatchingType documentation for details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.MatchingType matching_type = 4;</code>
     */
    protected $matching_type = 0;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $dictionary
     *           Dictionary which defines the rule.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Regex $regex
     *           Regular expression which defines the rule.
     *     @type \Google\Cloud\Dlp\V2\ExcludeInfoTypes $exclude_info_types
     *           Set of infoTypes for which findings would affect this rule.
     *     @type \Google\Cloud\Dlp\V2\ExcludeByHotword $exclude_by_hotword
     *           Drop if the hotword rule is contained in the proximate context. For
     *           tabular data, the context includes the column name.
     *     @type int $matching_type
     *           How the rule is applied, see MatchingType documentation for details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Dictionary which defines the rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 1;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary|null
     */
    public function getDictionary()
    {
        return $this->readOneof(1);
    }

    public function hasDictionary()
    {
        return $this->hasOneof(1);
    }

    /**
     * Dictionary which defines the rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Dictionary dictionary = 1;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary $var
     * @return $this
     */
    public function setDictionary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\Dictionary::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Regular expression which defines the rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 2;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Regex|null
     */
    public function getRegex()
    {
        return $this->readOneof(2);
    }

    public function hasRegex()
    {
        return $this->hasOneof(2);
    }

    /**
     * Regular expression which defines the rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex regex = 2;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Regex $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\Regex::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Set of infoTypes for which findings would affect this rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ExcludeInfoTypes exclude_info_types = 3;</code>
     * @return \Google\Cloud\Dlp\V2\ExcludeInfoTypes|null
     */
    public function getExcludeInfoTypes()
    {
        return $this->readOneof(3);
    }

    public function hasExcludeInfoTypes()
    {
        return $this->hasOneof(3);
    }

    /**
     * Set of infoTypes for which findings would affect this rule.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ExcludeInfoTypes exclude_info_types = 3;</code>
     * @param \Google\Cloud\Dlp\V2\ExcludeInfoTypes $var
     * @return $this
     */
    public function setExcludeInfoTypes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ExcludeInfoTypes::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Drop if the hotword rule is contained in the proximate context. For
     * tabular data, the context includes the column name.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ExcludeByHotword exclude_by_hotword = 5;</code>
     * @return \Google\Cloud\Dlp\V2\ExcludeByHotword|null
     */
    public function getExcludeByHotword()
    {
        return $this->readOneof(5);
    }

    public function hasExcludeByHotword()
    {
        return $this->hasOneof(5);
    }

    /**
     * Drop if the hotword rule is contained in the proximate context. For
     * tabular data, the context includes the column name.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ExcludeByHotword exclude_by_hotword = 5;</code>
     * @param \Google\Cloud\Dlp\V2\ExcludeByHotword $var
     * @return $this
     */
    public function setExcludeByHotword($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ExcludeByHotword::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * How the rule is applied, see MatchingType documentation for details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.MatchingType matching_type = 4;</code>
     * @return int
     */
    public function getMatchingType()
    {
        return $this->matching_type;
    }

    /**
     * How the rule is applied, see MatchingType documentation for details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.MatchingType matching_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\MatchingType::class);
        $this->matching_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

