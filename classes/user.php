<?php

abstract class User {
    protected $id;
    protected $email;
    protected $username;
    protected $password_hash;
    protected $role;
    protected $created_at;
    protected $updated_at;

    abstract public function createPost($title, $content);
    abstract public function readPost($postId);
    abstract public function updatePost($postId, $title, $content);
    abstract public function deletePost($postId);

    abstract public function createComment($postId, $content, $visitorName = null, $visitorEmail = null);
    abstract public function readComment($commentId);
    abstract public function updateComment($commentId, $content);
    abstract public function deleteComment($commentId);
}

?>

abstract class User {
    // Existing properties and methods

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getRole() {
        return $this->role;
    }

    public function setPassword($password) {
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password) {
        return password_verify($password, $this->password_hash);
    }
}
public function getCreatedAt() {
    return $this->created_at;
}

public function getUpdatedAt() {
    return $this->updated_at;
}

public function setEmail($email) {
    $this->email = $email;
}

public function setUsername($username) {
    $this->username = $username;
}

public function setRole($role) {
    $this->role = $role;
}
