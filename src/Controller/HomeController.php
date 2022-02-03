<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Repository\ProjectsRepository;
use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProjectsRepository $projectsRepository, SkillsRepository $skillsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'projects' => $projectsRepository->findAll(),
            'skills' => $skillsRepository->findAll(),
        ]);
    }
}
