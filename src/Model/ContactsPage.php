<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 22.10.18
 * Time: 16:19
 */

namespace App\Model;


final class ContactsPage
{
    private $name;
    private $email;
    private $message;
    private $btn;

    public function __construct(
        string $name,
        string $email,
        string $message,
        string $btn
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->btn = $btn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getBtn()
    {
        return $this->btn;
    }

    /**
     * @param mixed $btn
     */
    public function setBtn($btn): void
    {
        $this->btn = $btn;
    }


}