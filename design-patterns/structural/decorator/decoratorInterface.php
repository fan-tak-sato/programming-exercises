<?php
interface Window
{
    public function isOpen();
    public function open();
    public function close();
}
 
class StandardWindow implements Window
{
    protected $_open = false;
	
    public function isOpen()
    {
        return $this->_open;
    }
 
    public function open()
    {
        if (!$this->_open) {
            $this->_open = true;
        }
    }
 
    public function close()
    {
        if ($this->_open)
            $this->_open = false;
    }
	
}


class LockedWindow implements Window
{
    protected $_window;
	
    public function __construct(Window $window)
    {
        $this->_window = $window;
        $this->_window->close();
    }

    public function isOpen()
    {
        return false;
    }

    public function open()
    {
        throw new Exception('Cannot open locked windows');
    }

    public function close()
    {
        $this->_window->close();
    }
	
}

$w = new LockedWindow( new StandardWindow() );
$w->open();
