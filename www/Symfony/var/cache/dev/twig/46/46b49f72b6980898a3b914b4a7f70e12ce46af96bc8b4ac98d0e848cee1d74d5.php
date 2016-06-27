<?php

/* @BDESite/Bde/ISEPBANDS.html.twig */
class __TwigTemplate_dfeecbfe777d6b0b800d9f5a7add233c00cb97b9a7c4a60ec9c689effd3085d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPBANDS.html.twig", 5);
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
        $__internal_69b8c6891531590b2187719124d86c3b79c477fa47012106dd66165ba5e40d05 = $this->env->getExtension("native_profiler");
        $__internal_69b8c6891531590b2187719124d86c3b79c477fa47012106dd66165ba5e40d05->enter($__internal_69b8c6891531590b2187719124d86c3b79c477fa47012106dd66165ba5e40d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPBANDS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b8c6891531590b2187719124d86c3b79c477fa47012106dd66165ba5e40d05->leave($__internal_69b8c6891531590b2187719124d86c3b79c477fa47012106dd66165ba5e40d05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dbf4010a4056166e1fde2afe4431604864b603839e9137e4ce65418b0a09436 = $this->env->getExtension("native_profiler");
        $__internal_9dbf4010a4056166e1fde2afe4431604864b603839e9137e4ce65418b0a09436->enter($__internal_9dbf4010a4056166e1fde2afe4431604864b603839e9137e4ce65418b0a09436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPBANDS";
        
        $__internal_9dbf4010a4056166e1fde2afe4431604864b603839e9137e4ce65418b0a09436->leave($__internal_9dbf4010a4056166e1fde2afe4431604864b603839e9137e4ce65418b0a09436_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_64eb68c2c8a76fb24037bec9ff46c38aac8f64d6c5b8c0144474634e2441a033 = $this->env->getExtension("native_profiler");
        $__internal_64eb68c2c8a76fb24037bec9ff46c38aac8f64d6c5b8c0144474634e2441a033->enter($__internal_64eb68c2c8a76fb24037bec9ff46c38aac8f64d6c5b8c0144474634e2441a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPBANDS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>ISEP BANDS</h1>

";
        
        $__internal_64eb68c2c8a76fb24037bec9ff46c38aac8f64d6c5b8c0144474634e2441a033->leave($__internal_64eb68c2c8a76fb24037bec9ff46c38aac8f64d6c5b8c0144474634e2441a033_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6394efceeacac9137f229e5da1482329246c023fbeded1b2ac4a55921c7a005 = $this->env->getExtension("native_profiler");
        $__internal_c6394efceeacac9137f229e5da1482329246c023fbeded1b2ac4a55921c7a005->enter($__internal_c6394efceeacac9137f229e5da1482329246c023fbeded1b2ac4a55921c7a005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p>ISEP BANDS</p>


<p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. 
N'hésitez pas à allez sur notre page Facebook :</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mercredi 1er Septembre 2010</p>
<p>Email : isepbands@isep.fr</p>
";
        
        $__internal_c6394efceeacac9137f229e5da1482329246c023fbeded1b2ac4a55921c7a005->leave($__internal_c6394efceeacac9137f229e5da1482329246c023fbeded1b2ac4a55921c7a005_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPBANDS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 7,  11 => 5,);
    }
}
/* */
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEPBANDS{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPBANDS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:white";>ISEP BANDS</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP BANDS</p>*/
/* */
/* */
/* <p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. */
/* N'hésitez pas à allez sur notre page Facebook :</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Mercredi 1er Septembre 2010</p>*/
/* <p>Email : isepbands@isep.fr</p>*/
/* {% endblock %}*/
