<?php 

namespace Azhar\Test\Model;

// use Azhar\Test\Api\Data\PostInterface;
// use Magento\Framework\DataObject\IdentityInterface;

class Post  extends \Magento\Framework\Model\AbstractModel
{



    const REQUEST_ID       = 'entity_id';
    const NAME   = 'name';
    const IMAGE   = 'image';
    const UPDATE_TIME   = 'update_time';
    const CREATION_TIME   = 'creation_time';
    const STATUS     = 'status';

    /**#@+
     * Post's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    protected function _construct()
    {
        $this->_init('Azhar\Test\Model\ResourceModel\Post');
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::REQUEST_ID);
    }
    /**
     * Get title
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    /**
     * Get title
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * set ID
     * @param int $entity_id
     * @return *\Api\Data\PostInterface
     */
    public function setId($entity_id)
    {
        return $this->setData(self::REQUEST_ID, $entity_id);
    }

    /**
     * set name
     * @param int $last_name
     * @return *\Api\Data\PostInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * set name
     * @param int $last_name
     * @return *\Api\Data\PostInterface
     */
    public function setImage($Image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * set creation time
     * @param int $creation_time
     * @return *\Api\Data\PostInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * set update time
     * @param int $update_time
     * @return *\Api\Data\PostInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

    /**
     * set status of record
     * @param int $status
     * @return *\Api\Data\PostInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

}