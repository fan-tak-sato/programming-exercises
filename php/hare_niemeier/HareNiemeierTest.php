<?php

/**
 * @author Andrea Fiori
 * @since  18 November 2013
 *
 */
class HareNiemer {
	
	private $seats, $votes, $votesSum;
	
	private $firstStep, $secondStep, $thirdStep;
	
	public function setSeats($seats)
	{
		if ( is_numeric($seats) ) $this->seats = $seats;
		return $this->seats;
	}
	
	public function getSeats()
	{
		return $this->seats;
	}
	
	public function setVotes($votes)
	{
		if (is_array($votes)) $this->votes = $votes;
		return $this->votes;
	}
	
	public function getVotes()
	{
		return $this->votes;
	}
	
	public function setVotesSum()
	{
		$votes = $this->getVotes();
		if (!$this->getSeats() or !is_array($votes)) return false;
		
		$votesSum = 0;
		foreach($votes as $key => $value)
		{
			$votesSum += $value;
		}
		$this->votesSum = $votesSum;
		return $votesSum;
	}
	
	public function getVotesSum()
	{
		return $this->votesSum;
	}
	
	public function getFirstStep()
	{
		if (!$this->getVotesSum()) return false;
		
		$arr = array();
		foreach($this->getVotes() as $key => $value)
		{
			$arr[$key] = $value * $this->getSeats() / $this->getVotesSum();
			$arr[$key] = number_format($arr[$key], 4);
		}
		
		$this->firstStep = $arr;
		return $this->firstStep;
	}
	
	public function getSecondStep()
	{
		$firstStep = $this->getFirstStep();
		if ( !is_array($firstStep) ) return false;
		foreach($firstStep as $key => $value)
		{
			$firstStep[$key] = array(
				"integer" => (int) $value,
				"fractional" => $value - (int) $value
			);
		}
		return $firstStep;
	}
	
	public function getThirdStep()
	{
		$key = $this->getMaxFractionalKey($secondStep);
		$secondStep[$key]['integer']++;
		unset($secondStep[$key]['fractional']);

		$key = $this->getMaxFractionalKey($secondStep);
		$secondStep[$key]['integer']++;
		
		return $secondStep;
	}
		
		private function getMaxFractionalKey($array)
		{
			if (!is_array($array)) return false;
			
			$max = 0;
			foreach ($array as $key => $i)
			{
				$max_previous = $max;
				$max = max($max, $i['fractional']);
				if ($max_previous != $max) $max_key = $key;
			}
			return $max_key;
		}
	
}


class hareNiemerTest extends PHPUnit_Framework_TestCase {
	
	private $hareNiemer;
	
	public function setUp()
	{
		$this->hareNiemer = new HareNiemer();
		$this->votesSample = array('A' => 15000, 'B' => 5400, 'C' => 5500, 'D' => 5550);
	}
	
	public function testSetSeats()
	{
		$this->assertEquals(15, $this->hareNiemer->setSeats(15));
	}
	
	public function testSetVotes()
	{
		$this->hareNiemer->setVotes($this->votesSample);
		$this->assertEquals($this->votesSample, $this->hareNiemer->getVotes());
	}
	
	public function testCalculateVotes()
	{
		$this->assertEquals(15, $this->hareNiemer->setSeats(15));
		$this->hareNiemer->setVotes($this->votesSample);
		$this->assertEquals(31450, $this->hareNiemer->setVotesSum());
	}
	
	public function testSetFirstStep()
	{
		$this->assertEquals(15, $this->hareNiemer->setSeats(15));
		$this->hareNiemer->setVotes($this->votesSample);
		$this->hareNiemer->setVotesSum();
		
		$firstStep = $this->hareNiemer->getFirstStep();
		$this->assertTrue( is_array($firstStep) );
	}
	
	public function testSecondStep()
	{
		$this->assertEquals(15, $this->hareNiemer->setSeats(15));
		$this->hareNiemer->setVotes($this->votesSample);
		$this->hareNiemer->setVotesSum();
		
		$this->assertTrue( is_array($this->hareNiemer->getSecondStep()) );
	}
	
	public function testThirdStep()
	{
		$this->assertEquals(15, $this->hareNiemer->setSeats(15));
		$this->hareNiemer->setVotes($this->votesSample);
		$this->hareNiemer->setVotesSum();
		
		$this->hareNiemer->getSecondStep();
		
		$this->assertTrue( is_array($this->hareNiemer->getThirdStep()) );
	}
	
}
