[Trip Sort](https://github.com/messhias/tripsorter)
==============================================
# Description
----------------------------------------------
Travel class shorts your unordered boarding cards.
Each ticket must have destination and source.
vehicle, seat, gate members are not mandatory.

### Dependencies
- [PHP any version](http://php.net/)
- Any kind of *nix OS System

### Extending class
* You can use ArraySort to sort anything, not only boarding cards.
* You can create new type of cards like plane, train, bus or whatever you want. (Default class: CommonCard)
* You can able to create a gift class that you can give a track to the your shipping.
* If you would like you can create another kind of sort algorithm by extending SortInterface.

Triggering test
----------------------------------------------
php test/index.php

Running the example test
----------------------------------------------
php src/index.php

Usage
----------------------------------------------
### Include bootstrap file.
    require_once 'src/bootstrap.php';

And after here's the index.php example file (you could use the variables in the way you want)
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
