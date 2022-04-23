<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Spirit\SkroutzOrderTracking\Observer\Frontend\Checkout;

class OnepageControllerSuccessAction implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Framework\Stdlib\CookieManagerInterface
     */
    protected $_cookieManager;

    /**
     * @var \Magento\Sales\Api\OrderRepositoryInterface
     */
    protected $_orderRepository;

    /**
     * OnepageControllerSuccessAction constructor.
     * @param  \Magento\Framework\Stdlib\CookieManagerInterface  $cookieManager
     * @param  \Magento\Sales\Api\OrderRepositoryInterface  $orderRepository
     */
    public function __construct(
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
    ) {
        $this->_cookieManager = $cookieManager;
        $this->_orderRepository = $orderRepository;
    }

    /**
     * Execute observer
     *
     * @param  \Magento\Framework\Event\Observer  $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        if ($this->getCookie('__skr_nltcs_ss') || $this->getCookie('__skr_nltcs_mt')) {
            $orderIds = $observer->getEvent()->getOrderIds();
            if (empty($orderIds) || !is_array($orderIds)) {
                return;
            }
            foreach ($orderIds as $orderId) {
                $order = $this->_orderRepository->get($orderId);
                $order->setData('skroutz_order', 1);
                $order->save();
            }
        }
    }

    /**
     * Get data from cookie set in remote address
     *
     * @param $name
     * @return string|null
     */
    public function getCookie($name)
    {
        return $this->_cookieManager->getCookie($name);
    }
}
