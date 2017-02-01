<?php
// src/ProjetSymfony/CinemaBundle/Controller/DefaultController.php
namespace ProjetSymfony\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ProjetSymfonyCinemaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('ProjetSymfonyCinemaBundle:Film')->findAll();
        return $this->render('ProjetSymfonyCinemaBundle:Film:list.html.twig');
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('ProjetSymfonyCinemaBundle:Film:show.html.twig');
    }
}
