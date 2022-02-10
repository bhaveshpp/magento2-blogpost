<?php
namespace Bhaveshpp\Blogpost\Controller\Adminhtml\Author;
class Index extends \Magento\Backend\App\Action  
{

    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Bhaveshpp_Blogpost::author'; 

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE);
        $resultPage->addBreadcrumb(__('Blogpost'), __('Blogpost'));
        $resultPage->addBreadcrumb(__('Manage Author'), __('Manage Author'));
        $resultPage->getConfig()->getTitle()->prepend(__('Author'));
        return $resultPage;
    }

}