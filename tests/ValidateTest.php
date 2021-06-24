<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class validateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://platizi.com');
        $this->assertTrue($url);

        $url = Validate::url('platizi.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('012345');
        $this->assertTrue($password);

        $password = Validate::password('asdasd12');
        $this->assertFalse($password);
    }
}
