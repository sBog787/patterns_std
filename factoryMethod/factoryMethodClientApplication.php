<?php

include 'entities/Truck.php';

function clientCode($truck)
{
    $truck->setName('Truck');
    print 'Client: ' . $truck->getName();
}

clientCode(new Truck());
print "\n\n";