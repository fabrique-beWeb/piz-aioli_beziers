<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
<?php

namespace Pizza\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Table(name="tb_users") 
 * @ORM\Entity(repositoryClass="Pizza\Repository\Repository") */

class TbUsers
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer", length=11)
    */
    protected $user_id;
    
    /** @ORM\Column(type="string", length=255, unique=true) */
    protected $email;
    
    /** @ORM\Column(type="string", length=10) */
    protected $role;
    
    /** @ORM\Column(type="string", length=128) */
    protected $password;
    
    function getUser_id() {
        return $this->user_id;
    }

    function getEmail() {
        return $this->email;
    }

    function getRole() {
        return $this->role;
    }

    function getPassword() {
        return $this->password;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setPassword($password) {
        $this->password = $password;
    }



<<<<<<< HEAD
}
=======
<!--CREATE TABLE user
(
    user_id       INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username      VARCHAR(255) DEFAULT NULL UNIQUE,
    email         VARCHAR(255) DEFAULT NULL UNIQUE,
    display_name  VARCHAR(50) DEFAULT NULL,
    password      VARCHAR(128) NOT NULL,
    state         SMALLINT
) ENGINE=InnoDB;-->
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
}
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
