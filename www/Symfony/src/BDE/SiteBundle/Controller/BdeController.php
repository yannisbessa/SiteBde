<?php
namespace BDE\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use BDE\SiteBundle\Entity\team;
use BDE\SiteBundle\Form\teamType;

class BdeController extends Controller
{
  public function AccueilAction()
  {


    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:AccueilSite.html.twig');
    return new Response($content);
    
}


 public function ISEPTRAVELAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEPTRAVEL.html.twig');
    return new Response($content);
    

} 


 public function ISEPBANDSAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEPBANDS.html.twig');
    return new Response($content);
    

} 
 public function JUNIORISEPAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:JUNIORISEP.html.twig');
    return new Response($content);
    

} 
 public function ISEPVOILEAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEPVOILE.html.twig');
    return new Response($content);
    

} 
 public function ELLYPSISAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ELLYPSIS.html.twig');
    return new Response($content);
    

} 
 public function ISEPLIVEAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEPLIVE.html.twig');
    return new Response($content);
    

} 

 public function ISEPAAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEPA.html.twig');
    return new Response($content);
    

} 


 public function ISEPAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:ISEP.html.twig');
    return new Response($content);    

}

 public function AssoAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:AssoSite.html.twig');
    return new Response($content);
    
}
 public function CalAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Public:CalSite.html.twig');
    return new Response($content);
    

} 
 public function AccueilEleveAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Eleve:AccueilEleve.html.twig');
    return new Response($content);
    

} 

 public function discussionAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde/Eleve:Discussion.html.twig');
    return new Response($content);
    

} 
}