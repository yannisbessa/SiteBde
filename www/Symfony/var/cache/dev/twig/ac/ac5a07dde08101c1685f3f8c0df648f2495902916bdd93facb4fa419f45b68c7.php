<?php

/* BDESiteBundle:Bde:ISEPVOILE.html.twig */
class __TwigTemplate_f76af452c881da5641ce24c0bf224b5267ec4a06968a74fed2fc00cab265d430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPVOILE.html.twig", 5);
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
        $__internal_7b7482b9ed4166fb02a1767ebc4f9cb1b4b67c5165ff8640a8b68759a8817344 = $this->env->getExtension("native_profiler");
        $__internal_7b7482b9ed4166fb02a1767ebc4f9cb1b4b67c5165ff8640a8b68759a8817344->enter($__internal_7b7482b9ed4166fb02a1767ebc4f9cb1b4b67c5165ff8640a8b68759a8817344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPVOILE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7482b9ed4166fb02a1767ebc4f9cb1b4b67c5165ff8640a8b68759a8817344->leave($__internal_7b7482b9ed4166fb02a1767ebc4f9cb1b4b67c5165ff8640a8b68759a8817344_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d5828c925c32589f5e563a92c3affc1bf036ba59cc014046056ef15078684c0 = $this->env->getExtension("native_profiler");
        $__internal_5d5828c925c32589f5e563a92c3affc1bf036ba59cc014046056ef15078684c0->enter($__internal_5d5828c925c32589f5e563a92c3affc1bf036ba59cc014046056ef15078684c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "ISEP VOILE ";
        
        $__internal_5d5828c925c32589f5e563a92c3affc1bf036ba59cc014046056ef15078684c0->leave($__internal_5d5828c925c32589f5e563a92c3affc1bf036ba59cc014046056ef15078684c0_prof);

    }

    // line 9
    public function block_img($context, array $blocks = array())
    {
        $__internal_893ba328a39a98690621fc499f72e5f3404ec8be194825199f04c5639334ab59 = $this->env->getExtension("native_profiler");
        $__internal_893ba328a39a98690621fc499f72e5f3404ec8be194825199f04c5639334ab59->enter($__internal_893ba328a39a98690621fc499f72e5f3404ec8be194825199f04c5639334ab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_893ba328a39a98690621fc499f72e5f3404ec8be194825199f04c5639334ab59->leave($__internal_893ba328a39a98690621fc499f72e5f3404ec8be194825199f04c5639334ab59_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_e991ebaaff35c977d9c618e72db1578f28b1131aa0cb6ced8a3e8dd053f4030e = $this->env->getExtension("native_profiler");
        $__internal_e991ebaaff35c977d9c618e72db1578f28b1131aa0cb6ced8a3e8dd053f4030e->enter($__internal_e991ebaaff35c977d9c618e72db1578f28b1131aa0cb6ced8a3e8dd053f4030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<p>ISEP VOILE</p>


<p>La voile est souvent considérée comme un sport extrême réservé à une minorité. Nous souhaitons changer cette image et faire de ISEP Voile une association dynamique et animée par la volonté de faire découvrir la voile et ses émotions au plus grand nombre d’étudiants.

Tous ainsi unis autour d’une même passion, d’un goût pour l’air marin et les sensations fortes, nous prévoyons de participer à plusieurs week-ends d’entraînements, et ainsi hisser fièrement nos couleurs lors de l’événement incontournable du milieu de la voile : la Course Croisière EDHEC.

Plus d'infos : http://voile.iseplive.fr/.</p>

<p>Date de création : Mardi 28 Octobre 2008</p>
<p>Email : voile@isep.fr</p>

";
        
        $__internal_e991ebaaff35c977d9c618e72db1578f28b1131aa0cb6ced8a3e8dd053f4030e->leave($__internal_e991ebaaff35c977d9c618e72db1578f28b1131aa0cb6ced8a3e8dd053f4030e_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPVOILE.html.twig";
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
