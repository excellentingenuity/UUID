# UUID
[![Build Status](https://travis-ci.org/excellentingenuity/UUID.svg?branch=master)](https://travis-ci.org/excellentingenuity/UUID)
[![Latest Stable Version](https://poser.pugx.org/eig/uuid/v/stable)](https://packagist.org/packages/eig/uuid)
[![Coverage Status](https://coveralls.io/repos/github/excellentingenuity/UUID/badge.svg?branch=master)](https://coveralls.io/github/excellentingenuity/UUID?branch=master)
[![License](https://poser.pugx.org/eig/uuid/license)](https://packagist.org/packages/eig/uuid)
[![StyleCI](https://styleci.io/repos/73737692/shield)](https://styleci.io/repos/73737692)
[![Total Downloads](https://poser.pugx.org/eig/uuid/downloads)](https://packagist.org/packages/eig/uuid) 
[![Latest Unstable Version](https://poser.pugx.org/eig/uuid/v/unstable)](https://packagist.org/packages/eig/uuid) 

## Supported PHP Versions
- 7.2
- 7.3
- 7.4

# Version Support
 * For PHP 5.5 use the [0.0.5 branch releases](https://github.com/excellentingenuity/UUID/releases/tag/0.5.5-2)
 * For PHP 5.6 use the [1.1.x branch releases](https://github.com/excellentingenuity/UUID/releases/tag/1.1.3)
 * For PHP 7.1 use the [2.1.0 release](https://github.com/excellentingenuity/UUID/releases/tag/2.1.0)
 * For PHP 7.2+ use the [2.4.x release](https://github.com/excellentingenuity/UUID/releases/tag/2.4.1)  

## Description
A wrapper package for easy use of the excellent Ramsey\UUID package. 
Currently the package generates a version 4 UUID according to [RFC 4122](https://tools.ietf.org/html/rfc4122).

This package provides 2 methods of generating a UUID.
1. Static Facade UUID with a generate method.
2. AssignUUID Trait that defaults to a class variable of `$id` or accepts the string name of a class variable to assign the uuid to.


## Static Method Example
```
use eig\UUID;

class Example {
    
    protected $id;
    
    public function __construct()
    {
        $this->id = UUID::generate();
    }
}
```

## AssignUUID Trait Example
```
use eig\UUID\AssignUUID;

class Example
{
    use AssignUUID;

    /**
     * @var
     */
    protected $id;

    /**
     * Example constructor.
     */
    public function __construct ()
    {
        $this->assignUUID();
    }

    /**
     * getID
     * @return mixed
     */
    public function getID()
    {
        return $this->id;
    }
}
```

Or with a class variable other than `$id`

```
use eig\UUID\AssignUUID;

/**
 * Class AlternateFieldExample
 * @package eig\UUID
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class AlternateFieldExample
{
    use AssignUUID;

    /**
     * @var
     */
    protected $alternateID;

    /**
     * AlternateFieldExample constructor.
     */
    public function __construct ()
    {
        $this->assignUUID('alternateID');
    }

    /**
     * getAlternateID
     * @return mixed
     */
    public function getAlternateID()
    {
        return $this->alternateID;
    }
}
```
