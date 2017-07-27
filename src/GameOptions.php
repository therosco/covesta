<?php
namespace Covesta;


class GameOptions
{
	private const MIN_POSITION = 1;
	private const MAX_POSITION = 100;

	private const MIN_DICE = 1;
	private const MAX_DICE = 6;


	public function getMinPosition(): int
	{
		return self::MIN_POSITION;
	}


	public function getMaxPosition(): int
	{
		return self::MAX_POSITION;
	}


	public function getMinDice(): int
	{
		return self::MIN_DICE;
	}


	public function getMaxDice(): int
	{
		return self::MAX_DICE;
	}
}