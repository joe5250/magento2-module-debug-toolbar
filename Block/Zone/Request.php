<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module
 * to newer versions in the future.
 */
declare(strict_types=1);

namespace Smile\DebugToolbar\Block\Zone;

use Magento\Framework\App\Request\Http as MagentoRequest;
use Magento\Framework\App\RequestInterface;

/**
 * Zone for Debug Toolbar Block
 *
 * @author    Laurent Minguet <dirtech@smile.fr>
 * @copyright 2019 Smile
 * @license   Eclipse Public License 2.0 (EPL-2.0)
 */
class Request extends AbstractZone
{
    /**
     * @var MagentoRequest
     */
    protected $request;

    /**
     * @inheritdoc
     */
    public function getCode(): string
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function getTitle(): string
    {
        return 'Request';
    }

    /**
     * Set the request.
     *
     * @param MagentoRequest $request
     * @return $this
     */
    public function setRequest(MagentoRequest $request): Request
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Get the controller class name.
     *
     * @return string
     */
    public function getControllerClassName(): string
    {
        return $this->helperData->getValue('controller_classname');
    }
}
