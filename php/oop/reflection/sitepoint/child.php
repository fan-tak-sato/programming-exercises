<?php
 
class Child extends Introspection
{
    public function description() {
        echo "I'm " . get_class($this) , " class.n";
        echo "I'm " . get_parent_class($this) , "'s child.n";
    }
}

