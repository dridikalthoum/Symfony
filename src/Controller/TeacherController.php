<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }

    public function ShowTeacher ($name):response
    {
        return new response=  ("Bonjour! L'enseignant est:", $name);
    }  

    public function gotoIndex() {
        {
            $response = $this->forward('C:\Users\admin\Project1\src\Controller\StudentController.php', [
               
            ]);
                
            return $response;
        }
    }
}
