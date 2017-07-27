<?php
namespace Covesta;


class State
{
	private $currentPosition;

	public function __construct(GameOptions $gameOptions)
	{
		$this->currentPosition = $gameOptions->getMinPosition();
	}


	public function getCurrentPosition(): int
	{
		return $this->currentPosition;
	}


	public function calcNewPosition(Dice $dice): int
	{
		return $this->currentPosition + $dice->getResult();
	}


	public function move(int $offset)
	{
		$this->currentPosition += $offset;
	}
}