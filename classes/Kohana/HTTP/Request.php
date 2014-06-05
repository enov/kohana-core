<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * A HTTP Request specific interface that adds the methods required
 * by HTTP requests. Over and above [Kohana_HTTP_Interaction], this
 * interface provides method, uri, get and post methods.
 *
 * @package    Kohana
 * @category   HTTP
 * @author     Kohana Team
 * @since      3.1.0
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaphp.com/license
 */
interface Kohana_HTTP_Request extends HTTP_Message, HTTP_Method {

	/**
	 * Gets the URI of this request, optionally allows setting
	 * of [Route] specific parameters during the URI generation.
	 * If no parameters are passed, the request will use the
	 * default values defined in the Route.
	 *
	 * @param   array    $params  Optional parameters to include in uri generation
	 * @return  string
	 */
	public function uri();

	/**
	 * Gets or sets HTTP query string.
	 *
	 * @param   mixed   $key    Key or key value pairs to set
	 * @param   string  $value  Value to set to a key
	 * @return  mixed
	 */
	public function query($key = NULL, $value = NULL);

	/**
	 * Gets or sets HTTP POST parameters to the request.
	 *
	 * @param   mixed   $key   Key or key value pairs to set
	 * @param   string  $value Value to set to a key
	 * @return  mixed
	 */
	public function post($key = NULL, $value = NULL);

}
