<?php

/**
 * Generate a string of Lorem Ipsum text.
 *
 *     {! lorem/5 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 5;
} else {
	$n = $this->params[0];
}

echo Lorem::words ($n);

?>