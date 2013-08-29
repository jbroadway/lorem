<?php

/**
 * Generate a string of Lorem Ipsum text.
 *
 *     {! lorem/h4 !}
 *     {! lorem/h4/5 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 5;
} else {
	$n = $this->params[0];
}

echo Lorem::h4 ($n);

?>