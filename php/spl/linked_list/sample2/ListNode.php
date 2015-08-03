<?php

class ListNode {
    
    public $data;
    public $next;
    public $previous;

    public function __construct($data) {
        $this->data = $data;
    }

    public function readNode() {
        return $this->data;
    }

}

