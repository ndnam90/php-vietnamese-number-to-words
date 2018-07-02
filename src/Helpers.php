<?php

if (! function_exists('vietnamese_number_to_word')) {
    function vietnamese_number_to_words($number) {
        return (new NumberFormatter('vi', NumberFormatter::SPELLOUT))
            ->format($number);
    }
}
