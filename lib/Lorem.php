<?php

/**
 * Generates Lorem Ipsum text for testing.
 *
 * Usage:
 *
 *     <?php
 *     
 *     echo Lorem::h1 (5); // <h1>Lorem ipsum dolor sit amet</p>
 *     
 *     echo Lorem::p (2); // <p>Lorem...</p> <p>Integer...</p>
 *     
 *     echo Lorem::ul (2); // <ul><li>Lorem...</li> <li>Proin...</li></ul>
 *     
 *     echo Lorem::ol (2); // <ol><li>Lorem...</li> <li>Proin...</li></ol>
 *     
 *     echo Lorem::words (5); // Lorem ipsum dolor sit amet
 *     
 *     ?>
 */
class Lorem {
	public static $words = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ultrices odio. Pellentesque sit amet leo quam. Nunc tempor in magna eu commodo. Nunc vitae luctus dolor. Pellentesque in justo turpis. Proin lacinia nunc et leo porttitor, in rhoncus nisi convallis. Ut lobortis euismod nisl, in egestas nisl malesuada vitae. Nam rutrum, velit non facilisis venenatis, nibh est condimentum dui, varius varius eros justo at quam. Cras lacinia placerat urna, vel vulputate turpis consectetur id. Aenean ullamcorper orci in elit bibendum, id vestibulum ipsum luctus. Etiam elementum posuere lorem, ac egestas mi mollis et. Integer pulvinar a tellus et suscipit.';

	public static $paragraphs = array (
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin massa sed sapien laoreet, vel egestas nunc ultrices. Maecenas faucibus orci eget arcu tempor scelerisque. Duis faucibus mollis porta. Vestibulum rutrum tincidunt auctor. Vivamus sit amet pharetra ante, id posuere lorem.',
		'Integer sed aliquam sapien, in egestas tortor. Suspendisse viverra lacus eu suscipit semper. Donec sit amet posuere massa, in fermentum est. Cras bibendum neque in tortor lobortis rutrum. Cras ultricies massa at pharetra elementum. Curabitur dapibus placerat lobortis.',
		'Nulla mollis viverra lectus, id vehicula justo placerat ut. Nam molestie eleifend risus vitae euismod. Etiam eu nisi fermentum, tincidunt tellus id, tristique tellus. Aliquam euismod semper mi, luctus ultricies nibh dictum in. Duis hendrerit ut est non condimentum. Praesent eros arcu, aliquam id justo sit amet, semper pulvinar velit. Vestibulum facilisis ac quam ac viverra.',
		'Ut fringilla purus et quam placerat volutpat. Ut elementum aliquet lacinia. Aliquam iaculis risus eu nunc consectetur auctor. Maecenas adipiscing vestibulum tellus, nec suscipit odio laoreet eu. Suspendisse lacinia pulvinar malesuada. Nam vel tincidunt neque, ac tincidunt est. In in velit lectus. Maecenas vestibulum vehicula neque, a vestibulum lorem placerat et.',
		'Cras et pretium lorem. Cras facilisis a orci nec lobortis. Praesent ac viverra leo, nec congue quam. Nulla cursus risus aliquet sem bibendum vulputate. Integer eget interdum dolor, et lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
		'Phasellus posuere sapien quis neque mattis aliquet. Pellentesque a consectetur nunc. Ut rhoncus tincidunt neque ac elementum. Sed vehicula lacinia neque et interdum. Donec fermentum lectus purus, pulvinar sodales risus facilisis non. In viverra dolor vitae turpis placerat ornare.',
		'Morbi convallis, neque eget aliquet porttitor, elit felis molestie urna, elementum laoreet magna dui non quam. Proin a dignissim augue. Maecenas fringilla neque commodo tortor lobortis, vel tempor purus sollicitudin.',
		'Vestibulum consectetur vestibulum pharetra. Nulla non arcu velit. Aliquam viverra, nunc fermentum mattis venenatis, nisl elit scelerisque nulla, vitae ornare elit nunc nec ipsum.',
		'Aenean nisi libero, venenatis nec faucibus suscipit, hendrerit non mi. Vestibulum eu tortor vitae urna blandit venenatis. Vestibulum molestie justo ut ipsum faucibus condimentum. Aliquam vel sodales leo, at tempor justo. Praesent hendrerit interdum varius. Proin at facilisis mi. Phasellus pellentesque ligula non felis vehicula, et aliquam eros aliquet.',
		'Vestibulum fringilla imperdiet leo, non mattis lorem blandit sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget augue sed velit rhoncus sagittis. Sed volutpat leo sit amet volutpat iaculis.',
		'Proin nec egestas lorem, at dapibus risus. Donec rhoncus placerat tellus vitae mattis. Integer sit amet justo pulvinar, varius tellus at, convallis risus. Pellentesque ultrices ultrices arcu, eu molestie velit adipiscing nec. Donec in sollicitudin velit. Cras sit amet metus vitae ante vehicula viverra eu sit amet justo.',
		'Nunc in aliquam sapien. Nulla tincidunt eros et urna pellentesque sagittis. Vestibulum ac ante nunc. Praesent ipsum mauris, imperdiet lobortis dapibus non, vestibulum sit amet ligula. Mauris nibh metus, rhoncus suscipit ultrices eget, tempus id augue.',
		'Vestibulum risus felis, condimentum non commodo ut, dignissim eu leo. Pellentesque molestie mauris ut pretium scelerisque. Proin ut orci feugiat, rhoncus risus in, fringilla libero.',
		'Aliquam euismod semper mi, luctus ultricies nibh dictum in. Duis hendrerit ut est non condimentum. Praesent eros arcu, aliquam id justo sit amet, semper pulvinar velit. Vestibulum facilisis ac quam ac viverra.',
		'Maecenas adipiscing vestibulum tellus, nec suscipit odio laoreet eu. Suspendisse lacinia pulvinar malesuada. Nam vel tincidunt neque, ac tincidunt est. In in velit lectus. Maecenas vestibulum vehicula neque, a vestibulum lorem placerat et.',
		'Vestibulum molestie justo ut ipsum faucibus condimentum. Aliquam vel sodales leo, at tempor justo. Praesent hendrerit interdum varius. Proin at facilisis mi. Phasellus pellentesque ligula non felis vehicula, et aliquam eros aliquet.'
	);
	
	public static $items = array (
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		'Proin non nisl ornare libero luctus placerat a in est.',
		'Curabitur elementum erat eu adipiscing scelerisque.',
		'Quisque quis enim ut lorem tincidunt mattis ultrices at ipsum.',
		'Nam quis arcu aliquam, gravida ipsum id, faucibus enim.',
		'Proin cursus odio non egestas lobortis.',
		'In porta ipsum ac diam auctor porttitor.',
		'Donec mollis magna ac viverra tincidunt.',
		'Proin id felis aliquam, mattis mauris non, ullamcorper leo.',
		'Pellentesque in ante eget turpis aliquam ultricies.',
		'Donec ac ligula sed nunc aliquam accumsan.',
		'Etiam eu ligula aliquam nisl ultrices vulputate.',
		'In quis arcu vel elit tempus imperdiet.',
		'Vivamus sit amet nisi ac nisi laoreet tincidunt vel id leo.',
		'Aenean et nibh tristique, hendrerit nunc ut, rutrum purus.',
		'Nulla gravida turpis ac diam ultrices tincidunt.',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		'Proin non nisl ornare libero luctus placerat a in est.',
		'Curabitur elementum erat eu adipiscing scelerisque.',
		'Quisque quis enim ut lorem tincidunt mattis ultrices at ipsum.',
		'Nam quis arcu aliquam, gravida ipsum id, faucibus enim.',
		'Proin cursus odio non egestas lobortis.',
		'In porta ipsum ac diam auctor porttitor.',
		'Donec mollis magna ac viverra tincidunt.',
		'Proin id felis aliquam, mattis mauris non, ullamcorper leo.',
		'Pellentesque in ante eget turpis aliquam ultricies.',
		'Donec ac ligula sed nunc aliquam accumsan.',
		'Etiam eu ligula aliquam nisl ultrices vulputate.',
		'In quis arcu vel elit tempus imperdiet.',
		'Vivamus sit amet nisi ac nisi laoreet tincidunt vel id leo.',
		'Aenean et nibh tristique, hendrerit nunc ut, rutrum purus.',
		'Nulla gravida turpis ac diam ultrices tincidunt.'
	);
	
	public static function p ($n = 1) {
		$paras = array_slice (self::$paragraphs, 0, $n);
		return '<p>' . join ("</p>\n<p>", $paras) . '</p>';
	}
	
	public static function ul ($n = 5) {
		$items = array_slice (self::$items, 0, $n);
		return "<ul>\n\t<li>" . join ("</li>\n\t<li>", $items) . "</li>\n</ul>";
	}
	
	public static function ol ($n = 5) {
		$items = array_slice (self::$items, 0, $n);
		return "<ol>\n\t<li>" . join ("</li>\n\t<li>", $items) . "</li>\n</ol>";
	}

	public static function words ($n = 5) {
		$delim = ' ';
		$text = self::$words;
		$words = strtok ($text, $delim);

		for ($i = 0; $i < $n - 1; $i++) {
			$words .= ' ' . strtok ($delim);
		}

		return rtrim ($words, ',');
	}

	public static function h1 ($n = 5) {
		return '<h1>' . self::words ($n) . '</h1>';
	}

	public static function h2 ($n = 5) {
		return '<h2>' . self::words ($n) . '</h2>';
	}

	public static function h3 ($n = 5) {
		return '<h3>' . self::words ($n) . '</h3>';
	}

	public static function h4 ($n = 5) {
		return '<h4>' . self::words ($n) . '</h4>';
	}

	public static function h5 ($n = 5) {
		return '<h5>' . self::words ($n) . '</h5>';
	}

	public static function h6 ($n = 5) {
		return '<h6>' . self::words ($n) . '</h6>';
	}
}

?>