<?php

spl_autoload_register(function ($class) {
    include  $class . '.php';
});

$car1 = new Car('Mercedes','black', 220);
$car1->start(intval(filter_input(INPUT_GET,'code')))->go();
print_r($car1);


try{
    $car1->inverse(0);
}catch (DomainException $e){
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}

function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}