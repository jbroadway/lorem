<?php

/**
 * Generate a string of Lorem Ipsum text.
 *
 *     {! lorem/h1 !}
 *     {! lorem/h1/5 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 5;
} else {
	$n = $this->params[0];
}

echo Lorem::h1 ($n);

?>