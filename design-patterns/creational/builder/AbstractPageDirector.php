<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

  abstract class AbstractPageDirector {

    abstract function __construct(AbstractPageBuilder $builder_in);

    abstract function buildPage();

    abstract function getPage();

  }

?>
