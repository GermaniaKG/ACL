<?php
namespace Germania\Acl;

class AclPermittedFilterIterator extends \FilterIterator
{

    /**
     * The current user's ACL list (e.g. user group names)
     * @var array
     */
    public $user_acl;


    /**
     * @param \Traversable $items       Things to filter, must be instance of AclProviderInterface
     * @param array        $user_acl    The user's group IDs to check against
     */
    public function __construct(\Traversable $items, array $user_acl)
    {
        $this->user_acl = $user_acl;
        parent::__construct($items);
    }


    #[\ReturnTypeWillChange]
    public function accept()
    {
        $current = $this->getInnerIterator()->current();

        if ($current instanceof AclProviderInterface) {
            $item_acl = $current->getAccessControlList();
            $result = array_intersect($this->user_acl, $item_acl);

            return count($result) > 0;
        }

        return false;
    }
}
