<?php
namespace BDE\BackSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use BDE\BackSiteBundle\Entity\Pages;
use BDE\BackSiteBundle\Form\PagesType;

class BBdeController extends Controller
{

public function BackpageAction()
  {
  
        
        $form = $this->createForm(new PagesType());
        
 
            
            
   
         $content = $this->get('templating')->render('BDEBackSiteBundle:Bbde:Baccueil.html.twig', array('form' => $form->createView()));
    return new Response($content);

}

public function BaccueilAction()
  {
    
    $content = $this->get('templating')->render('BDEBackSiteBundle:Bbde:Baccueil.html.twig');
    return new Response($content);
    

}

public function AjouterAction()
{
 $em = $this->getDoctrine()->getManager();
 $a = new Pages;
    // Création de l'entité
    $a = new Pages();
    $a->setTitre('Recherche développeur Symfony.');
    $a->setDescription('Alexandre');
    $a->setBackground("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla
 0…");
    // On peut ne pas définir ni la date ni la publication,
 

    // Étape 1 : On « persiste » l'entité
    $em->persist($Pages);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    // Reste de la méthode qu'on avait déjà écrit


    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('BDEBackSiteBundle:Bbde:ajouter.html.twig',array($Pages));
  
}
}