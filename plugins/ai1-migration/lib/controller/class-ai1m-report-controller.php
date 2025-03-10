<?php
/**
 * Copyright (C) 2014-2018 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */

class Ai1m_Report_Controller {

	public static function report( $params = array() ) {

		// Set params
		if ( empty( $params ) ) {
			$params = stripslashes_deep( $_POST );
		}

		// Set secret key
		$secret_key = null;
		if ( isset( $params['secret_key'] ) ) {
			$secret_key = trim( $params['secret_key'] );
		}

		// Set e-mail
		$email = null;
		if ( isset( $params['ai1m_email'] ) ) {
			$email = trim( $params['ai1m_email'] );
		}

		// Set message
		$message = null;
		if ( isset( $params['ai1m_message'] ) ) {
			$message = trim( $params['ai1m_message'] );
		}

		// Set terms
		$terms = false;
		if ( isset( $params['ai1m_terms'] ) ) {
			$terms = (bool) $params['ai1m_terms'];
		}

		try {
			// Ensure that unauthorized people cannot access report action
			ai1m_verify_secret_key( $secret_key );
		} catch ( Ai1m_Not_Valid_Secret_Key_Exception $e ) {
			exit;
		}

		$model = new Ai1m_Report;

		// Send report
		$errors = $model->add( $email, $message, $terms );

		echo json_encode( array( 'errors' => $errors ) );
		exit;
	}
}
