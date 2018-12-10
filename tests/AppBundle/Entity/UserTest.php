<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    
    public function testIsUserHasRoleUser()
    {
        $user = new User();
        $user->setRole(User::ROLE_USER);
        $this->assertContains(User::ROLE_USER, $user->getRoles());
    }
    
    public function testIsUserHasRoleAdmin()
    {
        $user = new User();
        $user->setRole(User::ROLE_ADMIN);
        $this->assertContains(User::ROLE_ADMIN, $user->getRoles());
    }
    
}