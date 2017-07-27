<?php
namespace Covesta;


use Covesta\Rule\iGameplayRule;

class Output
{

	public function out(State $state, Dice $dice, iGameplayRule $rule = null)
	{
		echo sprintf(
			'%d-%s%d%s',
			$dice->getResult(),
			$rule ? $rule->getName() : '',
			$state->getCurrentPosition(),
			PHP_EOL
		);
	}
}