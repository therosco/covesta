<?php
include __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$gameOptions = new \Covesta\GameOptions();

(new \Covesta\Game(
	new \Covesta\State($gameOptions),
	new \Covesta\Dice($gameOptions),
	new \Covesta\Output(),
	new \Covesta\Rule\FullStop($gameOptions),
	new \Covesta\Rule\Snake(),
	new \Covesta\Rule\Ladder(),
	new \Covesta\Rule\BasicRule($gameOptions)
))->play();