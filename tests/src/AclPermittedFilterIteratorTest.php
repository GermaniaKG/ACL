<?php
namespace tests;

use Germania\Acl\AclPermittedFilterIterator;

class AclPermittedFilterIteratorTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiation() : AclPermittedFilterIterator
    {
        $items = new \ArrayIterator();
        $user_acl = array();
        $sut = new AclPermittedFilterIterator($items, $user_acl);

        $this->assertInstanceOf( \FilterIterator::class, $sut);

        return $sut;
    }
}
