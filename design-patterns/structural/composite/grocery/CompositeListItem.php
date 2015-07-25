<?php

abstract class CompositeListItem extends ListItem {

    protected $listitems = array();
     
    public function getComposite() {
        return $this;
    }

    public function listItems() {
        return $this->listitems;
    }

    public function removeListItem( ListItem $listitem ) {

        $listitems = array();

        foreach ( $this->listitems as $thisitem ) {
            if ( $listitem !== $thisitem ) {
                $listitems[] = $thisitem;
            }
        }

        $this->listitems = $listitems;
    }

    public function addListItem( ListItem $listitem ) {
     
        if ( in_array( $listitem, $this->listitems, true ) ) {
            return;
        }
     
        $this->listitems[] = $listitem;
    }
}
