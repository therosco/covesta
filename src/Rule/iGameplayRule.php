<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\State;

interface iGameplayRule extends iRule
{
	public function updateState(State $state, Dice $dice);

	public function getName(): string;
}