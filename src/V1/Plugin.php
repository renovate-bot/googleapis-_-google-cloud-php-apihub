<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/plugin_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A plugin resource in the API Hub.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Plugin</code>
 */
class Plugin extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the plugin.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the plugin. Max length is 50 characters
     * (Unicode code points).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. The type of the API.
     * This maps to the following system defined attribute:
     * `projects/{project}/locations/{location}/attributes/system-plugin-type`
     * attribute.
     * The number of allowed values for this attribute will be based on the
     * cardinality of the attribute. The same can be retrieved via GetAttribute
     * API. All values should be from the list of allowed values defined for the
     * attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.AttributeValues type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = null;
    /**
     * Optional. The plugin description. Max length is 2000 characters (Unicode
     * code points).
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Represents the state of the plugin.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Plugin.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the plugin.
     *           Format: `projects/{project}/locations/{location}/plugins/{plugin}`
     *     @type string $display_name
     *           Required. The display name of the plugin. Max length is 50 characters
     *           (Unicode code points).
     *     @type \Google\Cloud\ApiHub\V1\AttributeValues $type
     *           Required. The type of the API.
     *           This maps to the following system defined attribute:
     *           `projects/{project}/locations/{location}/attributes/system-plugin-type`
     *           attribute.
     *           The number of allowed values for this attribute will be based on the
     *           cardinality of the attribute. The same can be retrieved via GetAttribute
     *           API. All values should be from the list of allowed values defined for the
     *           attribute.
     *     @type string $description
     *           Optional. The plugin description. Max length is 2000 characters (Unicode
     *           code points).
     *     @type int $state
     *           Output only. Represents the state of the plugin.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\PluginService::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the plugin.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the plugin.
     * Format: `projects/{project}/locations/{location}/plugins/{plugin}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of the plugin. Max length is 50 characters
     * (Unicode code points).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the plugin. Max length is 50 characters
     * (Unicode code points).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The type of the API.
     * This maps to the following system defined attribute:
     * `projects/{project}/locations/{location}/attributes/system-plugin-type`
     * attribute.
     * The number of allowed values for this attribute will be based on the
     * cardinality of the attribute. The same can be retrieved via GetAttribute
     * API. All values should be from the list of allowed values defined for the
     * attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.AttributeValues type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\AttributeValues|null
     */
    public function getType()
    {
        return $this->type;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Required. The type of the API.
     * This maps to the following system defined attribute:
     * `projects/{project}/locations/{location}/attributes/system-plugin-type`
     * attribute.
     * The number of allowed values for this attribute will be based on the
     * cardinality of the attribute. The same can be retrieved via GetAttribute
     * API. All values should be from the list of allowed values defined for the
     * attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.AttributeValues type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\AttributeValues $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\AttributeValues::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The plugin description. Max length is 2000 characters (Unicode
     * code points).
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The plugin description. Max length is 2000 characters (Unicode
     * code points).
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Represents the state of the plugin.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Plugin.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Represents the state of the plugin.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Plugin.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Plugin\State::class);
        $this->state = $var;

        return $this;
    }

}
