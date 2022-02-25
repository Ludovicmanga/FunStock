<?php
/**
 * VisaApplication
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * VisaApplication Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VisaApplication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VisaApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'year' => 'int',
        'quarter' => 'int',
        'symbol' => 'string',
        'case_number' => 'string',
        'case_status' => 'string',
        'received_date' => 'string',
        'visa_class' => 'string',
        'job_title' => 'string',
        'soc_code' => 'string',
        'full_time_position' => 'string',
        'begin_date' => 'string',
        'end_date' => 'string',
        'employer_name' => 'string',
        'worksite_address' => 'string',
        'worksite_city' => 'string',
        'worksite_county' => 'string',
        'worksite_state' => 'string',
        'worksite_postal_code' => 'string',
        'wage_range_from' => 'float',
        'wage_range_to' => 'float',
        'wave_unit_of_pay' => 'string',
        'wage_level' => 'string',
        'h1b_dependent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'year' => 'int64',
        'quarter' => 'int64',
        'symbol' => null,
        'case_number' => null,
        'case_status' => null,
        'received_date' => null,
        'visa_class' => null,
        'job_title' => null,
        'soc_code' => null,
        'full_time_position' => null,
        'begin_date' => null,
        'end_date' => null,
        'employer_name' => null,
        'worksite_address' => null,
        'worksite_city' => null,
        'worksite_county' => null,
        'worksite_state' => null,
        'worksite_postal_code' => null,
        'wage_range_from' => 'float',
        'wage_range_to' => 'float',
        'wave_unit_of_pay' => null,
        'wage_level' => null,
        'h1b_dependent' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
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
        'year' => 'year',
        'quarter' => 'quarter',
        'symbol' => 'symbol',
        'case_number' => 'caseNumber',
        'case_status' => 'caseStatus',
        'received_date' => 'receivedDate',
        'visa_class' => 'visaClass',
        'job_title' => 'jobTitle',
        'soc_code' => 'socCode',
        'full_time_position' => 'fullTimePosition',
        'begin_date' => 'beginDate',
        'end_date' => 'endDate',
        'employer_name' => 'employerName',
        'worksite_address' => 'worksiteAddress',
        'worksite_city' => 'worksiteCity',
        'worksite_county' => 'worksiteCounty',
        'worksite_state' => 'worksiteState',
        'worksite_postal_code' => 'worksitePostalCode',
        'wage_range_from' => 'wageRangeFrom',
        'wage_range_to' => 'wageRangeTo',
        'wave_unit_of_pay' => 'waveUnitOfPay',
        'wage_level' => 'wageLevel',
        'h1b_dependent' => 'h1bDependent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year' => 'setYear',
        'quarter' => 'setQuarter',
        'symbol' => 'setSymbol',
        'case_number' => 'setCaseNumber',
        'case_status' => 'setCaseStatus',
        'received_date' => 'setReceivedDate',
        'visa_class' => 'setVisaClass',
        'job_title' => 'setJobTitle',
        'soc_code' => 'setSocCode',
        'full_time_position' => 'setFullTimePosition',
        'begin_date' => 'setBeginDate',
        'end_date' => 'setEndDate',
        'employer_name' => 'setEmployerName',
        'worksite_address' => 'setWorksiteAddress',
        'worksite_city' => 'setWorksiteCity',
        'worksite_county' => 'setWorksiteCounty',
        'worksite_state' => 'setWorksiteState',
        'worksite_postal_code' => 'setWorksitePostalCode',
        'wage_range_from' => 'setWageRangeFrom',
        'wage_range_to' => 'setWageRangeTo',
        'wave_unit_of_pay' => 'setWaveUnitOfPay',
        'wage_level' => 'setWageLevel',
        'h1b_dependent' => 'setH1bDependent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year' => 'getYear',
        'quarter' => 'getQuarter',
        'symbol' => 'getSymbol',
        'case_number' => 'getCaseNumber',
        'case_status' => 'getCaseStatus',
        'received_date' => 'getReceivedDate',
        'visa_class' => 'getVisaClass',
        'job_title' => 'getJobTitle',
        'soc_code' => 'getSocCode',
        'full_time_position' => 'getFullTimePosition',
        'begin_date' => 'getBeginDate',
        'end_date' => 'getEndDate',
        'employer_name' => 'getEmployerName',
        'worksite_address' => 'getWorksiteAddress',
        'worksite_city' => 'getWorksiteCity',
        'worksite_county' => 'getWorksiteCounty',
        'worksite_state' => 'getWorksiteState',
        'worksite_postal_code' => 'getWorksitePostalCode',
        'wage_range_from' => 'getWageRangeFrom',
        'wage_range_to' => 'getWageRangeTo',
        'wave_unit_of_pay' => 'getWaveUnitOfPay',
        'wage_level' => 'getWageLevel',
        'h1b_dependent' => 'getH1bDependent'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['year'] = $data['year'] ?? null;
        $this->container['quarter'] = $data['quarter'] ?? null;
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['case_number'] = $data['case_number'] ?? null;
        $this->container['case_status'] = $data['case_status'] ?? null;
        $this->container['received_date'] = $data['received_date'] ?? null;
        $this->container['visa_class'] = $data['visa_class'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['soc_code'] = $data['soc_code'] ?? null;
        $this->container['full_time_position'] = $data['full_time_position'] ?? null;
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['employer_name'] = $data['employer_name'] ?? null;
        $this->container['worksite_address'] = $data['worksite_address'] ?? null;
        $this->container['worksite_city'] = $data['worksite_city'] ?? null;
        $this->container['worksite_county'] = $data['worksite_county'] ?? null;
        $this->container['worksite_state'] = $data['worksite_state'] ?? null;
        $this->container['worksite_postal_code'] = $data['worksite_postal_code'] ?? null;
        $this->container['wage_range_from'] = $data['wage_range_from'] ?? null;
        $this->container['wage_range_to'] = $data['wage_range_to'] ?? null;
        $this->container['wave_unit_of_pay'] = $data['wave_unit_of_pay'] ?? null;
        $this->container['wage_level'] = $data['wage_level'] ?? null;
        $this->container['h1b_dependent'] = $data['h1b_dependent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets year
     *
     * @return int|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year Year.
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets quarter
     *
     * @return int|null
     */
    public function getQuarter()
    {
        return $this->container['quarter'];
    }

    /**
     * Sets quarter
     *
     * @param int|null $quarter Quarter.
     *
     * @return self
     */
    public function setQuarter($quarter)
    {
        $this->container['quarter'] = $quarter;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Symbol.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return string|null
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param string|null $case_number Case number.
     *
     * @return self
     */
    public function setCaseNumber($case_number)
    {
        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets case_status
     *
     * @return string|null
     */
    public function getCaseStatus()
    {
        return $this->container['case_status'];
    }

    /**
     * Sets case_status
     *
     * @param string|null $case_status Case status.
     *
     * @return self
     */
    public function setCaseStatus($case_status)
    {
        $this->container['case_status'] = $case_status;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return string|null
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param string|null $received_date Received date.
     *
     * @return self
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets visa_class
     *
     * @return string|null
     */
    public function getVisaClass()
    {
        return $this->container['visa_class'];
    }

    /**
     * Sets visa_class
     *
     * @param string|null $visa_class Visa class.
     *
     * @return self
     */
    public function setVisaClass($visa_class)
    {
        $this->container['visa_class'] = $visa_class;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title Job Title.
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets soc_code
     *
     * @return string|null
     */
    public function getSocCode()
    {
        return $this->container['soc_code'];
    }

    /**
     * Sets soc_code
     *
     * @param string|null $soc_code SOC Code. A list of SOC code can be found <a href=\"https://www.bls.gov/oes/current/oes_stru.htm\" target=\"_blank\">here</a>.
     *
     * @return self
     */
    public function setSocCode($soc_code)
    {
        $this->container['soc_code'] = $soc_code;

        return $this;
    }

    /**
     * Gets full_time_position
     *
     * @return string|null
     */
    public function getFullTimePosition()
    {
        return $this->container['full_time_position'];
    }

    /**
     * Sets full_time_position
     *
     * @param string|null $full_time_position Full-time position flag.
     *
     * @return self
     */
    public function setFullTimePosition($full_time_position)
    {
        $this->container['full_time_position'] = $full_time_position;

        return $this;
    }

    /**
     * Gets begin_date
     *
     * @return string|null
     */
    public function getBeginDate()
    {
        return $this->container['begin_date'];
    }

    /**
     * Sets begin_date
     *
     * @param string|null $begin_date Job's start date.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date Job's end date.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets employer_name
     *
     * @return string|null
     */
    public function getEmployerName()
    {
        return $this->container['employer_name'];
    }

    /**
     * Sets employer_name
     *
     * @param string|null $employer_name Company's name.
     *
     * @return self
     */
    public function setEmployerName($employer_name)
    {
        $this->container['employer_name'] = $employer_name;

        return $this;
    }

    /**
     * Gets worksite_address
     *
     * @return string|null
     */
    public function getWorksiteAddress()
    {
        return $this->container['worksite_address'];
    }

    /**
     * Sets worksite_address
     *
     * @param string|null $worksite_address Worksite address.
     *
     * @return self
     */
    public function setWorksiteAddress($worksite_address)
    {
        $this->container['worksite_address'] = $worksite_address;

        return $this;
    }

    /**
     * Gets worksite_city
     *
     * @return string|null
     */
    public function getWorksiteCity()
    {
        return $this->container['worksite_city'];
    }

    /**
     * Sets worksite_city
     *
     * @param string|null $worksite_city Worksite city.
     *
     * @return self
     */
    public function setWorksiteCity($worksite_city)
    {
        $this->container['worksite_city'] = $worksite_city;

        return $this;
    }

    /**
     * Gets worksite_county
     *
     * @return string|null
     */
    public function getWorksiteCounty()
    {
        return $this->container['worksite_county'];
    }

    /**
     * Sets worksite_county
     *
     * @param string|null $worksite_county Worksite county.
     *
     * @return self
     */
    public function setWorksiteCounty($worksite_county)
    {
        $this->container['worksite_county'] = $worksite_county;

        return $this;
    }

    /**
     * Gets worksite_state
     *
     * @return string|null
     */
    public function getWorksiteState()
    {
        return $this->container['worksite_state'];
    }

    /**
     * Sets worksite_state
     *
     * @param string|null $worksite_state Worksite state.
     *
     * @return self
     */
    public function setWorksiteState($worksite_state)
    {
        $this->container['worksite_state'] = $worksite_state;

        return $this;
    }

    /**
     * Gets worksite_postal_code
     *
     * @return string|null
     */
    public function getWorksitePostalCode()
    {
        return $this->container['worksite_postal_code'];
    }

    /**
     * Sets worksite_postal_code
     *
     * @param string|null $worksite_postal_code Worksite postal code.
     *
     * @return self
     */
    public function setWorksitePostalCode($worksite_postal_code)
    {
        $this->container['worksite_postal_code'] = $worksite_postal_code;

        return $this;
    }

    /**
     * Gets wage_range_from
     *
     * @return float|null
     */
    public function getWageRangeFrom()
    {
        return $this->container['wage_range_from'];
    }

    /**
     * Sets wage_range_from
     *
     * @param float|null $wage_range_from Wage range from.
     *
     * @return self
     */
    public function setWageRangeFrom($wage_range_from)
    {
        $this->container['wage_range_from'] = $wage_range_from;

        return $this;
    }

    /**
     * Gets wage_range_to
     *
     * @return float|null
     */
    public function getWageRangeTo()
    {
        return $this->container['wage_range_to'];
    }

    /**
     * Sets wage_range_to
     *
     * @param float|null $wage_range_to Wage range to.
     *
     * @return self
     */
    public function setWageRangeTo($wage_range_to)
    {
        $this->container['wage_range_to'] = $wage_range_to;

        return $this;
    }

    /**
     * Gets wave_unit_of_pay
     *
     * @return string|null
     */
    public function getWaveUnitOfPay()
    {
        return $this->container['wave_unit_of_pay'];
    }

    /**
     * Sets wave_unit_of_pay
     *
     * @param string|null $wave_unit_of_pay Wage unit of pay.
     *
     * @return self
     */
    public function setWaveUnitOfPay($wave_unit_of_pay)
    {
        $this->container['wave_unit_of_pay'] = $wave_unit_of_pay;

        return $this;
    }

    /**
     * Gets wage_level
     *
     * @return string|null
     */
    public function getWageLevel()
    {
        return $this->container['wage_level'];
    }

    /**
     * Sets wage_level
     *
     * @param string|null $wage_level Wage level.
     *
     * @return self
     */
    public function setWageLevel($wage_level)
    {
        $this->container['wage_level'] = $wage_level;

        return $this;
    }

    /**
     * Gets h1b_dependent
     *
     * @return string|null
     */
    public function getH1bDependent()
    {
        return $this->container['h1b_dependent'];
    }

    /**
     * Sets h1b_dependent
     *
     * @param string|null $h1b_dependent H1B dependent flag.
     *
     * @return self
     */
    public function setH1bDependent($h1b_dependent)
    {
        $this->container['h1b_dependent'] = $h1b_dependent;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


