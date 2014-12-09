<?php
abstract class EventProvider implements Zend\EventManager\EventManagerAwareInterface
{
    protected $eventManager ;
 
    public function setEventManager(Zend\EventManager\EventManagerInterface $eventManager)
    {
        $this->eventManager = $eventManager ;
    }
 
    public function getEventManager()
    {
        if (!$this->eventManager instanceof Zend\EventManager\EventManagerInterface ) {
        $this->setEventManager(new Zend\EventManager\EventManager(array(__CLASS__, get_called_class())));
        }
        return $this->eventManager ;
    }
 
    protected function trigger($function , $params = array())
    {
        $events = $this->getEventManager()->getEvents()  ;
        $class = get_called_class() ; 
 
        if (in_array($class.':'.$function , $events)) {
 
            $this->getEventManager()->trigger($class.':'.$function , $this , $params ) ; 
 
            } elseif (in_array( $class.':*' , $events)){
 
            $this->getEventManager()->trigger($class.':*' , $this , $params ) ;
        }
     }
 }
 