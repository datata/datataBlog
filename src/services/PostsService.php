<?php
namespace App\services;

use App\DoctrineManager;
use App\models\entities\Post;

use Kint;

class PostsService
{
    private $repository;
    private $doctrine;
    public function __construct(DoctrineManager $doctrine)
    {
        $this->doctrine=$doctrine;
        $this->repository =  $this->doctrine->em->getRepository(Post::class);
    }
    public function getPosts()
    {
        //$repository = $this->doctrine->em->getRepository(Post::class);
        return $this->repository->findAll();
        Kint::dump($this->doctrine);
    }

    public function getPostsById(int $id)
    {
        
        return $this->repository->findByIdUser($id);
        
    }

    


}