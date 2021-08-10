<?php
namespace src;

class Employee
{
    public string $firstName;
    public string $lastName;
    public string $address;
    public string $birthday;
    public string $role;

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
        $this->address = $data['address'];
        $this->birthday = $data['birthday'];
        $this->role = $data['role'];
    }

    /**
     * @return mixed|string
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @return mixed|string
     */
    public function getBirthday(): mixed
    {
        return $this->birthday;
    }

    /**
     * @param mixed|string $address
     */
    public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }

    /**
     * @param mixed|string $birthday
     */
    public function setBirthday(mixed $birthday): void
    {
        $this->birthday = $birthday;
    }
}