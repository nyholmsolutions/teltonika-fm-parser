<?php

declare(strict_types=1);

namespace Tests\Unit\Protocol\Tcp;

use PHPUnit\Framework\TestCase;
use Uro\TeltonikaFmParser\Protocol\Tcp\Reply;

class ReplyTest extends TestCase
{
    /**
     * @test
     */
    public function can_get_accept_reply(): void
    {
        $reply = Reply::accept();

        $this->assertEquals(1, strlen($reply));
        $this->assertEquals('01', bin2hex($reply));
    }

    /**
     * @test
     */
    public function can_get_reject_reply(): void
    {
        $reply = Reply::reject();

        $this->assertEquals(1, strlen($reply));
        $this->assertEquals('00', bin2hex($reply));
    }
}
