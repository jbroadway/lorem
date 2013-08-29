<?php

/**
 * Generate a `<ol>` list with Lorem Ipsum text.
 *
 *     {! lorem/ul/5 !}
 *
 */

if (count ($this->params) === 0) {
	$n = 5;
} else {
	$n = $this->params[0];
}

echo Lorem::ol ($n);

?>