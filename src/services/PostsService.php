<?php
namespace App\services;

use App\DoctrineManager;
use Kint;

class PostsService
{
    private $doctrine;
    public function __construct(DoctrineManager $doctrine)
    {
        $this->doctrine=$doctrine;
    }
    public function getPosts()
    {
        Kint::dump($this->doctrine);
    }
}