<?php

namespace Wm21w\Sage\Cron;
 
class Sage
{
	protected $logger;
 
	public function __construct(
		\Psr\Log\LoggerInterface $loggerInterface
	) {
		$this->logger = $loggerInterface;
	}
 
	public function execute() {

		//test command line
        //php bin/magento cron:run --group="wm21w_sage_cron_group"
		//$this->logger->debug('Wm21w\Sage\Cron\Sage');

	}
}