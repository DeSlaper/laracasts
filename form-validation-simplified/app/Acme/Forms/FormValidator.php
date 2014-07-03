<?php namespace Acme\Forms;

use Illuminate\Validation\Factory as Validator;

abstract class FormValidator {

	/**
	 * @var Validator
	 */
	protected $validator;

	/**
	 * @var
	 */
	protected $validation;

	/**
	 * @param Validator $validator
	 */
	function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * @param array $formData
	 * @return bool
	 * @throws FormValidationException
	 */
	public function validate(array $formData)
	{
		$this->validation = $this->validator->make($formData, $this->getValidatorRules());

		if ($this->validation->fails())
		{
			throw new FormValidationException('Valodation failed', $this->getValidationErrors());
		}

		return true;
	}

	/**
	 * @return mixed
	 */
	protected function getValidatorRules()
	{
		return $this->rules;
	}

	/**
	 * @return mixed
	 */
	protected function getValidationErrors()
	{
		return $this->validation->errors();
	}
} 