<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeacherPagesController extends AbstractController
{
    public function __construct()
    {

    }

    /**
     * @Route("/actual", name="teacher_actual_page")
     */
    public function displayActualsPage()
    {
        return $this->render('teacher/teacher_actual_page.html.twig');
    }
}