<?php namespace Laracasts\Validation;

use Illuminate\Validation\Factory as Validator;

class LaravelValidator implements FactoryInterface {

	/**
	 * @var \Illuminate\Validation\Factory
	 */
	private $validator;

	/**
	 * @param Validator $validator
	 */
	function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * Initialize validation
	 *
	 * @param array $formData
	 * @param array $rules
	 * @param array $messages
	 * @param array $customAttributes
	 * @return \Illuminate\Validation\Validator
	 */
	public function make(array $formData, array $rules, array $messages = [], array $customAttributes = [])
	{
		return $this->validator->make($formData, $rules, $messages, $customAttributes);
	}

}
