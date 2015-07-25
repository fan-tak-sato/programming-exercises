<?php
require('vendor/autoload.php');

require('EventProvider.php');
require('Example.php');

$listener1 = function(Zend\EventManager\Event $e) {
	// code to send email-notificationis omitted
	echo 'email issended to administrator' ;
};

$listener2 = function(Zend\EventManager\Event $e) {
 $event = $e->getName();
 $target = get_class($e->getTarget()); // \"Example\"
 $params = $e->getParams();
 printf(
 'Handled event \"%s\" on target--- \"%s\", withparameters %s',
 $event,
 $target,
 json_encode($params)
 );
 }; 
 
$example = new Example() ;
$example->getEventManager()->attach('Example:*' , $listener2) ;
$example->getEventManager()->attach( 'Example:dolast' , $listener1);
$example->getEventManager()->attach( 'Example:dolast' , $listener2);
$example->getEventManager()->attach( array('Example:doSomething', 'Example:doagain') , $listener2 );
 
echo '</pre>';

echo '<pre>' ;
$example->dosomething('bar', 'bat');
echo '
' ;
$example->doagain() ;
echo '
' ;
$example->dolast(true) ;
echo '
' ;
$example->dolast(false) ; // Event will not be triggered
echo '
' ;
//$example->getEventManager()->clearListeners('Example:dolast') ;
$example->dolast(true) ;//Event will not be triggered as it was already detached
print_r($example->getEventManager()->getEvents());
echo '</pre>';