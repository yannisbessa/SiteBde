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

}