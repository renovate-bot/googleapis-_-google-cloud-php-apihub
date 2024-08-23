<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1\LintResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Count of issues with a given severity.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.LintResponse.SummaryEntry</code>
 */
class SummaryEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Severity of the issue.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Severity severity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $severity = 0;
    /**
     * Required. Count of issues with the given severity.
     *
     * Generated from protobuf field <code>int32 count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $severity
     *           Required. Severity of the issue.
     *     @type int $count
     *           Required. Count of issues with the given severity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Severity of the issue.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Severity severity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Required. Severity of the issue.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Severity severity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Severity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Required. Count of issues with the given severity.
     *
     * Generated from protobuf field <code>int32 count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Required. Count of issues with the given severity.
     *
     * Generated from protobuf field <code>int32 count = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

}

