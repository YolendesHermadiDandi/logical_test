<?php
for ($i = 0; $i < 50; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        echo 'FooBar' . ' ';
    } else if ($i % 5 == 0) {
        echo 'Bar' . ' ';
    } else if ($i % 3 == 0) {
        echo 'Foo' . ' ';
    }
    echo $i . ' ';
}
