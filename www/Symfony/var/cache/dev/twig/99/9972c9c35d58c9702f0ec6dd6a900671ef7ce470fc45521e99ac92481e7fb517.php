<?php

/* BDESiteBundle:Bde:ISEPTRAVEL.html.twig */
class __TwigTemplate_ba051030439aa285aba4b9e6be9475b49dc674f6c298b593bc3159156501c109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPTRAVEL.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cf1f3ce07611e82c666c85ea86887c18576255dc5fdeaf575276adfdaf8ac9b = $this->env->getExtension("native_profiler");
        $__internal_7cf1f3ce07611e82c666c85ea86887c18576255dc5fdeaf575276adfdaf8ac9b->enter($__internal_7cf1f3ce07611e82c666c85ea86887c18576255dc5fdeaf575276adfdaf8ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPTRAVEL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf1f3ce07611e82c666c85ea86887c18576255dc5fdeaf575276adfdaf8ac9b->leave($__internal_7cf1f3ce07611e82c666c85ea86887c18576255dc5fdeaf575276adfdaf8ac9b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf8ddd577d15151b523c14fc577be817d92a752cde383a4b03df820079ff92eb = $this->env->getExtension("native_profiler");
        $__internal_bf8ddd577d15151b523c14fc577be817d92a752cde383a4b03df820079ff92eb->enter($__internal_bf8ddd577d15151b523c14fc577be817d92a752cde383a4b03df820079ff92eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP TRAVEL";
        
        $__internal_bf8ddd577d15151b523c14fc577be817d92a752cde383a4b03df820079ff92eb->leave($__internal_bf8ddd577d15151b523c14fc577be817d92a752cde383a4b03df820079ff92eb_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_50f2734fbd0a0e1f71964f54fd783e6007ccd131387da9bf2705e0cbc243bc0b = $this->env->getExtension("native_profiler");
        $__internal_50f2734fbd0a0e1f71964f54fd783e6007ccd131387da9bf2705e0cbc243bc0b->enter($__internal_50f2734fbd0a0e1f71964f54fd783e6007ccd131387da9bf2705e0cbc243bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPTRAVEL.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:transparent;\";>ISEPTRAVEL</h1>

";
        
        $__internal_50f2734fbd0a0e1f71964f54fd783e6007ccd131387da9bf2705e0cbc243bc0b->leave($__internal_50f2734fbd0a0e1f71964f54fd783e6007ccd131387da9bf2705e0cbc243bc0b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f8e24adad6c9b0a8982cb212ca069206026462ba62ab6e5606436e6d5c06ad = $this->env->getExtension("native_profiler");
        $__internal_b7f8e24adad6c9b0a8982cb212ca069206026462ba62ab6e5606436e6d5c06ad->enter($__internal_b7f8e24adad6c9b0a8982cb212ca069206026462ba62ab6e5606436e6d5c06ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>ISEP TRAVEL </p>


<p>ISEP Travel est l'association de l'ISEP qui s'occupe de tes voyages pendant les vacances scolaires.

L’équipe se charge d’organiser tout au long de l’année plusieurs voyages dans différentes villes européennes le tout à des prix modérés.

Tu n’as qu’à te laisser transporter, ton association s’occupe de tout : transport, hébergement dans le quartier le plus sympa de la ville, bon plans…


Une fois sur place, tu es libre de faire ce qu’il te plait : Visiter des endroits exceptionnels que tu n’es pas prêt d’oublier, rencontrer des gens autour d'un verre, participer aux quelques activités qui seront proposées par l’équipe… Bref, tu l’auras compris, ce ne sera pas un sale voyage de classe, mais de vraies vacances avec tes potes ! Le tout dans une ambiance conviviale.


Donc si tu en as assez de rouiller sur facebook sous le ciel gris de Paris, et que tu veux vraiment profiter des tes précieuses et tant attendues vacances, n'hésite plus et viens t’inscrire au premier voyage que nous organisons cette année à BUDAPEST pour les vacances de la Toussaint !</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mardi 1er Novembre 2011</p>
<p>Email : isep.travel@gmail.com</p>
";
        
        $__internal_b7f8e24adad6c9b0a8982cb212ca069206026462ba62ab6e5606436e6d5c06ad->leave($__internal_b7f8e24adad6c9b0a8982cb212ca069206026462ba62ab6e5606436e6d5c06ad_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPTRAVEL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 16,  55 => 8,  49 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEP TRAVEL{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPTRAVEL.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:transparent;";>ISEPTRAVEL</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP TRAVEL </p>*/
/* */
/* */
/* <p>ISEP Travel est l'association de l'ISEP qui s'occupe de tes voyages pendant les vacances scolaires.*/
/* */
/* L’équipe se charge d’organiser tout au long de l’année plusieurs voyages dans différentes villes européennes le tout à des prix modérés.*/
/* */
/* Tu n’as qu’à te laisser transporter, ton association s’occupe de tout : transport, hébergement dans le quartier le plus sympa de la ville, bon plans…*/
/* */
/* */
/* Une fois sur place, tu es libre de faire ce qu’il te plait : Visiter des endroits exceptionnels que tu n’es pas prêt d’oublier, rencontrer des gens autour d'un verre, participer aux quelques activités qui seront proposées par l’équipe… Bref, tu l’auras compris, ce ne sera pas un sale voyage de classe, mais de vraies vacances avec tes potes ! Le tout dans une ambiance conviviale.*/
/* */
/* */
/* Donc si tu en as assez de rouiller sur facebook sous le ciel gris de Paris, et que tu veux vraiment profiter des tes précieuses et tant attendues vacances, n'hésite plus et viens t’inscrire au premier voyage que nous organisons cette année à BUDAPEST pour les vacances de la Toussaint !</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Mardi 1er Novembre 2011</p>*/
/* <p>Email : isep.travel@gmail.com</p>*/
/* {% endblock %}*/
/* */
