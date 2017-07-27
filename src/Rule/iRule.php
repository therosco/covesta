<?php
namespace Covesta\Rule;


use Covesta\Dice;
use Covesta\State;

interface iRule
{
	public function isApplicable(State $state, Dice $dice): bool;
}