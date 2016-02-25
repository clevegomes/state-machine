<?php
/**
 * Author: Cleve Gomes
 */

namespace Dispatch;
use Dispatch\EventDispatcher;

class StateListener {

	private $evenDispatcher;

	public function __construct(EventDispatcher $eventDispatcher)
	{
		$this->evenDispatcher = $eventDispatcher;
	}

	public function registerListeners($event,$callable)
	{

		$this->evenDispatcher->on($event,$callable);


	}





}