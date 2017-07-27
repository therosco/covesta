<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\State;

class Ladder implements iGameplayRule
{

	public function isApplicable(State $state, Dice $dice): bool
	{
		$newPosition = $state->calcNewPosition($dice);

		return 25 === $newPosition || 55 === $newPosition;
	}


	public function updateState(State $state, Dice $dice)
	{
		$state->move(10);
	}


	public function getName(): string
	{
		return 'ladder';
	}
}