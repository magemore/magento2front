<?php

namespace Maxime\Jobs\Controller\Adminhtml\Department;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;

class Delete extends Action
{
    protected $_model;

    /**
     * Delete constructor.
     * @param Action\Context $context
     */
    public function __construct(
        Actioin\Context $context,
        \Maxime\Jobs\Model\Department $model
    )
    {
        $this->_model = $model;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Maxime_Jobs::department_delete');
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_model;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Department deleted'));
                $this->resultRedirect->setPath('*/*/')
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Department does not exist'));
        return $resultRedirect->setPath('*/*/');
    }
}
