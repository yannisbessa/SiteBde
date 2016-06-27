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
        $__internal_e287bf72450a9ab69c99e4a79e61ef54512021c80c530164450e1e5c5d8f5d19 = $this->env->getExtension("native_profiler");
        $__internal_e287bf72450a9ab69c99e4a79e61ef54512021c80c530164450e1e5c5d8f5d19->enter($__internal_e287bf72450a9ab69c99e4a79e61ef54512021c80c530164450e1e5c5d8f5d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:AccueilSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e287bf72450a9ab69c99e4a79e61ef54512021c80c530164450e1e5c5d8f5d19->leave($__internal_e287bf72450a9ab69c99e4a79e61ef54512021c80c530164450e1e5c5d8f5d19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3efd1e261c64defecb9609ca447dee1e1939413812ab1bc28158079fbf2b9e3a = $this->env->getExtension("native_profiler");
        $__internal_3efd1e261c64defecb9609ca447dee1e1939413812ab1bc28158079fbf2b9e3a->enter($__internal_3efd1e261c64defecb9609ca447dee1e1939413812ab1bc28158079fbf2b9e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_3efd1e261c64defecb9609ca447dee1e1939413812ab1bc28158079fbf2b9e3a->leave($__internal_3efd1e261c64defecb9609ca447dee1e1939413812ab1bc28158079fbf2b9e3a_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_7f4bfe7f90aa68217930d3ef43ff9d116bf1413ea34528e435b28352f2e55f23 = $this->env->getExtension("native_profiler");
        $__internal_7f4bfe7f90aa68217930d3ef43ff9d116bf1413ea34528e435b28352f2e55f23->enter($__internal_7f4bfe7f90aa68217930d3ef43ff9d116bf1413ea34528e435b28352f2e55f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_7f4bfe7f90aa68217930d3ef43ff9d116bf1413ea34528e435b28352f2e55f23->leave($__internal_7f4bfe7f90aa68217930d3ef43ff9d116bf1413ea34528e435b28352f2e55f23_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8638a9a2a0e099d81e17d3d911663562ad6129e047a967615ca1db65e26ff5ca = $this->env->getExtension("native_profiler");
        $__internal_8638a9a2a0e099d81e17d3d911663562ad6129e047a967615ca1db65e26ff5ca->enter($__internal_8638a9a2a0e099d81e17d3d911663562ad6129e047a967615ca1db65e26ff5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_8638a9a2a0e099d81e17d3d911663562ad6129e047a967615ca1db65e26ff5ca->leave($__internal_8638a9a2a0e099d81e17d3d911663562ad6129e047a967615ca1db65e26ff5ca_prof);

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
