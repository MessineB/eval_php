<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\AddModel;
use App\Model\ResponsesModel;
use App\Controller\AbstractController;

class PostResponsesController extends AbstractController
{  
   
    public function index()
    {   if ( $_POST) {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $hashtag = $_POST["hashtag"];
        //var_dump($title);
        $formModel = new AddModel();
        $form = $formModel->createpost($title , $content , $hashtag);
        
    }
        
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
