<?php
// src/ProjetSymfony/CinemaBundle/Controller/RealisateurController.php
namespace ProjetSymfony\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RealisateurController extends Controller
{
 
    /**
     * @Route("/realisateurs", name="page_realisateurs")
     */
    public function listAction()
    {
        $realisateurs = $this->getDoctrine()->getRepository('ProjetSymfonyCinemaBundle:Personne')->findAll();
        $titre_de_la_page = 'realisateurs de la bibliothèques';

        return $this->render(
            'ProjetSymfonyCinemaBundle:Realisateur:list.html.twig',
            ['realisateurs' => $realisateurs,'titre' => $titre_de_la_page]
        );
    }


}
