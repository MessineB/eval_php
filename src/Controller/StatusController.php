<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\ResponsesModel;
use App\Model\AddCommentModel;
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

    if ( $_POST) {
        $message = $_POST["message"];
        //var_dump($title);
        $formcommentModel = new AddCommentModel();
        $formcomment = $formcommentModel->createcomment($message , $id);
      
    }

        $this->render('status.php', [
            'posts' => $posts,
            'responses' => $responses,
            'post_find' => $post_find,
            'post_responses' => $post_responses
        ]);
    }
}
