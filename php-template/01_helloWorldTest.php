<?php
include "01_helloWorld.php";
function test()
{
    if (helloWorld() === "Hello World") {
        echo ("TECHIO> success true \r\n");
    } else {
        echo ("TECHIO> success false  \r\n");
        echo ("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
    }
}
test();
