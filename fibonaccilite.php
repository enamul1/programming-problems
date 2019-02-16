<?php

function fibonnaci($number) {
    if($number <= 0) {
        return 0;
    } else if($number == 1) {
        return 1;
    }
    return processData($input-1) + processData($input-2);
}
