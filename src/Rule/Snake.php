<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\State;

class Snake implements iGameplayRule
{

	public function isApplicable(State $state, Dice $dice): bool
	{
		return 0 === ($state->calcNewPosition($dice) % 9);
	}


	public function updateState(State $state, Dice $dice)
	{
		$state->move(-3);
	}


	public function getName(): string
	{
		return 'snake';
	}
}