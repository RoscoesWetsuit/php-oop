<?php
class Crew {
	public $kyrspeedy;
	public $youtubegamers;
	public $nobodyepic;
	public $sidearms;
	public $deluxe4;
	public $cornboy;

	function __construct($kyrspeedy, $youtubegamers, $nobodyepic, $sidearms, $deluxe4, $cornboy) {
		$this->kyrspeedy = $kyrspeedy;
		$this->jahova = $youtubegamers;
		$this->nobodyepic = $nobodyepic;
		$this->deluxe4 = $deluxe4;
		$this->cornboy = $cornboy;
	}

	function crewMembers() {
		return $this->kyrspeedy . "is apart of the youtube group the crew.";
	}
}
class Youtubers extends Crew {
	function greet() {
		return $this->cornboy;
	}
}
?>