<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blog')]
final class BlogController extends AbstractController
{
    #[Route('', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('blog/blog.html.twig', []);
    }

    #[Route('/single_post', name: 'single_post')]
    public function single_post(): Response
    {
        return $this->render('blog/single_post.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    //Por si queremos hacer la ruta del post único dinámica:
    /*
    #[Route('/single-post/{slug}', name: 'single_post')]
    public function single_post(string $slug): Response
    {
        // En un proyecto real, usarías $slug para buscar el post en la base de datos.
        // Aquí lo pasamos a la plantilla para que sepa qué post está cargando.
        return $this->render('blog/single_post.html.twig', [
            'slug' => $slug,
        ]);
    }
    */

}
