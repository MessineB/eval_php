<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\ResponsesModel;
use App\Controller\AbstractController;

class PostResponsesController extends AbstractController
{
    public function index()
    {
        $postModel = new PostModel();
        $responsesModel = new ResponsesModel();

        $posts = $postModel->findPosts();
        $responses = $responsesModel->findResponses();

        // $response = $responsesModel->findRespone($id);
       

        $this->render('post.php', [
            'posts' => $posts,
            'responses' => $responses,
            
        ]);
    }
}
