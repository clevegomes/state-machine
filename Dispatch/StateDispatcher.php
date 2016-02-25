<?php
/**
 * Author: Cleve Gomes
 */

namespace Dispatch;


class StateDispatcher implements  EventDispatcher {


	private  $listnerArry = [];
	/**
	 * Dispatches an event.
	 */
	public function dispatch($eventName, array $parameters = array())
	{
		// TODO: Implement dispatch() method.

		foreach($this->listnerArry as $listener)
		{
			if($listener[0] == $eventName)
			{
				call_user_func_array($listener[1],$parameters);
			}
		}

	}

	/**
	 * Attaches the $callable to an event, so that it will get executed
	 * once the event is dispatched.
	 */
	public function on($eventName, $calllable)
	{
		// TODO: Implement on() method.
		$this->listnerArry[] = [$eventName,$calllable];


	}
}