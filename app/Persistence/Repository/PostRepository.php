<?php 

namespace App\Persistance\Repository;

use Illuminate\Contracts\Pagination\Paginator;
use App\Persistance\Models\Post;

interface PostRepository {

    public function findAllPublic(int $page, int $size) :Paginator;

    public function findAll(int $page, int $size) :Paginator;

    public function findBySlugAndPublishedDate(string $slug, string $date) :Post;

    public function findById(int $id) :Post; 

    public function findMostViewed(int $limit) :Post;

    public function findBySearch(string $search, int $page, int $limit) :Paginator;

    public function findByCategory(string $categoryName, int $page, int $limit) :Paginator;
    public function findByTag(string $tagName, int $page, int $limit) :Paginator;
    public function findByAuthor(string $authorName, int $page, int $limit) :Paginator;

    public function save(Post $post) :Post;

    public function delete(Post $post) :void;

}