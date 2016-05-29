<?php

/* @BDESite/Bde/AccueilSite.html.twig */
class __TwigTemplate_f9ef231331a5fa75c4dbadb5de2d6b6753c692eebf2488c9468fe6f4e1a71a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "@BDESite/Bde/AccueilSite.html.twig", 3);
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
        $__internal_c01b2ba77547572abcbb9ce3d5be1a16d76855421c5298260f6d4ba0380fb44d = $this->env->getExtension("native_profiler");
        $__internal_c01b2ba77547572abcbb9ce3d5be1a16d76855421c5298260f6d4ba0380fb44d->enter($__internal_c01b2ba77547572abcbb9ce3d5be1a16d76855421c5298260f6d4ba0380fb44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/AccueilSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01b2ba77547572abcbb9ce3d5be1a16d76855421c5298260f6d4ba0380fb44d->leave($__internal_c01b2ba77547572abcbb9ce3d5be1a16d76855421c5298260f6d4ba0380fb44d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc2f658c7ad6ef501d67272f94b08c589e7ee94e6d91aa6edb7f5b2bbf20f3f3 = $this->env->getExtension("native_profiler");
        $__internal_dc2f658c7ad6ef501d67272f94b08c589e7ee94e6d91aa6edb7f5b2bbf20f3f3->enter($__internal_dc2f658c7ad6ef501d67272f94b08c589e7ee94e6d91aa6edb7f5b2bbf20f3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_dc2f658c7ad6ef501d67272f94b08c589e7ee94e6d91aa6edb7f5b2bbf20f3f3->leave($__internal_dc2f658c7ad6ef501d67272f94b08c589e7ee94e6d91aa6edb7f5b2bbf20f3f3_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_34fc0f268e97da3055978a74372ef2dc1f3feb8caea6504a18a6a425e8c97c14 = $this->env->getExtension("native_profiler");
        $__internal_34fc0f268e97da3055978a74372ef2dc1f3feb8caea6504a18a6a425e8c97c14->enter($__internal_34fc0f268e97da3055978a74372ef2dc1f3feb8caea6504a18a6a425e8c97c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 7
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/40555.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1>Bureau des étudiants 7'tease </h1>

";
        
        $__internal_34fc0f268e97da3055978a74372ef2dc1f3feb8caea6504a18a6a425e8c97c14->leave($__internal_34fc0f268e97da3055978a74372ef2dc1f3feb8caea6504a18a6a425e8c97c14_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7070fdbafcc6f87f44a2fded569914d3d3bdf00e9dae6fb53db49d75575e7f56 = $this->env->getExtension("native_profiler");
        $__internal_7070fdbafcc6f87f44a2fded569914d3d3bdf00e9dae6fb53db49d75575e7f56->enter($__internal_7070fdbafcc6f87f44a2fded569914d3d3bdf00e9dae6fb53db49d75575e7f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>

";
        
        $__internal_7070fdbafcc6f87f44a2fded569914d3d3bdf00e9dae6fb53db49d75575e7f56->leave($__internal_7070fdbafcc6f87f44a2fded569914d3d3bdf00e9dae6fb53db49d75575e7f56_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/AccueilSite.html.twig";
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
/*                         <h1>Bureau des étudiants 7'tease </h1>*/
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
/* {% endblock %}*/
/* */
