<?php
/**
 * Bhaveshpp 
 *
 * This code is developed by Bhavesh Prajapati
 *
 * Do not edit or add to this file, a composer will
 * revert changes while upgrading.
 * 
 * if you need new features or found any bug
 * you can suggest us here.
 * https://github.com/bhaveshpp/magento2-blogpost/issues
 *
 * @category Magento2
 * @package  Bhaveshpp_Blogpost
 * @author Bhavesh Prajapati <bhaveshp.magento@gmail.com>
 * @license  https://bhaveshpp.github.io/LICENSE.txt
 */
namespace Bhaveshpp\Blogpost\Model\Post;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements \Bhaveshpp\Blogpost\Api\Data\PostInterface 
{

    /**
     * get id
     * @inheritDoc
     */
    public function getId() {
        return $this->getData(self::POST_ID);
    }

    /**
     * get post uri
     * @inheritDoc
     */
    public function getUri() {
        return $this->getData(self::URI);
    }

    /**
     * get is active
     * @inheritDoc
     */
    public function getIsActive() {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * get post title
     * @inheritDoc
     */
    public function getTitle() {
        return $this->getData(self::TITLE);
    }

    /**
     * get authr id
     * @inheritDoc
     */
    public function getAutherId() {
        return $this->getData(self::AUTHOR_ID);
    }

    /**
     * get category ids
     * @inheritDoc
     */
    public function getCategoryIds() {
        return $this->getData(self::CATEGORY_IDS);
    }
    
    /**
     * get post tags
     * @inheritDoc
     */
    public function getTags() {
        return $this->getData(self::TAGS);
    }

    /**
     * get post content
     * @inheritDoc
     */
    public function getContent() {
        return $this->getData(self::CONTENT);
    }

    /**
     * get post sort description
     * @inheritDoc
     */
    public function getSortDescription() {
        return $this->getData(self::SORT_DESCRIPTION);
    }

    /**
     * get list view image
     * @inheritDoc
     */
    public function getListViewImage() {
        return $this->getData(self::LIST_VIEW_IMAGE);
    }

    /**
     * get banner image
     * @inheritDoc
     */
    public function getBanner() {
        return $this->getData(self::BANNER);
    }

    /**
     * get page layout
     * @inheritDoc
     */
    public function getPageLayout() {
        return $this->getData(self::PAGE_LAYOUT);
    }

    /**
     * get sort order
     * @inheritDoc
     */
    public function getSortOrder() {
        return $this->getData(self::SORT_ORDER);
    }

    /**
     * get meta title
     * @inheritDoc
     */
    public function getMetaTitle() {
        return $this->getData(self::META_TITLE);
    }

    /**
     * get meta keyword
     * @inheritDoc
     */
    public function getMetaKeywords() {
        return $this->getData(self::META_KEYWORDS);
    }

    /**
     * get meta description
     * @inheritDoc
     */
    public function getMetaDescription() {
        return $this->getData(self::META_DESCRIPTION);
    }

    /**
     * get creation time
     * @inheritDoc
     */
    public function getCreationTime() {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * get update time
     * @inheritDoc
     */
    public function getUpdateTime() {
        return $this->getData(self::UPDATE_TIME);
    }
    
    /**
     * set id
     * @inheritDoc
     */
    public function setId($id) {
        return $this->setData(self::POST_ID, $id);
    }

    /**
     * set post uri
     * @inheritDoc
     */
    public function setUri($uri) {
        return $this->setData(self::URI, $uri);
    }
    
    /**
     * set is active post
     * @inheritDoc
     */
    public function setIsActive($isActive) {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * set post title
     * @inheritDoc
     */
    public function setTitle($title) {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * set auther id
     * @inheritDoc
     */
    public function setAutherId($autherId) {
        return $this->setData(self::AUTHOR_ID, $autherId);
    }

    /**
     * set category ids
     * @inheritDoc
     */
    public function setCategoryIds($categoryIds) {
        return $this->setData(self::CATEGORY_IDS, $categoryIds);
    }

    /**
     * set tags
     * @inheritDoc
     */
    public function setTags($tags) {
        return $this->setData(self::TAGS, $tags);
    }

    /**
     * set content
     * @inheritDoc
     */
    public function setContent($content) {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * set sort description
     * @inheritDoc
     */
    public function setSortDescription($sortDescription) {
        return $this->setData(self::SORT_DESCRIPTION, $sortDescription);
    }
    
    /**
     * set list view image
     * @inheritDoc
     */
    public function setListViewImage($listViewImage) {
        return $this->setData(self::LIST_VIEW_IMAGE, $listViewImage);
    }

    /**
     * set banner image
     * @inheritDoc
     */
    public function setBanner($banner) {
        return $this->setData(self::BANNER, $banner);
    }

    /**
     * set page layout
     * @inheritDoc
     */
    public function setPageLayout($pageLayout) {
        return $this->setData(self::PAGE_LAYOUT, $pageLayout);
    }

    /**
     * set sort order
     * @inheritDoc
     */
    public function setSortOrder($sortOrder) {
        return $this->setData(self::SORT_ORDER, $sortOrder);
    }

    /**
     * set meta title
     * @inheritDoc
     */
    public function setMetaTitle($metaTitle) {
        return $this->setData(self::META_TITLE, $metaTitle);
    }

    /**
     * set meta keywords
     * @inheritDoc
     */
    public function setMetaKeywords($metaKeywords) {
        return $this->setData(self::META_KEYWORDS, $metaKeywords);
    }

    /**
     * set meta description
     * @inheritDoc
     */
    public function setMetaDescription($metaDescription) {
        return $this->setData(self::META_DESCRIPTION, $metaDescription);
    }

    /**
     * set creation time
     * @inheritDoc
     */
    public function setCreationTime($creationTime) {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * set update time
     * @inheritDoc
     */
    public function setUpdateTime($updateTime) {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }
}