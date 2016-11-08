<?php

require_once( './suiteCRMTheme.php' );

	$name             = 'Suite P';
	$root_path        = '/usr/share/nginx/html/themes/SuiteP';
	$root_url         = 'themes/SuiteP';
	$target_name      = 'NRG';
	$target_root_path = '/usr/share/nginx/html/themes/NRG';
	$target_root_url  = 'themes/NRG';

	$theme = new suiteCRMTheme( $name, $root_path, $root_url );
	$theme->set_debug( 'true' );
	$theme->set_target( $target_name, $target_root_path, $target_root_url );

	$theme->add_color_swap( '#534D64', '#393939' );
	$theme->add_color_swap( '#5D5670', '#4D4D4F' );
	$theme->add_color_swap( '#66727D', '#4D4D4F' );
	$theme->add_color_swap( '#677785', '#808285' );
	$theme->add_color_swap( '#757083', '#97999C' );
	$theme->add_color_swap( '#778591', '#808285' );
	$theme->add_color_swap( '#829EB5', '#97999C' );
	$theme->add_color_swap( '#829EB5', '#97999C' );
	$theme->add_color_swap( '#8499AB', '#97999C' );
	$theme->add_color_swap( '#94A6B5', '#BCBEB0' );
	$theme->add_color_swap( '#9589B3', '#00ACf3' );
	$theme->add_color_swap( '#95ACC0', '#BCBEB0' );
	$theme->add_color_swap( '#A5E8D6', '#6ED5FF' );
	$theme->add_color_swap( '#AA9DCC', '#3C9CC4' );
	$theme->add_color_swap( '#BFCAD3', '#BCBEB0' );
	$theme->add_color_swap( '#F08377', '#00AEEF' );
	$theme->add_color_swap( '#F5F5F5', '#D5D7D8' );

	$theme->read();
	$theme->_d();
	$theme->write();