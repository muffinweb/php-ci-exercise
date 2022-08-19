<?php

$is_there_error = false;

if($is_there_error){
    echo "Bu bir diger hata belirtme sekili olarak degisti";
    die(43);
}

fwrite(STDOUT, "\033[32mMANUEL TEST GECTI \033[0m\n");