<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/{id}', name: 'blog_show', requirements: ['id' => '\d+'])]
    public function show(int $id, MessageGenerator $generator, LoggerInterface $logger): Response
    {
        $logger->info("Affichage de l'article $id");

        $message = $generator->getMessage($id);

        return $this->render('blog/show.html.twig', [
            'id' => $id,
            'message' => $message,
        ]);
    }
}
