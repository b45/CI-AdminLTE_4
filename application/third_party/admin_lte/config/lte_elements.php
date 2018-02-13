<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Array stylesheet
| -------------------------------------------------------------------------
|
*/
$config['array_stylesheet'] = array(
	'font-source-sans-pro' => array(
		'internal' => array(
			'url'         => 'https://fonts.googleapis.com',
			'src'         => 'css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://fonts.googleapis.com',
			'src'         => 'css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
			'integrity'   => NULL,
			'crossorigin' => NULL
		)
	),
	'font-awesome' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'font-awesome/css/font-awesome.min.css',
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'twitter-bootstrap/3.3.7/css/bootstrap.min.css',
			'integrity'   => 'sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=',
			'crossorigin' => 'anonymous'
		)
	),
	'wysihtml5' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'wysihtml5/wysihtml5.min.css',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css',
			'integrity'   => 'sha256-Qo9dfxjSvWBpcONv1klYEjbmw13NfsOC+oARxiq49/A=',
			'crossorigin' => 'anonymous'
		)
	),
	'icheck' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'icheck/square/blue.css',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'iCheck/1.0.2/skins/square/blue.css',
			'integrity'   => 'sha256-RXWCsVDAOYwIrt1dupoFaLu8gwi9lEC2bIc+g1MDvMY=',
			'crossorigin' => 'anonymous'
		)
	),
	'admin-lte' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'adminlte/css/adminlte.min.css',
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'admin-lte/2.4.2/css/skins/{theme}.min.css',
			'integrity'   => 'sha256-dDi4GN+hJjMVQmkbeVpXkn3/qwQrL3oWvW8ukATCaPc=',
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
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
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
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'fastclick/1.0.6/fastclick.min.js',
			'integrity'   => 'sha256-t6SrqvTQmKoGgi5LOl0AUy+lBRtIvEJ+++pLAsfAjWs=',
			'crossorigin' => 'anonymous'
		)
	),
	'wysihtml5' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'wysihtml5/wysihtml5.min.js',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js',
			'integrity'   => 'sha256-/pAqJaOZhKjDz1Ld/tOpZp7vnIOaMkkA5aawwwr0zfk=',
			'crossorigin' => 'anonymous'
		)
	),
	'icheck' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'icheck/icheck.min.js',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'iCheck/1.0.2/icheck.min.js',
			'integrity'   => 'sha256-8HGN1EdmKWVH4hU3Zr3FbTHoqsUcfteLZJnVmqD/rC8=',
			'crossorigin' => 'anonymous'
		)
	),
	'admin-lte' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'adminlte/js/adminlte.min.js',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => 'https://cdnjs.cloudflare.com/ajax/libs',
			'src'         => 'admin-lte/2.4.2/js/adminlte.min.js',
			'integrity'   => 'sha256-M/+/xbAPBtc0W7JWnReOYF+oPZq4OiOUrlP9qbv7w64=',
			'crossorigin' => 'anonymous'
		)
	),
	'main' => array(
		'internal' => array(
			'url'         => '{assets}',
			'src'         => 'main.min.js',
			'integrity'   => NULL,
			'crossorigin' => NULL
		),
		'external' => array(
			'url'         => '{assets}',
			'src'         => 'main.min.js',
			'integrity'   => NULL,
			'crossorigin' => NULL
		)
	)
);

/*
| -------------------------------------------------------------------------
| Array dns-prefetch
| -------------------------------------------------------------------------
|
*/
$config['array_dns_prefetch'] = array(
	'cloudflare' => array(
		'internal' => array(

		),
		'external' => array(
			'url' => 'https://cdnjs.cloudflare.com'
		)
	),
	'googleapis' => array(
		'internal' => array(
			'url' => 'https://fonts.googleapis.com'
		),
		'external' => array(
			'url' => 'https://fonts.googleapis.com'
		)
	),
	'gstatic' => array(
		'internal' => array(

		),
		'external' => array(
			'url' => 'https://fonts.gstatic.com'
		)
	)
);
