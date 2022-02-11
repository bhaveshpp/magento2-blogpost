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

namespace Bhaveshpp\Blogpost\Api\Data;

/**
 * PostInterface interface.
 *
 * @api
 */
interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     *
     * @param $int
     * @param $string
     * @return string
     */

    const POST_ID          = 'post_id';
    const URI              = 'uri';
    const IS_ACTIVE        = 'is_active';
    const TITLE            = 'title';
    const AUTHOR_ID        = 'author_id';
    const CATEGORY_IDS     = 'category_ids';
    const TAGS             = 'tags';
    const CONTENT          = 'content';
    const SORT_DESCRIPTION = 'sort_description';
    const LIST_VIEW_IMAGE  = 'list_view_image';
    const BANNER           = 'banner';
    const PAGE_LAYOUT      = 'page_layout';
    const SORT_ORDER       = 'sort_order';
    const META_TITLE       = 'meta_title';
    const META_KEYWORDS    = 'meta_keywords';
    const META_DESCRIPTION = 'meta_description';
    const CREATION_TIME    = 'creation_time';
    const UPDATE_TIME      = 'update_time';

    /**
     * get id
     *
     * @return int|null
     */
    public function getId();

    /**
     * get post uri
     *
     * @return string
     */
    public function getUri();

    /**
     * get is active
     *
     * @return void
     */
    public function getIsActive();

    /**
     * get post title
     *
     * @return string
     */
    public function getTitle();

    /**
     * get authr id
     *
     * @return int|null
     */
    public function getAutherId();

    /**
     * get category ids
     *
     * @return string|null
     */
    public function getCategoryIds();
    
    /**
     * get post tags
     *
     * @return string
     */
    public function getTags();

    /**
     * get post content
     *
     * @return string
     */
    public function getContent();

    /**
     * get post sort description
     *
     * @return string
     */
    public function getSortDescription();

    /**
     * get list view image
     *
     * @return string
     */
    public function getListViewImage();

    /**
     * get banner image
     *
     * @return string
     */
    public function getBanner();

    /**
     * get page layout
     *
     * @return string
     */
    public function getPageLayout();

    /**
     * get sort order
     *
     * @return int
     */
    public function getSortOrder();

    /**
     * get meta title
     *
     * @return string
     */
    public function getMetaTitle();

    /**
     * get meta keyword
     *
     * @return string
     */
    public function getMetaKeywords();

    /**
     * get meta description
     *
     * @return string
     */
    public function getMetaDescription();

    /**
     * get creation time
     *
     * @return string
     */
    public function getCreationTime();

    /**
     * get update time
     *
     * @return string
     */
    public function getUpdateTime();
    
    /**
     * set id
     *
     * @param  int $id
     * @return PostInterface
     */
    public function setId($id);

    /**
     * set post uri
     *
     * @param  string $uri
     * @return PostInterface
     */
    public function setUri($uri);
    
    /**
     * set is active post
     *
     * @param  bool|int $isActive
     * @return PostInterface
     */
    public function setIsActive($isActive);

    /**
     * set post title
     *
     * @param  string $title
     * @return PostInterface
     */
    public function setTitle($title);

    /**
     * set auther id
     *
     * @param  string|int|null $autherId
     * @return PostInterface
     */
    public function setAutherId($autherId);

    /**
     * set category ids
     *
     * @param  string $categoryIds
     * @return PostInterface
     */
    public function setCategoryIds($categoryIds);

    /**
     * set tags
     *
     * @param  string $tags
     * @return PostInterface
     */
    public function setTags($tags);

    /**
     * set content
     *
     * @param  string $content
     * @return PostInterface
     */
    public function setContent($content);

    /**
     * set sort description
     *
     * @param  string $sortDescription
     * @return PostInterface
     */
    public function setSortDescription($sortDescription);
    
    /**
     * set list view image
     *
     * @param  string $listViewImage
     * @return PostInterface
     */
    public function setListViewImage($listViewImage);

    /**
     * set banner image
     *
     * @param  string $banner
     * @return PostInterface
     */
    public function setBanner($banner);

    /**
     * set page layout
     *
     * @param  string $pageLayout
     * @return PostInterface
     */
    public function setPageLayout($pageLayout);

    /**
     * set sort order
     *
     * @param  string $sortOrder
     * @return PostInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * set meta title
     *
     * @param  string $metaTitle
     * @return PostInterface
     */
    public function setMetaTitle($metaTitle);

    /**
     * set meta keywords
     *
     * @param  string $metaKeywords
     * @return PostInterface
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * set meta description
     *
     * @param  string $metaDescription
     * @return PostInterface
     */
    public function setMetaDescription($metaDescription);

    /**
     * set creation time
     *
     * @param  string $creationTime
     * @return PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * set update time
     *
     * @param  string $updateTime
     * @return PostInterface
     */
    public function setUpdateTime($updateTime);
}
