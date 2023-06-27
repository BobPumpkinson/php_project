<?php
/**
 * Comment service interface.
 */

namespace App\Service;

use App\Entity\Comment;

/**
 * Interface CommentServiceInterface.
 */
interface CommentServiceInterface
{
    /**
     * Save entity.
     *
     * @param Comment $comment Comment entity
     */
    public function save(Comment $comment): void;

    /**
     * @param Comment $comment
     * @return void
     */
    public function delete(Comment $comment): void;

    /**
     * Find by id.
     *
     * @param int $id Comment id
     *
     * @return Comment|null Comment entity
     */
    public function findOneById(int $id): ?Comment;
}
