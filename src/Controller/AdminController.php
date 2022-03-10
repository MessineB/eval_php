<?php

namespace App\Controller;

use App\Model\AddModel;
use App\Model\PostModel;
use App\Model\ResponsesModel;
use App\Controller\AbstractController;

class AdminController extends AbstractController
{  
   
    public function index()
    {   
        if ( $_POST) {
            $title = $_POST["title"];
            $content = $_POST["content"];
            $hashtag = $_POST["hashtag"];
            //var_dump($title);
            $formModel = new AddModel();
            $form = $formModel->createpost($title , $content , $hashtag);
        
        
        }
        $postModel = new PostModel();
        $responsesModel = new ResponsesModel();
        $posts = $postModel->findAllPosts();
        $responses = $responsesModel->findResponses();
       
        
       
        $this->render('admin.php', [
            'posts' => $posts,
            'responses' => $responses
        
        ]);
    }
    
}
