<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\SampleMessageQueue\Model\Handler\Async;

use \Psr\Log\LoggerInterface;

class GiftCardAddedSuccess
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Initialize dependencies.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log information about added gift card
     *
     * @param array $data
     * @return void
     */
    public function log(array $data)
    {
        $this->logger->debug('ASYNC Handler: Gift Card Added Successfully: ' . serialize($data));
    }
}