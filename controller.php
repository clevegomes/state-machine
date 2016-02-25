<?php
/**
 * Author: Cleve Gomes
 */

use Dispatch\StateDispatcher;
use Dispatch\StateListener;

include_once("autoload.php");

// Callable function
$callable = function($state1,$state2) { echo "Change from ".$state1." to ".$state2; };

$dispatcherObj = new StateDispatcher();
$listenerObj = new StateListener($dispatcherObj);

//Registering the listener
$listenerObj->registerListeners('state.change',$callable);




//Dispatching the state.change
$dispatcherObj->dispatch('state.change',["First","Second"]);





