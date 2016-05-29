<?php

/* BDESiteBundle:Bde/Eleve:Discussion.html.twig */
class __TwigTemplate_37d215615e59f7dcff67e2b9e485a531516955dfa7bd75bd9a2cb4f530f3e9fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "BDESiteBundle:Bde/Eleve:Discussion.html.twig", 3);
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
        $__internal_af38706268497fddad31fc0de274a352521c333ca889ed005fa28e2712bb6c5c = $this->env->getExtension("native_profiler");
        $__internal_af38706268497fddad31fc0de274a352521c333ca889ed005fa28e2712bb6c5c->enter($__internal_af38706268497fddad31fc0de274a352521c333ca889ed005fa28e2712bb6c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde/Eleve:Discussion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af38706268497fddad31fc0de274a352521c333ca889ed005fa28e2712bb6c5c->leave($__internal_af38706268497fddad31fc0de274a352521c333ca889ed005fa28e2712bb6c5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0cd9b2cd7c7a5551c20d7b4a8f848546064d9dbdcbae96244ff85bc78c9acfb = $this->env->getExtension("native_profiler");
        $__internal_c0cd9b2cd7c7a5551c20d7b4a8f848546064d9dbdcbae96244ff85bc78c9acfb->enter($__internal_c0cd9b2cd7c7a5551c20d7b4a8f848546064d9dbdcbae96244ff85bc78c9acfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_c0cd9b2cd7c7a5551c20d7b4a8f848546064d9dbdcbae96244ff85bc78c9acfb->leave($__internal_c0cd9b2cd7c7a5551c20d7b4a8f848546064d9dbdcbae96244ff85bc78c9acfb_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_fab48a8b64580c3b6e8ce06d17cc960ccbbc6f7fe0528fd5dbeb902de85510ac = $this->env->getExtension("native_profiler");
        $__internal_fab48a8b64580c3b6e8ce06d17cc960ccbbc6f7fe0528fd5dbeb902de85510ac->enter($__internal_fab48a8b64580c3b6e8ce06d17cc960ccbbc6f7fe0528fd5dbeb902de85510ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_fab48a8b64580c3b6e8ce06d17cc960ccbbc6f7fe0528fd5dbeb902de85510ac->leave($__internal_fab48a8b64580c3b6e8ce06d17cc960ccbbc6f7fe0528fd5dbeb902de85510ac_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_40ff5754918ca99f67d8cad369cc6dec498cbbf55d8a6639d71aaba69fb89f56 = $this->env->getExtension("native_profiler");
        $__internal_40ff5754918ca99f67d8cad369cc6dec498cbbf55d8a6639d71aaba69fb89f56->enter($__internal_40ff5754918ca99f67d8cad369cc6dec498cbbf55d8a6639d71aaba69fb89f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_40ff5754918ca99f67d8cad369cc6dec498cbbf55d8a6639d71aaba69fb89f56->leave($__internal_40ff5754918ca99f67d8cad369cc6dec498cbbf55d8a6639d71aaba69fb89f56_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde/Eleve:Discussion.html.twig";
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
