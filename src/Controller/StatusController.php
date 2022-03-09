<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\ResponsesModel;
use App\Controller\AbstractController;

class StatusController extends AbstractController
{
    public function index()
    {
        $id = $_GET["post_id"];
        $postModel = new PostModel();
        $responsesModel = new ResponsesModel();
        $posts = $postModel->findPosts();
        $responses = $responsesModel->findResponses();
        
        $post_find = $postModel->findPost($id);

        $post_responses = $responsesModel->findbyId($id);

        $this->render('status.php', [
            'posts' => $posts,
            'responses' => $responses,
            'post_find' => $post_find,
            'post_responses' => $post_responses
        ]);
    }
}
