<?php

namespace Walnut\Lib\IdentityGenerator;

final class UuidGenerator implements IdentityGenerator {
	public function generateId(): string {
		/** @noinspection PhpUnhandledExceptionInspection */
		/**
		 * @var int[] $arr
		 */
		$arr = array_values(unpack('N1a/n4b/N1c', random_bytes(16)));
		$arr[2] = ($arr[2] & 0x0fff) | 0x4000;
		$arr[3] = ($arr[3] & 0x3fff) | 0x8000;
		return vsprintf('%08x-%04x-%04x-%04x-%04x%08x', $arr);
	}
}

