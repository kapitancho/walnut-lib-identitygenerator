<?php

namespace Walnut\Lib\IdentityGenerator;

use PHPUnit\Framework\TestCase;

final class IdentityGeneratorTest extends TestCase {

	public function testComb(): void {
		$combUuidGenerator = new CombUuidGenerator;

		$uuid1 = $combUuidGenerator->generateId();
		$this->assertEquals(36, strlen($uuid1));

		usleep(10);
		$uuid2 = $combUuidGenerator->generateId();

		$this->assertLessThan($uuid2, $uuid1);
	}

	public function testUuid(): void {
		$generator = new UuidGenerator;

		$this->assertEquals(36, strlen($generator->generateId()));
	}

}
