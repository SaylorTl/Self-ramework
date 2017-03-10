<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "success！";
});

Macaw::get('(:all)', function($fu) {
    echo 'filed<br>'.$fu;
});

Macaw::dispatch();