<?php
class Admin extends User {
    public function createPost($title, $content) {
        // Implementation for creating a post
    }

    public function readPost($postId) {
        // Implementation for reading a post
    }

    public function updatePost($postId, $title, $content) {
        // Implementation for updating a post
    }

    public function deletePost($postId) {
        // Implementation for deleting a post
    }

    public function createComment($postId, $content, $visitorName = null, $visitorEmail = null) {
        // Implementation for creating a comment
    }

    public function readComment($commentId) {
        // Implementation for reading a comment
    }

    public function updateComment($commentId, $content) {
        // Implementation for updating a comment
    }

    public function deleteComment($commentId) {
        // Implementation for deleting a comment
    }
}
?>