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


}
