<?php

require_once 'src/bootstrap.php';

/**
 * Classes to use in this example.
 */
use \tripsort\assets\CardFactory;
use \tripsort\assets\CardAbstract;
use \tripsort\assets\transportable\Person;
use \tripsort\assets\TransportableAbstract;
use \tripsort\modules\travel\Travel;

#creating tickets
$tickets = array(
  CardFactory::create(array(
    'source' => 'São Paulo Metro Station',
    'destination' => 'São Paulo Airport',
    'vehicle' => 'metro',
    'seat' => null,
    'gate' => null
  )),
  CardFactory::create(array(
    'source' => 'Marina',
    'destination' => 'São Paulo Metro Station',
    'vehicle' => 'taxi',
    'seat' => null,
    'gate' => null
  )),
  CardFactory::create(array(
    'source' => 'São Paulo Airport',
    'destination' => 'Dubai Airport',
    'vehicle' => 'taxi',
    'seat' => '112b',
    'gate' => '30XB'
  ))
);

#add passagers
$passengers = array(
  new Person('Fabio'),
  new Person('William'),
  new Person('Conceição')
);


#Give the correct order to the crowd
$travel = new Travel($passengers, $tickets);
$route = $travel->sortTickets()->getTickets();
$passenger = $travel->getPassengers();

print("{$passenger}: \n");
foreach ($route as $key => $value) {
    print_r("From: {$value->source}\n");
    print_r("Destination: {$value->destination}\n");
    print_r("Vehicle: {$value->vehicle}\n");
    if ($value->seat) {
        print_r("Seat: {$value->seat}\n");
    }
    if ($value->gate) {
        print_r("Gate: {$value->gate}\n");
    }
    print_r("\n----------------------------------\n");
}
