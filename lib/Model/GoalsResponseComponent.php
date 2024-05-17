<?php
/**
 * GoalsResponseComponent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\Traits\RawData;
use Pipedrive\ObjectSerializer;

/**
 * GoalsResponseComponent Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GoalsResponseComponent implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GoalsResponseComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'owner_id' => 'int',
        'title' => 'string',
        'type' => '\Pipedrive\Model\GoalType',
        'assignee' => '\Pipedrive\Model\Assignee',
        'interval' => 'string',
        'duration' => '\Pipedrive\Model\Duration',
        'expected_outcome' => '\Pipedrive\Model\ExpectedOutcome',
        'is_active' => 'bool',
        'report_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'owner_id' => null,
        'title' => null,
        'type' => null,
        'assignee' => null,
        'interval' => null,
        'duration' => null,
        'expected_outcome' => null,
        'is_active' => null,
        'report_ids' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'owner_id' => 'owner_id',
        'title' => 'title',
        'type' => 'type',
        'assignee' => 'assignee',
        'interval' => 'interval',
        'duration' => 'duration',
        'expected_outcome' => 'expected_outcome',
        'is_active' => 'is_active',
        'report_ids' => 'report_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'owner_id' => 'setOwnerId',
        'title' => 'setTitle',
        'type' => 'setType',
        'assignee' => 'setAssignee',
        'interval' => 'setInterval',
        'duration' => 'setDuration',
        'expected_outcome' => 'setExpectedOutcome',
        'is_active' => 'setIsActive',
        'report_ids' => 'setReportIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'owner_id' => 'getOwnerId',
        'title' => 'getTitle',
        'type' => 'getType',
        'assignee' => 'getAssignee',
        'interval' => 'getInterval',
        'duration' => 'getDuration',
        'expected_outcome' => 'getExpectedOutcome',
        'is_active' => 'getIsActive',
        'report_ids' => 'getReportIds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['assignee'] = $data['assignee'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['expected_outcome'] = $data['expected_outcome'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['report_ids'] = $data['report_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the goal
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The ID of the creator of the goal
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the goal
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Pipedrive\Model\GoalType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Pipedrive\Model\GoalType|null $type type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets assignee
     *
     * @return \Pipedrive\Model\Assignee|null
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param \Pipedrive\Model\Assignee|null $assignee assignee
     *
     * @return self
     */
    public function setAssignee($assignee): self
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string|null
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string|null $interval The interval of the goal
     *
     * @return self
     */
    public function setInterval($interval): self
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return \Pipedrive\Model\Duration|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \Pipedrive\Model\Duration|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration): self
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets expected_outcome
     *
     * @return \Pipedrive\Model\ExpectedOutcome|null
     */
    public function getExpectedOutcome()
    {
        return $this->container['expected_outcome'];
    }

    /**
     * Sets expected_outcome
     *
     * @param \Pipedrive\Model\ExpectedOutcome|null $expected_outcome expected_outcome
     *
     * @return self
     */
    public function setExpectedOutcome($expected_outcome): self
    {
        $this->container['expected_outcome'] = $expected_outcome;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Whether the goal is currently active or not
     *
     * @return self
     */
    public function setIsActive($is_active): self
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets report_ids
     *
     * @return string[]|null
     */
    public function getReportIds()
    {
        return $this->container['report_ids'];
    }

    /**
     * Sets report_ids
     *
     * @param string[]|null $report_ids The IDs of the reports that belong to the goal
     *
     * @return self
     */
    public function setReportIds($report_ids): self
    {
        $this->container['report_ids'] = $report_ids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


