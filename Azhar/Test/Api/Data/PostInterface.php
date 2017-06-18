<?php
namespace Azhar\Test\Api\Data;


interface PostInterface
{

    const REQUEST_ID       = 'entity_id';
    const SWATCHES         = 'swatches';
    const FIRST_NAME       = 'first_name';
    const LAST_NAME       = 'last_name';
    const COMPANY = 'company';
    const ADDRESS_ONE = 'address_one';
    const ADDRESS_TWO = 'address_two';
    const CITY = 'city';
    const STATE = 'state';
    const ZIP = 'zip';
    const EMAIL = 'email';
    const PHONE = 'phone';
    const UPDATE_TIME   = 'update_time';
    const CREATION_TIME   = 'creation_time';
    const STATUS     = 'status';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Swatches
     *
     * @return comma separated string
     */
    public function getSwatches();

    /**
     * Get first name
     *
     * @return string|null
     */
    public function getFirstName();

    /**
     * Get last name
     *
     * @return string|null
     */
    public function getLastName();

    /**
     * Get company
     *
     * @return string|null
     */
    public function getCompany();

    /**
     * Get address first line
     *
     * @return string|null
     */
    public function getAddressOne();

    /**
     * Get address second line
     *
     * @return string|null
     */
    public function getAddressSecond();

    /**
     * Get city
     *
     * @return string|null
     */
    public function getCity();

    /**
     * Get state
     *
     * @return string|null
     */
    public function getState();

    /**
     * Get zip
     *
     * @return string|null
     */
    public function getZip();

    /**
     * Get email
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Get phone
     *
     * @return string|null
     */
    public function getPhone();

    /**
     * Get creation time
     *
     * @return string/date|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string/date|null
     */
    public function getUpdateTime();

    /**
     * status of record
     *
     * @return bool|null
     */
    public function getStatus();






















    /**
     * set ID
     * @param int $entity_id
     * @return *\Api\Data\PostInterface
     */
    public function setId($entity_id);

    /**
     * set Swatches
     * @param string $swatches
     * @return *\Api\Data\PostInterface
     */
    public function setSwatches($swatches);

    /**
     * set first name
     * @param int $first_name
     * @return *\Api\Data\PostInterface
     */
    public function setFirstName($first_name);

    /**
     * set last name
     * @param int $last_name
     * @return *\Api\Data\PostInterface
     */
    public function setLastName($last_name);

    /**
     * set company
     * @param int $company
     * @return *\Api\Data\PostInterface
     */
    public function setCompany($company);

    /**
     * set address first line
     * @param int $address_one
     * @return *\Api\Data\PostInterface
     */
    public function setAddressOne($address_one);

    /**
     * set address second line
     * @param int $address_two
     * @return *\Api\Data\PostInterface
     */
    public function setAddressTwo($address_two);

    /**
     * set city
     * @param int $city
     * @return *\Api\Data\PostInterface
     */
    public function setCity($city);

    /**
     * set state
     * @param int $state
     * @return *\Api\Data\PostInterface
     */
    public function setState($state);

    /**
     * set zip
     * @param int $zip
     * @return *\Api\Data\PostInterface
     */
    public function setZip($zip);

    /**
     * set email
     * @param int $email
     * @return *\Api\Data\PostInterface
     */
    public function setEmail($email);

    /**
     * set phone
     * @param int $phone
     * @return *\Api\Data\PostInterface
     */
    public function setPhone($phone);

    /**
     * set creation time
     * @param int $creation_time
     * @return *\Api\Data\PostInterface
     */
    public function setCreationTime($creation_time);

    /**
     * set update time
     * @param int $update_time
     * @return *\Api\Data\PostInterface
     */
    public function setUpdateTime($update_time);

    /**
     * set status of record
     * @param int $status
     * @return *\Api\Data\PostInterface
     */
    public function setStatus($status);



}