<?php
namespace Azhar\Test\Api;
/**
 * Interface WebServiceRepositoryInterface
 * @package Azhar\Test\Api
 */
interface WebServiceRepositoryInterface
{
    /**
     * @return int
     */
    public function getCatalogProductCount();
    /**
     * @param int $categoryId
     *
     * @return mixed
     */
    public function getCategoryProductCount($categoryId);
}