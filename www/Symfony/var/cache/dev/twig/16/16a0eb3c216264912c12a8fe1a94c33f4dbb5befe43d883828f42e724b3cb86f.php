<?php

/* @BDESite/Bde/AssoSite.html.twig */
class __TwigTemplate_b4b85cbdf25c25c80c0f096f340a389ae75d9865bee942dcfb94483ddbd162bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/AssoSite.html.twig", 4);
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
        $__internal_552da0f39ce9a3f77062652508d53dd0e17853bf8dc2c46e34e92cec2d6a6f02 = $this->env->getExtension("native_profiler");
        $__internal_552da0f39ce9a3f77062652508d53dd0e17853bf8dc2c46e34e92cec2d6a6f02->enter($__internal_552da0f39ce9a3f77062652508d53dd0e17853bf8dc2c46e34e92cec2d6a6f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/AssoSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552da0f39ce9a3f77062652508d53dd0e17853bf8dc2c46e34e92cec2d6a6f02->leave($__internal_552da0f39ce9a3f77062652508d53dd0e17853bf8dc2c46e34e92cec2d6a6f02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f8aa8c6469a3a08447c9e5da982c58ca0dedc5c86ada79d6a15cd3fd5b729d = $this->env->getExtension("native_profiler");
        $__internal_c2f8aa8c6469a3a08447c9e5da982c58ca0dedc5c86ada79d6a15cd3fd5b729d->enter($__internal_c2f8aa8c6469a3a08447c9e5da982c58ca0dedc5c86ada79d6a15cd3fd5b729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Move your AS ";
        
        $__internal_c2f8aa8c6469a3a08447c9e5da982c58ca0dedc5c86ada79d6a15cd3fd5b729d->leave($__internal_c2f8aa8c6469a3a08447c9e5da982c58ca0dedc5c86ada79d6a15cd3fd5b729d_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_452e3ec7bfaef01e425f05e4111d7db99f4d1ac393a89881f0df6cd4e1c1375e = $this->env->getExtension("native_profiler");
        $__internal_452e3ec7bfaef01e425f05e4111d7db99f4d1ac393a89881f0df6cd4e1c1375e->enter($__internal_452e3ec7bfaef01e425f05e4111d7db99f4d1ac393a89881f0df6cd4e1c1375e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/AS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\" >
                        <h1 style=\"color:white\">Move your AS</h1>

";
        
        $__internal_452e3ec7bfaef01e425f05e4111d7db99f4d1ac393a89881f0df6cd4e1c1375e->leave($__internal_452e3ec7bfaef01e425f05e4111d7db99f4d1ac393a89881f0df6cd4e1c1375e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e7449d434b6fda7ff404f3db0302cb4f7d409ce7404f64213413a7a5c1787a7 = $this->env->getExtension("native_profiler");
        $__internal_2e7449d434b6fda7ff404f3db0302cb4f7d409ce7404f64213413a7a5c1787a7->enter($__internal_2e7449d434b6fda7ff404f3db0302cb4f7d409ce7404f64213413a7a5c1787a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p> Move your AS</p>
L'AS de l'ISEP propose toutes sortes d'activités.

<p>* Football : Les rois du ballon</p>
<p>* Tennis : Le simple plaisir de taper dans la petite balle jaune</p>
<p>* Rugby : Sportifs avides de contacts...humains et physiques</p>
<p>* Basket : Les dunkers fous </p>
<p>* Volley : Une ambiance conviviale et sportive</p>
<p>* Badminton : Sport de vitesse, de déplacement et de précision</p>

<p>Elle est destinée pour n'importe quel isépien et n'importe quelle
isépienne voulant faire du sport. Le niveau n'a pas d'importance.
Débutant(e)s n'hésitez pas à découvrir un sport que vous n'aviez pas
envisagé pratiquer jusqu'alors. Vous serez conseillés et encadrés.
Sportif(ve)s confirmé(e)s apportez votre expérience au sein des clubs et
portez haut les couleurs de l'école.</p>

<p>Date de création : Mardi 1er Septembre 1959</p>
<p>Email : as@isep.fr</p>

";
        
        $__internal_2e7449d434b6fda7ff404f3db0302cb4f7d409ce7404f64213413a7a5c1787a7->leave($__internal_2e7449d434b6fda7ff404f3db0302cb4f7d409ce7404f64213413a7a5c1787a7_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/AssoSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}Move your AS {% endblock %}*/
/* */
/* {% block img %}*/
/*     <header class="intro-header"  style="background-image: url({{asset ('img/AS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading" >*/
/*                         <h1 style="color:white">Move your AS</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p> Move your AS</p>*/
/* L'AS de l'ISEP propose toutes sortes d'activités.*/
/* */
/* <p>* Football : Les rois du ballon</p>*/
/* <p>* Tennis : Le simple plaisir de taper dans la petite balle jaune</p>*/
/* <p>* Rugby : Sportifs avides de contacts...humains et physiques</p>*/
/* <p>* Basket : Les dunkers fous </p>*/
/* <p>* Volley : Une ambiance conviviale et sportive</p>*/
/* <p>* Badminton : Sport de vitesse, de déplacement et de précision</p>*/
/* */
/* <p>Elle est destinée pour n'importe quel isépien et n'importe quelle*/
/* isépienne voulant faire du sport. Le niveau n'a pas d'importance.*/
/* Débutant(e)s n'hésitez pas à découvrir un sport que vous n'aviez pas*/
/* envisagé pratiquer jusqu'alors. Vous serez conseillés et encadrés.*/
/* Sportif(ve)s confirmé(e)s apportez votre expérience au sein des clubs et*/
/* portez haut les couleurs de l'école.</p>*/
/* */
/* <p>Date de création : Mardi 1er Septembre 1959</p>*/
/* <p>Email : as@isep.fr</p>*/
/* */
/* {% endblock %}*/
/* */
