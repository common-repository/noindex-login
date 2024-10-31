<?php
/*
Plugin Name: Noindex Login
Plugin URI: http://kempwire.com/wordpress-noindex-login-plugin
Description: Adds the noindex meta tag to your WordPress Login page.
Version: 1.0
Author: Jonathan Kemp
Author URI: http://kempwire.com/

Copyright 2009  Jonathan Kemp  (email : jonkemp@comcast.net)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/

function noindex_login() {
	echo '	<meta name="robots" content="noindex"/>
	';
}
 
add_action('login_head', 'noindex_login');
