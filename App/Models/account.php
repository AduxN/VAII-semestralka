<?php
declare(strict_types=1);
namespace App\Models;
use App\Core\Model;

class account extends Model
{
    protected int $id;
    protected ?string $login;
    protected ?string $password;
    protected ?string $name;
    protected ?string $email;

    public function __construct(?string $login = null, ?string $password = null, ?string $name = null, ?string $email = null)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param string|null $login
     */
    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public static function setTableName()
    {
        return "ucet";
    }

    public static function setColumnNames()
    {
        return ["id", "login", "password", "name","email"];
    }

}

