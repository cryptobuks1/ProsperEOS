<?php
namespace User\Model;

class UserEntity
{
	protected $id;
	protected $role;
	protected $email;
	protected $password;
	protected $first_name;
	protected $last_name;
	protected $salt;
	protected $active;
	protected $created_datetime;
	protected $created_user_id;

	public function __construct()
	{
		$this->created_datetime = date('Y-m-d H:i:s');
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($value)
	{
		$this->id = $value;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function setRole($value)
	{
		$this->role = $value;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($value)
	{
		$this->email = $value;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($value)
	{
		$this->password = $value;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setFirstName($value)
	{
		$this->first_name = $value;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function setLastName($value)
	{
		$this->last_name = $value;
	}

	public function getSalt()
	{
		return $this->salt;
	}

	public function setSalt($value)
	{
		$this->salt = $value;
	}

	public function setActive($value)
	{
		$this->active = $value;
	}

	public function getActive()
	{
		return $this->active;
	}

	public function getCreatedDatetime()
	{
		return $this->created_datetime;
	}

	public function setCreatedDatetime($value)
	{
		$this->created_datetime = $value;
	}

	public function getCreatedUserId()
	{
		return $this->created_user_id;
	}

	public function setCreatedUserId($value)
	{
		$this->created_user_id = $value;
	}
}
