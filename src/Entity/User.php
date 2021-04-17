<?php

namespace App\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @UniqueEntity(fields={"userName"}, message="user.exist")
 * @UniqueEntity(fields={"email"}, message="email.exist")
 */
class User implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Only for welcome message
     * @Assert\NotBlank(message="user.name_no_blank")
     * @ORM\Column(type="string", unique=true)
     * @Assert\Length(
     *     min="5",
     *     minMessage="user.name_min_len"
     *     )
     */
    private $userName;

    /**
     * Real userName for login in
     * @Assert\NotBlank(message="email.not_blank")
     * @ORM\Column(type="string", unique=true)
     * @Assert\Email(
     *     message = "email.bad_format",
     *     checkMX = true
     *     )
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @Assert\NotBlank(
     *     groups={"Registration", "Password"},
     *     message="user.password_no_blank"
     * )
     * @Assert\Length(
     *     groups={"Registration", "Password"},
     *     min="8",
     *     minMessage="user.password_min_len"
     * )
     * @Assert\Regex(
     *     groups={"Registration", "Password"},
     *     pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,180}$/",
     *     message="user.password_difficulty"
     * )
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="datetime")
     */
    private $confirmationTokenCreatedAt;

    /**
     * Account is prohibited by default
     * @ORM\Column(type="boolean")
     */
    private $confirmed = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Returns the username used to authenticate the user.
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return array
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        if (!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }

        return $roles;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials(): void
    {
        $this->plainPassword = null;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
        $this->password = null;
    }

    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = mb_convert_case($email, MB_CASE_LOWER);
    }

    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    public function setConfirmationToken(?string $confirmationToken): void
    {
        $this->confirmationToken = $confirmationToken;
    }

    public function getConfirmationTokenCreatedAt(): \DateTime
    {
        return $this->confirmationTokenCreatedAt;
    }

    public function setConfirmationTokenCreatedAt(\DateTime $confirmationTokenCreatedAt): void
    {
        $this->confirmationTokenCreatedAt = $confirmationTokenCreatedAt;
    }

    public function getConfirmed(): bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    public function setCreatedAt(\DateTime $date): void
    {
        $this->createdAt = $date;
    }

}