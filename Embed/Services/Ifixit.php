<?php
namespace Embed\Services;

class Ifixit extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.ifixit.com/embed',
			'patterns' => array(
				'http://www.ifixit.com/guide/*'
			)
		)
	);
}