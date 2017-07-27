<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\GameOptions;
use Covesta\State;

class FullStop implements iRule
{
	private $gameOptions;

	public function __construct(GameOptions $gameOptions)
	{
		$this->gameOptions = $gameOptions;
	}

	public function isApplicable(State $state, Dice $dice): bool
	{
		return $state->getCurrentPosition() === $this->gameOptions->getMaxPosition();
	}
}