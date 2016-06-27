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


return $this->render('BDESiteBundle:Bde:AccueilSite.html.twig');
    
}


 public function ISEPTRAVELAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEPTRAVEL.html.twig');
    return new Response($content);
    

} 


 public function ISEPBANDSAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEPBANDS.html.twig');
    return new Response($content);
    

} 
 public function JUNIORISEPAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:JUNIORISEP.html.twig');
    return new Response($content);
    

} 
 public function ISEPVOILEAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEPVOILE.html.twig');
    return new Response($content);
    

} 
 public function ELLYPSISAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ELLYPSIS.html.twig');
    return new Response($content);
    

} 
 public function ISEPLIVEAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEPLIVE.html.twig');
    return new Response($content);
    

} 

 public function ISEPAAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEPA.html.twig');
    return new Response($content);
    

} 


 public function ISEPAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:ISEP.html.twig');
    return new Response($content);    

}

 public function AssoAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:AssoSite.html.twig');
    return new Response($content);
    
}
 public function CalAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:CalSite.html.twig');
    return new Response($content);
    

} 
 public function EAccueilAction()
  {
    
    $content = $this->get('templating')->render('BDESiteBundle:Bde:EAccueil.html.twig');
    return new Response($content);
    

} 
}