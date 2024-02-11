<?php

require 'bird.php';

$bird = new Bird(true, 2);
echo $bird->canFly();
echo $bird->legCount();