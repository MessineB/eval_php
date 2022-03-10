<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\ResponsesModel;
use App\Controller\AbstractController;

class AdminController extends AbstractController
{  
   
    public function index()
    {   
        
        $postModel = new PostModel();
        $responsesModel = new ResponsesModel();
        
      
        $posts = $postModel->findPosts();
        $responses = $responsesModel->findResponses();
       
        
       
        $this->render('admin.php', [
            'posts' => $posts,
            'responses' => $responses
        
        ]);
    }
    
}
