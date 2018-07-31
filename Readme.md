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
