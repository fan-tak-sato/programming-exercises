<?php

class BridgeBookTitleAuthor extends BridgeBook {

  public function showTitleAuthor() {
    return $this->showTitle() . ' by ' . $this->showAuthor();
  }

}
