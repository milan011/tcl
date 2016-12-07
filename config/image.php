<?php
	
	$base_dir = public_path('uploads/car');
	$date = date('Ym', time());

	$full_size = $base_dir.$date.'imgs';
	$icon_size = $base_dir.$date.'icon';

	return [
	    /*'full_size'   => env('UPLOAD_FULL_SIZE'),
	    'icon_size'   => env('UPLOAD_ICON_SIZE'),*/
	    'full_size'   => $full_size,
	    'icon_size'   => $icon_size,
	];