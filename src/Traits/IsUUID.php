<?php

namespace eig\UUID\Traits;

trait IsUUID
{
    /**
     * The Regular Expression for a UUID
     */
    protected static $UUID_REGEX = '/([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})/';


    /**
     * assertUuid
     *
     * Helper Method to assert if the UUID is valid
     *
     * @param $value
     */
    public function assertIsUuid($value)
    {
        $this->assertMatchesRegularExpression(self::$UUID_REGEX, (string) $value);
    }
}
