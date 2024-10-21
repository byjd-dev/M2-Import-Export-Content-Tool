<?php

declare(strict_types=1);

namespace Piranha\CmsImporter\Controller\Adminhtml\Import;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Index
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Execute view action
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
