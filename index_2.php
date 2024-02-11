<?php

require 'bird.php';
require 'pigeon.php';

$pigeon = new Pigeon(true, 2);

if($pigeon->canFly()){
    echo 'The pigeon can fly';

}