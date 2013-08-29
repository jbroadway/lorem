<?php

/**
 * Generate one or more `<p>` tags with Lorem Ipsum text.
 *
 *     {! lorem/p/3 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 1;
} else {
	$n = $this->params[0];
}

echo Lorem::p ($n);

?>