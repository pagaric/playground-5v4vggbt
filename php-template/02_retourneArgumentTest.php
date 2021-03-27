<?php
include "00_base.php";
function test()
{
    $t = [
        "abc",
        "ABC",
        1234,
        12.5,
        true
    ];

    $test = true;

    for ($i=0; $i < count($t); $i++) { 
        if(jeRetourneMonArgument($t[$i] !== $t[$i])){
            $test = false;
            break;
        }
    }

    if ($test) {
        echo ("TECHIO> success true \r\n");
        echo ("TECHIO> message --channel Ok! Nickel 👋 \r\n");
    } else {
        echo ("TECHIO> success false  \r\n");
        echo ("TECHIO> message --channel Oops! Try Again 😱  \r\n");
    }
}
test();
