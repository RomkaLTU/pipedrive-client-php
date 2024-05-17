<?php
/**
 * NewDeal
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
 * NewDeal Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NewDeal implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NewDeal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'title' => 'string',
        'value' => 'string',
        'label' => 'int[]',
        'currency' => 'string',
        'user_id' => 'int',
        'person_id' => 'int',
        'org_id' => 'int',
        'pipeline_id' => 'int',
        'stage_id' => 'int',
        'status' => 'string',
        'add_time' => 'string',
        'won_time' => 'string',
        'lost_time' => 'string',
        'close_time' => 'string',
        'expected_close_date' => '\DateTime',
        'probability' => 'float',
        'lost_reason' => 'string',
        'visible_to' => '\Pipedrive\Model\VisibleTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'value' => null,
        'label' => null,
        'currency' => null,
        'user_id' => null,
        'person_id' => null,
        'org_id' => null,
        'pipeline_id' => null,
        'stage_id' => null,
        'status' => null,
        'add_time' => null,
        'won_time' => null,
        'lost_time' => null,
        'close_time' => null,
        'expected_close_date' => 'date',
        'probability' => null,
        'lost_reason' => null,
        'visible_to' => null
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
        'title' => 'title',
        'value' => 'value',
        'label' => 'label',
        'currency' => 'currency',
        'user_id' => 'user_id',
        'person_id' => 'person_id',
        'org_id' => 'org_id',
        'pipeline_id' => 'pipeline_id',
        'stage_id' => 'stage_id',
        'status' => 'status',
        'add_time' => 'add_time',
        'won_time' => 'won_time',
        'lost_time' => 'lost_time',
        'close_time' => 'close_time',
        'expected_close_date' => 'expected_close_date',
        'probability' => 'probability',
        'lost_reason' => 'lost_reason',
        'visible_to' => 'visible_to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'value' => 'setValue',
        'label' => 'setLabel',
        'currency' => 'setCurrency',
        'user_id' => 'setUserId',
        'person_id' => 'setPersonId',
        'org_id' => 'setOrgId',
        'pipeline_id' => 'setPipelineId',
        'stage_id' => 'setStageId',
        'status' => 'setStatus',
        'add_time' => 'setAddTime',
        'won_time' => 'setWonTime',
        'lost_time' => 'setLostTime',
        'close_time' => 'setCloseTime',
        'expected_close_date' => 'setExpectedCloseDate',
        'probability' => 'setProbability',
        'lost_reason' => 'setLostReason',
        'visible_to' => 'setVisibleTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'value' => 'getValue',
        'label' => 'getLabel',
        'currency' => 'getCurrency',
        'user_id' => 'getUserId',
        'person_id' => 'getPersonId',
        'org_id' => 'getOrgId',
        'pipeline_id' => 'getPipelineId',
        'stage_id' => 'getStageId',
        'status' => 'getStatus',
        'add_time' => 'getAddTime',
        'won_time' => 'getWonTime',
        'lost_time' => 'getLostTime',
        'close_time' => 'getCloseTime',
        'expected_close_date' => 'getExpectedCloseDate',
        'probability' => 'getProbability',
        'lost_reason' => 'getLostReason',
        'visible_to' => 'getVisibleTo'
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

    const STATUS_OPEN = 'open';
    const STATUS_WON = 'won';
    const STATUS_LOST = 'lost';
    const STATUS_DELETED = 'deleted';

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getStatusAllowableValues(): array
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_WON,
            self::STATUS_LOST,
            self::STATUS_DELETED,
        ];
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['person_id'] = $data['person_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['pipeline_id'] = $data['pipeline_id'] ?? null;
        $this->container['stage_id'] = $data['stage_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['won_time'] = $data['won_time'] ?? null;
        $this->container['lost_time'] = $data['lost_time'] ?? null;
        $this->container['close_time'] = $data['close_time'] ?? null;
        $this->container['expected_close_date'] = $data['expected_close_date'] ?? null;
        $this->container['probability'] = $data['probability'] ?? null;
        $this->container['lost_reason'] = $data['lost_reason'] ?? null;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the deal
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The value of the deal. If omitted, value will be set to 0.
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets label
     *
     * @return int[]|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param int[]|null $label The array of the labels IDs.
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency of the deal. Accepts a 3-character currency code. If omitted, currency will be set to the default currency of the authorized user.
     *
     * @return self
     */
    public function setCurrency($currency): self
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id The ID of the user which will be the owner of the created deal. If not provided, the user making the request will be used.
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int|null
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int|null $person_id The ID of a person which this deal will be linked to. If the person does not exist yet, it needs to be created first. This property is required unless `org_id` is specified.
     *
     * @return self
     */
    public function setPersonId($person_id): self
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param int|null $org_id The ID of an organization which this deal will be linked to. If the organization does not exist yet, it needs to be created first. This property is required unless `person_id` is specified.
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return int|null
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int|null $pipeline_id The ID of the pipeline this deal will be added to. By default, the deal will be added to the first stage of the specified pipeline. Please note that `pipeline_id` and `stage_id` should not be used together as `pipeline_id` will be ignored.
     *
     * @return self
     */
    public function setPipelineId($pipeline_id): self
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return int|null
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param int|null $stage_id The ID of the stage this deal will be added to. Please note that a pipeline will be assigned automatically based on the `stage_id`. If omitted, the deal will be placed in the first stage of the default pipeline.
     *
     * @return self
     */
    public function setStageId($stage_id): self
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status open = Open, won = Won, lost = Lost, deleted = Deleted. If omitted, status will be set to open.
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets add_time
     *
     * @return string|null
     */
    public function getAddTime()
    {
        return $this->container['add_time'];
    }

    /**
     * Sets add_time
     *
     * @param string|null $add_time The optional creation date & time of the deal in UTC. Requires admin user API token. Format: YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets won_time
     *
     * @return string|null
     */
    public function getWonTime()
    {
        return $this->container['won_time'];
    }

    /**
     * Sets won_time
     *
     * @param string|null $won_time The optional date and time of changing the deal status as won in UTC. Format: YYYY-MM-DD HH:MM:SS. Can be set only when deal `status` is already Won. Can not be used together with `lost_time`.
     *
     * @return self
     */
    public function setWonTime($won_time): self
    {
        $this->container['won_time'] = $won_time;

        return $this;
    }

    /**
     * Gets lost_time
     *
     * @return string|null
     */
    public function getLostTime()
    {
        return $this->container['lost_time'];
    }

    /**
     * Sets lost_time
     *
     * @param string|null $lost_time The optional date and time of changing the deal status as lost in UTC. Format: YYYY-MM-DD HH:MM:SS. Can be set only when deal `status` is already Lost. Can not be used together with `won_time`.
     *
     * @return self
     */
    public function setLostTime($lost_time): self
    {
        $this->container['lost_time'] = $lost_time;

        return $this;
    }

    /**
     * Gets close_time
     *
     * @return string|null
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time
     *
     * @param string|null $close_time The optional date and time of closing the deal in UTC. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setCloseTime($close_time): self
    {
        $this->container['close_time'] = $close_time;

        return $this;
    }

    /**
     * Gets expected_close_date
     *
     * @return \DateTime|null
     */
    public function getExpectedCloseDate()
    {
        return $this->container['expected_close_date'];
    }

    /**
     * Sets expected_close_date
     *
     * @param \DateTime|null $expected_close_date The expected close date of the deal. In ISO 8601 format: YYYY-MM-DD.
     *
     * @return self
     */
    public function setExpectedCloseDate($expected_close_date): self
    {
        $this->container['expected_close_date'] = $expected_close_date;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float|null $probability The success probability percentage of the deal. Used/shown only when `deal_probability` for the pipeline of the deal is enabled.
     *
     * @return self
     */
    public function setProbability($probability): self
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets lost_reason
     *
     * @return string|null
     */
    public function getLostReason()
    {
        return $this->container['lost_reason'];
    }

    /**
     * Sets lost_reason
     *
     * @param string|null $lost_reason The optional message about why the deal was lost (to be used when status = lost)
     *
     * @return self
     */
    public function setLostReason($lost_reason): self
    {
        $this->container['lost_reason'] = $lost_reason;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return VisibleTo|null
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param VisibleTo|null $visible_to The visibility of the deal. If omitted, the visibility will be set to the default visibility setting of this item type for the authorized user. Read more about visibility groups <a href=\"https://support.pipedrive.com/en/article/visibility-groups\" target=\"_blank\" rel=\"noopener noreferrer\">here</a>.<h4>Essential / Advanced plan</h4><table><tr><th style=\"width:40px\">Value</th><th>Description</th></tr><tr><td>`1`</td><td>Owner &amp; followers</td><tr><td>`3`</td><td>Entire company</td></tr></table><h4>Professional / Enterprise plan</h4><table><tr><th style=\"width:40px\">Value</th><th>Description</th></tr><tr><td>`1`</td><td>Owner only</td><tr><td>`3`</td><td>Owner's visibility group</td></tr><tr><td>`5`</td><td>Owner's visibility group and sub-groups</td></tr><tr><td>`7`</td><td>Entire company</td></tr></table>
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

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


