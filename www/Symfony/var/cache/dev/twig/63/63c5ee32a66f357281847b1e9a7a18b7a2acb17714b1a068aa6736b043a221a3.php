<?php

/* @BDESite/Bde/ISEPVOILE.html.twig */
class __TwigTemplate_e5d8ce02f488e377ab7bb858d95c33a77709eaebc94c17264fe2e14ee98db2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPVOILE.html.twig", 5);
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
        $__internal_59428218443ff01df58c494a85246f5c5e2255a11335e54c7e85296b56f44111 = $this->env->getExtension("native_profiler");
        $__internal_59428218443ff01df58c494a85246f5c5e2255a11335e54c7e85296b56f44111->enter($__internal_59428218443ff01df58c494a85246f5c5e2255a11335e54c7e85296b56f44111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPVOILE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59428218443ff01df58c494a85246f5c5e2255a11335e54c7e85296b56f44111->leave($__internal_59428218443ff01df58c494a85246f5c5e2255a11335e54c7e85296b56f44111_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de95a71adaebd42044f73abca81673f589d03590112c34bb03e7e95cfc113ac0 = $this->env->getExtension("native_profiler");
        $__internal_de95a71adaebd42044f73abca81673f589d03590112c34bb03e7e95cfc113ac0->enter($__internal_de95a71adaebd42044f73abca81673f589d03590112c34bb03e7e95cfc113ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "ISEP VOILE ";
        
        $__internal_de95a71adaebd42044f73abca81673f589d03590112c34bb03e7e95cfc113ac0->leave($__internal_de95a71adaebd42044f73abca81673f589d03590112c34bb03e7e95cfc113ac0_prof);

    }

    // line 9
    public function block_img($context, array $blocks = array())
    {
        $__internal_ecd29918bfbc030d332bb9d0adbcde392db711f273426acdc23d88e426fd088c = $this->env->getExtension("native_profiler");
        $__internal_ecd29918bfbc030d332bb9d0adbcde392db711f273426acdc23d88e426fd088c->enter($__internal_ecd29918bfbc030d332bb9d0adbcde392db711f273426acdc23d88e426fd088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 10
        echo "    <header class=\"intro-header\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPVOILE.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\" >
                        <h1 style=\"color:white\">ISEP VOILE</h1>

";
        
        $__internal_ecd29918bfbc030d332bb9d0adbcde392db711f273426acdc23d88e426fd088c->leave($__internal_ecd29918bfbc030d332bb9d0adbcde392db711f273426acdc23d88e426fd088c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d79b2744e949f75e748d971dd656ea7e56f06493c8069393685e8ad574164d9 = $this->env->getExtension("native_profiler");
        $__internal_4d79b2744e949f75e748d971dd656ea7e56f06493c8069393685e8ad574164d9->enter($__internal_4d79b2744e949f75e748d971dd656ea7e56f06493c8069393685e8ad574164d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<p>ISEP VOILE</p>


<p>La voile est souvent considérée comme un sport extrême réservé à une minorité. Nous souhaitons changer cette image et faire de ISEP Voile une association dynamique et animée par la volonté de faire découvrir la voile et ses émotions au plus grand nombre d’étudiants.

Tous ainsi unis autour d’une même passion, d’un goût pour l’air marin et les sensations fortes, nous prévoyons de participer à plusieurs week-ends d’entraînements, et ainsi hisser fièrement nos couleurs lors de l’événement incontournable du milieu de la voile : la Course Croisière EDHEC.

Plus d'infos : http://voile.iseplive.fr/.</p>

<p>Date de création : Mardi 28 Octobre 2008</p>
<p>Email : voile@isep.fr</p>

";
        
        $__internal_4d79b2744e949f75e748d971dd656ea7e56f06493c8069393685e8ad574164d9->leave($__internal_4d79b2744e949f75e748d971dd656ea7e56f06493c8069393685e8ad574164d9_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPVOILE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  71 => 18,  55 => 10,  49 => 9,  36 => 7,  11 => 5,);
    }
}
/* */
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}ISEP VOILE {% endblock %}*/
/* */
/* {% block img %}*/
/*     <header class="intro-header"  style="background-image: url({{asset ('img/ISEPVOILE.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading" >*/
/*                         <h1 style="color:white">ISEP VOILE</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP VOILE</p>*/
/* */
/* */
/* <p>La voile est souvent considérée comme un sport extrême réservé à une minorité. Nous souhaitons changer cette image et faire de ISEP Voile une association dynamique et animée par la volonté de faire découvrir la voile et ses émotions au plus grand nombre d’étudiants.*/
/* */
/* Tous ainsi unis autour d’une même passion, d’un goût pour l’air marin et les sensations fortes, nous prévoyons de participer à plusieurs week-ends d’entraînements, et ainsi hisser fièrement nos couleurs lors de l’événement incontournable du milieu de la voile : la Course Croisière EDHEC.*/
/* */
/* Plus d'infos : http://voile.iseplive.fr/.</p>*/
/* */
/* <p>Date de création : Mardi 28 Octobre 2008</p>*/
/* <p>Email : voile@isep.fr</p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
