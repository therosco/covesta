<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\GameOptions;
use Covesta\State;

class BasicRule implements iGameplayRule
{

	private $gameOptions;

	public function __construct(GameOptions $gameOptions)
	{
		$this->gameOptions = $gameOptions;
	}

	public function isApplicable(State $state, Dice $dice): bool
	{
		return $state->calcNewPosition($dice) <= $this->gameOptions->getMaxPosition();
	}


	public function updateState(State $state, Dice $dice)
	{
		$state->move($dice->getResult());
	}


	public function getName(): string
	{
		return '';
	}
}