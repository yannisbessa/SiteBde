<?php

/* BDESiteBundle:Bde/Public:AccueilSite.html.twig */
class __TwigTemplate_5785d8f73b269062e975059ce76506098094b8e4bd51a6d5ab275b89f021e7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "BDESiteBundle:Bde/Public:AccueilSite.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf5b5fa9d4235507080cb806392e4dd4189b7f8f1adf4b14654d49bf50ae323e = $this->env->getExtension("native_profiler");
        $__internal_cf5b5fa9d4235507080cb806392e4dd4189b7f8f1adf4b14654d49bf50ae323e->enter($__internal_cf5b5fa9d4235507080cb806392e4dd4189b7f8f1adf4b14654d49bf50ae323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde/Public:AccueilSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5b5fa9d4235507080cb806392e4dd4189b7f8f1adf4b14654d49bf50ae323e->leave($__internal_cf5b5fa9d4235507080cb806392e4dd4189b7f8f1adf4b14654d49bf50ae323e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b05e20aa71ef212e77c6766e02d8039a61bc98e41054a24a783ba94a2d1b974c = $this->env->getExtension("native_profiler");
        $__internal_b05e20aa71ef212e77c6766e02d8039a61bc98e41054a24a783ba94a2d1b974c->enter($__internal_b05e20aa71ef212e77c6766e02d8039a61bc98e41054a24a783ba94a2d1b974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_b05e20aa71ef212e77c6766e02d8039a61bc98e41054a24a783ba94a2d1b974c->leave($__internal_b05e20aa71ef212e77c6766e02d8039a61bc98e41054a24a783ba94a2d1b974c_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_5ef818f47f6e62429638d108f38624cf9882bde89c421cc3f8d895549279acb9 = $this->env->getExtension("native_profiler");
        $__internal_5ef818f47f6e62429638d108f38624cf9882bde89c421cc3f8d895549279acb9->enter($__internal_5ef818f47f6e62429638d108f38624cf9882bde89c421cc3f8d895549279acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 7
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/40555.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 > Bureau des étudiants 7'tease </h1>

";
        
        $__internal_5ef818f47f6e62429638d108f38624cf9882bde89c421cc3f8d895549279acb9->leave($__internal_5ef818f47f6e62429638d108f38624cf9882bde89c421cc3f8d895549279acb9_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e7bf8ea4bfb664551f3f9f206f5aee52263a51dab1980a5ca7edf199a9126a = $this->env->getExtension("native_profiler");
        $__internal_41e7bf8ea4bfb664551f3f9f206f5aee52263a51dab1980a5ca7edf199a9126a->enter($__internal_41e7bf8ea4bfb664551f3f9f206f5aee52263a51dab1980a5ca7edf199a9126a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_41e7bf8ea4bfb664551f3f9f206f5aee52263a51dab1980a5ca7edf199a9126a->leave($__internal_41e7bf8ea4bfb664551f3f9f206f5aee52263a51dab1980a5ca7edf199a9126a_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde/Public:AccueilSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  55 => 7,  49 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* {% extends "BDESiteBundle::Layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} Accueil {% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/40555.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 > Bureau des étudiants 7'tease </h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>*/
/* */
/* */
/* <p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. */
/* */
/* Pour les isepiens ce site est une plateforme de communication intra-isep. */
/* */
/* Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>*/
/* */
/* */
/* {% endblock %}*/
