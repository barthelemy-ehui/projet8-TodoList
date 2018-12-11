<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public $user;
    
    public function setUp()
    {
        $this->user = new User();
        $this->user->setUsername('john');
        $this->user->setPassword(123);
        $this->user->setEmail('johndoe@gmail.com');
    }
    
    public function testIsUserIdNull()
    {
        $this->assertEquals(null, $this->user->getId());
    }
    
    public function testIsUserHasUsername()
    {
        $username = 'john';
        $this->assertEquals($username,$this->user->getUsername());
    }
    
    public function testIsUserHasPassword()
    {
        $password = 123;
        $this->assertEquals($password, $this->user->getPassword());
    }
    
    public function testIsUserHasEmail()
    {
        $email = 'johndoe@gmail.com';
        $this->assertEquals($email, $this->user->getEmail());
    }
    
    public function testIsUserSaltNull()
    {
        $this->assertEquals(null, $this->user->getSalt());
    }
    
    public function testIsUserEraseCredentialsReturnNull()
    {
        $this->assertEquals(null, $this->user->eraseCredentials());
    }
    
    public function testIsUserHasRoleUser()
    {
        $this->user->setRole(User::ROLE_USER);
        $this->assertContains(User::ROLE_USER, $this->user->getRoles());
    }
    
    public function testIsUserHasRoleAdmin()
    {
        $this->user->setRole(User::ROLE_ADMIN);
        $this->assertContains(User::ROLE_ADMIN, $this->user->getRoles());
    }
    
}