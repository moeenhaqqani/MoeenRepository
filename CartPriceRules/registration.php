<?php
use  Magento\Framework\Component\ComponentRegistrar;//imported component register file from magento framework
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'MoeenRepository_CartPriceRules',
    __DIR__ //return current directory of the current file
);//calling register method statically
