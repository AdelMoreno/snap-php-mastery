<?php
class animal {

	private $uno = 1;

	private $dos = 2;

	private $tres = 3;

	/**
	 * @return int
	 */
	public function getUno(): int {
		return $this->uno;
	}

	/**
	 * @return int
	 */
	public function getDos(): int {
		return $this->dos;
	}

	/**
	 * @return int
	 */
	public function getTres(): int {
		return $this->tres;
	}

	public function addNum(): int{
		return ($this->uno + $this->dos);

	}


}
