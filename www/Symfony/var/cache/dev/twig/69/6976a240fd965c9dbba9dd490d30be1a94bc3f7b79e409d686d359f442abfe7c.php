<?php

/* BDESiteBundle:Bde:AccueilSite.html.twig */
class __TwigTemplate_e5156b9ea981be10c7afcacb33f697e838190f4fdc9c47f05d927822f48170db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "BDESiteBundle:Bde:AccueilSite.html.twig", 3);
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
        $__internal_cd7d8fb3f7d2a9bce7bc136b220175fcb185f4f012d2e5cc9f326280b22b9edb = $this->env->getExtension("native_profiler");
        $__internal_cd7d8fb3f7d2a9bce7bc136b220175fcb185f4f012d2e5cc9f326280b22b9edb->enter($__internal_cd7d8fb3f7d2a9bce7bc136b220175fcb185f4f012d2e5cc9f326280b22b9edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:AccueilSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7d8fb3f7d2a9bce7bc136b220175fcb185f4f012d2e5cc9f326280b22b9edb->leave($__internal_cd7d8fb3f7d2a9bce7bc136b220175fcb185f4f012d2e5cc9f326280b22b9edb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e02880c5693b69c534a9172b72b7c8655b5c2481bff2c211a71bd35483d10191 = $this->env->getExtension("native_profiler");
        $__internal_e02880c5693b69c534a9172b72b7c8655b5c2481bff2c211a71bd35483d10191->enter($__internal_e02880c5693b69c534a9172b72b7c8655b5c2481bff2c211a71bd35483d10191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_e02880c5693b69c534a9172b72b7c8655b5c2481bff2c211a71bd35483d10191->leave($__internal_e02880c5693b69c534a9172b72b7c8655b5c2481bff2c211a71bd35483d10191_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_9c9c9ca50f80ed2d5441c485f2b875316ad4dd7085a252c08be3f832cec81607 = $this->env->getExtension("native_profiler");
        $__internal_9c9c9ca50f80ed2d5441c485f2b875316ad4dd7085a252c08be3f832cec81607->enter($__internal_9c9c9ca50f80ed2d5441c485f2b875316ad4dd7085a252c08be3f832cec81607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_9c9c9ca50f80ed2d5441c485f2b875316ad4dd7085a252c08be3f832cec81607->leave($__internal_9c9c9ca50f80ed2d5441c485f2b875316ad4dd7085a252c08be3f832cec81607_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_034a5e5722ba7e333146d08b6aba0106e954a66ba49b9fb1e3ec79abadb6a587 = $this->env->getExtension("native_profiler");
        $__internal_034a5e5722ba7e333146d08b6aba0106e954a66ba49b9fb1e3ec79abadb6a587->enter($__internal_034a5e5722ba7e333146d08b6aba0106e954a66ba49b9fb1e3ec79abadb6a587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_034a5e5722ba7e333146d08b6aba0106e954a66ba49b9fb1e3ec79abadb6a587->leave($__internal_034a5e5722ba7e333146d08b6aba0106e954a66ba49b9fb1e3ec79abadb6a587_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:AccueilSite.html.twig";
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
