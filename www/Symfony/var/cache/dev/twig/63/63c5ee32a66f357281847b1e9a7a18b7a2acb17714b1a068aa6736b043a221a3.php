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
        $__internal_8a2d09d6d74237ab7204e955d62146fdaf5dbb70fa2c853cd62ceb12f462b144 = $this->env->getExtension("native_profiler");
        $__internal_8a2d09d6d74237ab7204e955d62146fdaf5dbb70fa2c853cd62ceb12f462b144->enter($__internal_8a2d09d6d74237ab7204e955d62146fdaf5dbb70fa2c853cd62ceb12f462b144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPVOILE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2d09d6d74237ab7204e955d62146fdaf5dbb70fa2c853cd62ceb12f462b144->leave($__internal_8a2d09d6d74237ab7204e955d62146fdaf5dbb70fa2c853cd62ceb12f462b144_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4b83dc9518a6367e0401e0f1f7e5cc3045e29f40e69b6cabae23c12d0ee441 = $this->env->getExtension("native_profiler");
        $__internal_df4b83dc9518a6367e0401e0f1f7e5cc3045e29f40e69b6cabae23c12d0ee441->enter($__internal_df4b83dc9518a6367e0401e0f1f7e5cc3045e29f40e69b6cabae23c12d0ee441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "ISEP VOILE ";
        
        $__internal_df4b83dc9518a6367e0401e0f1f7e5cc3045e29f40e69b6cabae23c12d0ee441->leave($__internal_df4b83dc9518a6367e0401e0f1f7e5cc3045e29f40e69b6cabae23c12d0ee441_prof);

    }

    // line 9
    public function block_img($context, array $blocks = array())
    {
        $__internal_ed5b884506de4fc6fadafc80b03fded56964e803f68f1892f3a8a37ee10faf4c = $this->env->getExtension("native_profiler");
        $__internal_ed5b884506de4fc6fadafc80b03fded56964e803f68f1892f3a8a37ee10faf4c->enter($__internal_ed5b884506de4fc6fadafc80b03fded56964e803f68f1892f3a8a37ee10faf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_ed5b884506de4fc6fadafc80b03fded56964e803f68f1892f3a8a37ee10faf4c->leave($__internal_ed5b884506de4fc6fadafc80b03fded56964e803f68f1892f3a8a37ee10faf4c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_87419d0bec6ed71a0a2521541afbf56fc0a215c5d8c3f6d719170ccb73cb6333 = $this->env->getExtension("native_profiler");
        $__internal_87419d0bec6ed71a0a2521541afbf56fc0a215c5d8c3f6d719170ccb73cb6333->enter($__internal_87419d0bec6ed71a0a2521541afbf56fc0a215c5d8c3f6d719170ccb73cb6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<p>ISEP VOILE</p>


<p>La voile est souvent considérée comme un sport extrême réservé à une minorité. Nous souhaitons changer cette image et faire de ISEP Voile une association dynamique et animée par la volonté de faire découvrir la voile et ses émotions au plus grand nombre d’étudiants.

Tous ainsi unis autour d’une même passion, d’un goût pour l’air marin et les sensations fortes, nous prévoyons de participer à plusieurs week-ends d’entraînements, et ainsi hisser fièrement nos couleurs lors de l’événement incontournable du milieu de la voile : la Course Croisière EDHEC.

Plus d'infos : http://voile.iseplive.fr/.</p>

<p>Date de création : Mardi 28 Octobre 2008</p>
<p>Email : voile@isep.fr</p>

";
        
        $__internal_87419d0bec6ed71a0a2521541afbf56fc0a215c5d8c3f6d719170ccb73cb6333->leave($__internal_87419d0bec6ed71a0a2521541afbf56fc0a215c5d8c3f6d719170ccb73cb6333_prof);

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
