<?php

namespace Walnut\Lib\IdentityGenerator;

interface IdentityGenerator {
	/**
	 * @return string
	 */
	public function generateId(): string;
}
