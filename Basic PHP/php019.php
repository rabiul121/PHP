<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";

    if ($i == 6) {
        break;
    }
}

echo "________________\n";

for ($i = 10; $i < 50; $i++) {
    if ($i % 13 == 0) {
        echo $i . "\n";
        break;
    }
}


echo "----------------\n";
for ($i = 20; $i < 30; $i++) {
    if ($i < 27) {
        continue;
    }

    echo $i . "\n";
}
