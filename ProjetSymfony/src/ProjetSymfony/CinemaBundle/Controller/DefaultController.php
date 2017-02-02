<?php
// src/ProjetSymfony/CinemaBundle/Controller/DefaultController.php
namespace ProjetSymfony\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('ProjetSymfonyCinemaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films", name="page_films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('ProjetSymfonyCinemaBundle:Film')->findAll();
        $titre_de_la_page = 'Films de la bibliothèques';

        return $this->render(
            'ProjetSymfonyCinemaBundle:Film:list.html.twig',
            ['films' => $films,'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"}, name="page_film")
     */
    public function showAction($id)
    {
        $film = $this->getDoctrine()->getRepository('ProjetSymfonyCinemaBundle:Film')->find($id);

        return $this->render(
            'ProjetSymfonyCinemaBundle:Film:show.html.twig',
            ['film' => $film]
        );
    }
}
