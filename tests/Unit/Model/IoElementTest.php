<?php

declare(strict_types=1);

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use Uro\TeltonikaFmParser\Model\IoElement;

class IoElementTest extends TestCase
{
    /**
     * @test
     */
    public function can_get_event_id(): void
    {
        $eventId = (new IoElement(0, 2))->getEventId();

        $this->assertEquals(0, $eventId);
    }

    /**
     * @test
     */
    public function can_get_number_of_elements(): void
    {
        $numberOfElements = (new IoElement(0, 2))->getNumberOfElements();

        $this->assertEquals(2, $numberOfElements);
    }
}
