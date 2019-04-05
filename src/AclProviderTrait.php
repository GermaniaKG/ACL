<?php
namespace Germania\Acl;

trait AclProviderTrait
{

    /**
     * The access control list
     * @var array
     */
    public $acl = array();


    /**
     * Returns the Access Control List (e.g. user group names).
     * @return array
     */
    public function getAccessControlList() : array
    {
        return $this->acl;
    }
}
