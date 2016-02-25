Events to the rescue


I have re written the event dispatch .Below is the brief description on it.


controller.php      : Main entry point that will registers the listeners and dispatch events when required.
EventDispatcher.php : Interface provided to implement the event dispatcher.
StateDispatcher.php : Its the dispatcher that implements the EventDispatcher interface .Its responsible for registering
                      and triggering the events.
StateListener       : Its responsible to register all the callback function and events to the dispatcher.                      
                      

 
 