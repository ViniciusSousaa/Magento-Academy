<?php

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Webjump_ControllerWorld',
    __DIR__
);

echo ("Hello World!");
