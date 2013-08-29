# Lorem Ipsum generator

App to generate lorem ipsum text for testing and prototyping in the
[Elefant CMS](http://www.elefantcms.com/).

## Installation

Unzip into your Elefant `apps` folder.

## Usage

In a view template:

	{! lorem/h1 !}
	{! lorem/p/2 !}

Generates:

	<h1>Lorem ipsum dolor sit amet</h1>
	<p>Lorem ipsum...</p>
	<p>Integer sed...</p>

From PHP:

	<?php
	
	echo Lorem::h1 ();
	echo Lorem::p (2);
	
	?>

A number can be passed to each method or appended to each handler call to specify
the number of words or paragraphs or list items to include.

Supported methods:

	* `Lorem::p()` aka `lorem/p`
	* `Lorem::ul()` aka `lorem/ul`
	* `Lorem::ol()` aka `lorem/ol`
	* `Lorem::h1()-h6()` aka `lorem/h1-h6`
