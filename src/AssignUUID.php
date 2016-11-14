<?php

namespace eig\UUID;

use eig\UUID\Facades\UUID;

/**
 * Class AssignUUID
 * @package eig\UUID
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
trait AssignUUID
{

    /**
     * assignUUID
     *
     * @param null $field
     */
    protected function assignUUID($field = null)
    {
        if($field != null)
        {
            $this->{$field} = UUID::generate();
        } else {
            $this->id = UUID::generate();
        }
    }
}