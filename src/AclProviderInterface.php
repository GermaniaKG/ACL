<?php
namespace Germania\Acl;

interface AclProviderInterface
{

    /**
     * Returns the Access Control List (e.g. user group names).
     * @return array
     */
    public function getAccessControlList() : array;
}
