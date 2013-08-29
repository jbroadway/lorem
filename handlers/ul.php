<?php

/**
 * Generate a `<ul>` list with Lorem Ipsum text.
 *
 *     {! lorem/ul/5 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 5;
} else {
	$n = $this->params[0];
}

echo Lorem::ul ($n);

?>