<?php
namespace Covesta;


class Dice
{
	private $result;
	private $options;


	public function __construct(GameOptions $options)
	{
		$this->options = $options;
	}


	public function roll()
	{
		$this->result = rand($this->options->getMinDice(), $this->options->getMaxDice());
	}


	public function getResult(): int
	{
		return $this->result;
	}
}