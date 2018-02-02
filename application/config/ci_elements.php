<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Array stylesheet
| -------------------------------------------------------------------------
|
*/
$config['array_stylesheet'] = array(
	'font-awesome' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'font-awesome/css/font-awesome.min.css',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'font-awesome/4.7.0/css/font-awesome.min.css',
			'integrity'   => 'sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=',
			'crossorigin' => 'anonymous'
		)
	),
	'bootstrap' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'bootstrap/css/bootstrap.min.css',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'twitter-bootstrap/3.3.7/css/bootstrap.min.css',
			'integrity'   => 'sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=',
			'crossorigin' => 'anonymous'
		)
	),
	'admin-lte' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'adminlte/css/adminlte.min.css',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'admin-lte/2.4.2/css/AdminLTE.min.css',
			'integrity'   => 'sha256-sZVMQjkm0Ho60NDzV4Ot0OTBAK7UcaqkQOxLkTT93kQ=',
			'crossorigin' => 'anonymous'
		)
	),
	'admin-lte-skins' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'adminlte/css/skins/{theme}.min.css',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'admin-lte/2.4.2/css/skins/{theme}.min.css',
			'integrity'   => 'sha256-dDi4GN+hJjMVQmkbeVpXkn3/qwQrL3oWvW8ukATCaPc=',
			'crossorigin' => 'anonymous'
		)
	),
	'wysihtml5' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'wysihtml5/wysihtml5.min.css',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css',
			'integrity'   => 'sha256-Qo9dfxjSvWBpcONv1klYEjbmw13NfsOC+oARxiq49/A=',
			'crossorigin' => 'anonymous'
		)
	)
);

/*
| -------------------------------------------------------------------------
| Array javascript
| -------------------------------------------------------------------------
|
*/
$config['array_javascript_body'] = array(
	'jquery' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'jquery/jquery.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'jquery/3.2.1/jquery.min.js',
			'integrity'   => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',
			'crossorigin' => 'anonymous'
		)
	),
	'bootstrap' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'bootstrap/js/bootstrap.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'twitter-bootstrap/3.3.7/js/bootstrap.min.js',
			'integrity'   => 'sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=',
			'crossorigin' => 'anonymous'
		)
	),
	'slimscroll' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'slimscroll/slimscroll.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js',
			'integrity'   => 'sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=',
			'crossorigin' => 'anonymous'
		)
	),
	'slimscroll' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'slimscroll/slimscroll.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js',
			'integrity'   => 'sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=',
			'crossorigin' => 'anonymous'
		)
	),
	'fastclick' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'fastclick/fastclick.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'fastclick/1.0.6/fastclick.min.js',
			'integrity'   => 'sha256-t6SrqvTQmKoGgi5LOl0AUy+lBRtIvEJ+++pLAsfAjWs=',
			'crossorigin' => 'anonymous'
		)
	),
	'admin-lte' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'adminlte/js/adminlte.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'admin-lte/2.4.2/js/adminlte.min.js',
			'integrity'   => 'sha256-M/+/xbAPBtc0W7JWnReOYF+oPZq4OiOUrlP9qbv7w64=',
			'crossorigin' => 'anonymous'
		)
	),
	'wysihtml5' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'wysihtml5/wysihtml5.min.js',
			'integrity'   => '',
			'crossorigin' => ''
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js',
			'integrity'   => 'sha256-/pAqJaOZhKjDz1Ld/tOpZp7vnIOaMkkA5aawwwr0zfk=',
			'crossorigin' => 'anonymous'
		)
	)
);
