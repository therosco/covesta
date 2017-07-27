<?php
namespace Covesta;


use Covesta\Rule\iGameplayRule;
use Covesta\Rule\iRule;

class Game
{
	public function __construct(State $state, Dice $dice, Output $output, iRule $stopRule, iGameplayRule... $gameplay)
	{
		$this->state = $state;
		$this->dice = $dice;
		$this->output = $output;
		$this->stopRule = $stopRule;
		$this->gameplayRules = $gameplay;
	}


	public function play()
	{
		do {
			$this->dice->roll();

			$rule = $this->getApplicableRule();
			if ($rule)
			{
				$rule->updateState($this->state, $this->dice);
			}

			$this->output->out($this->state, $this->dice, $rule);

			sleep(1);
		}
		while (!$this->stopRule->isApplicable($this->state, $this->dice));
	}


	private function getApplicableRule(): ?iGameplayRule
	{
		foreach ($this->gameplayRules as $rule)
		{
			if ($rule->isApplicable($this->state, $this->dice))
			{
				return $rule;
			}
		}

		return null;
	}
}