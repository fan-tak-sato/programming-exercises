<?php
class Example  extends EventProvider
{
 
    public function doSomething($foo, $baz)
    {
 
        $params = compact('foo' , 'baz') ;
        $this->trigger(__FUNCTION__ , $params) ;  
 
    }
 
    public function doagain()
    {
 
        $params = array('one'=>'foo' , 'two' => 'baz') ;
        $this->trigger(__FUNCTION__ , $params) ; 
 
    }
 
    public function dolast($error)
    {
 
        if ($error) {
        $this->trigger(__FUNCTION__) ; 
 
        }
    }
}