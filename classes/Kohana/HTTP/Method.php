<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * An HTTP Method specific interface that adds the constants, also known
 * as the HTTP verbs to the implementing class. Also, it adds a
 * function to get and/or set the HTTP verb.
 *
 * @package    Kohana
 * @category   HTTP
 * @author     Kohana Team
 * @since      3.4.0
 * @copyright  (c) 2008-2014 Kohana Team
 * @license    http://kohanaframework.org/license
 */
interface Kohana_HTTP_Method {

	// HTTP Methods
	const GET       = 'GET';
	const POST      = 'POST';
	const PUT       = 'PUT';
	const DELETE    = 'DELETE';
	const HEAD      = 'HEAD';
	const OPTIONS   = 'OPTIONS';
	const TRACE     = 'TRACE';
	const CONNECT   = 'CONNECT';

	/**
	 * Gets or sets the HTTP method. Usually GET, POST, PUT or DELETE in
	 * traditional CRUD applications.
	 *
	 * @param   string   $method  Method to use for this Method
	 * @return  mixed
	 */
	public function method($method = NULL);

}
