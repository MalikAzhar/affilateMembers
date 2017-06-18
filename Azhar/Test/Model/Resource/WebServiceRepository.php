<?php
namespace Azhar\Test\Model\Resource;
use Azhar\Test\Api\WebServiceRepositoryInterface;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\App\ResourceConnectionFactory;
/**
 * Class WebServiceRepository
 * @package DAzhar\Test\Model
 */
class WebServiceRepository implements WebServiceRepositoryInterface
{
    /**
     * @var ResourceConnectionFactory
     */
    protected $_resourceConnection;
    /**
     * @var ProductCollectionFactory
     */
    protected $_productCollection;
    /**
     * @var CategoryFactory
     */
    protected $_category;
    /**
     * WebServiceRepository constructor.
     *
     * @param ResourceConnectionFactory $_resourceConnection
     */
    public function __construct(ResourceConnectionFactory $_resourceConnection, ProductCollectionFactory $_productCollection, CategoryFactory $_category)
    {
        $this->_resourceConnection = $_resourceConnection;
        $this->_productCollection = $_productCollection;
        $this->_category = $_category;
    }
    /**
     * @return int
     */
    public function getCatalogProductCount()
    {
        return $this->_productCollection->create()->getSize();
    }
    /**
     * @param $categoryId
     *
     * @return int
     */
    public function getCategoryProductCount($categoryId)
    {
        $size = 0;
        $category = $this->_category->create()->load($categoryId);
        if (isset($category) && !empty($category)) {
            $size = $category->getProductCollection()->getSize();
        }
        return $size;
    }
}