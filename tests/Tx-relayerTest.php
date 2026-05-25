<?php
/**
 * Tests for tx-relayer
 */

use PHPUnit\Framework\TestCase;
use Tx-relayer\Tx-relayer;

class Tx-relayerTest extends TestCase {
    private Tx-relayer $instance;

    protected function setUp(): void {
        $this->instance = new Tx-relayer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tx-relayer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
