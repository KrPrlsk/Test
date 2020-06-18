<?php
use PHPUnit\Framework\TestCase;

class testUser extends TestCase
{
public function testGetLogin() {
$this-> assertContains("admin", User::getLogin())
}
}
?>