<?php

interface ITest {
	public function Links();
	public function Tutorials($str, $nota);
}

class WebDevelopment implements ITest {

	protected $site = 'www.andreafiori.net';

	// method required by interface
	public function Links() {
		return $this->site;
	}

	// method required by interface
	public function Tutorials($gen, $nota) {
		$re = $gen. ' - '. $nota;
		return $re;
	}

	// additional method
	public function setSite($site) {
		$this->site = $site;
	}
}

class Languages implements ITest {

	// protected property
	protected $adr = 'www.marplo.net/';

	// method required by interface
	public function Links() {
		return'Good way';
	}

	// method required by interface
	public function Tutorials($gen, $nr) {
		$re = $nr.' - '. $this->adr. $gen;
		return $re;
	}
	
}


// function that accepts only arguments which are objects of the classes which implement ITest
function courses(ITest $obj) {
	// calls the methods declared in ITest interface
	echo '<br />'. $obj->Links();
	echo '<br />'. $obj->Tutorials('php-mysql', 4);
}

// creates the object instances
$web_development = new WebDevelopment();
$limbi_straine = new Languages();

// calls the courses() function, passing the objects for argument
courses($web_development);
courses($limbi_straine);
