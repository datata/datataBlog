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

    public function deletePostUserById(int $idUser,int $idPost)
    {
        $post = $this->repository->find($idPost);
        if(!$post) throw new \Exception("El post no existe");
        if($post->idUser !==$idUser) throw new \Exception("El usuario no tiene permisos");

        $this->doctrine->em->remove($post);
        $this->doctrine->em->flush();
    }

    


}