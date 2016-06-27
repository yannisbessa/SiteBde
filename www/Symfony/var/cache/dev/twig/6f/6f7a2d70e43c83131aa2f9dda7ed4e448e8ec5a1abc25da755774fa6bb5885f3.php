<?php

/* @BDESite/Bde/ELLYPSIS.html.twig */
class __TwigTemplate_1c7a62fe22a05a02782c9a41fb6c1b827140060bdc876113d5b15d1c6d33c699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ELLYPSIS.html.twig", 4);
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
        $__internal_dc0d0c5aa305b7cee18582362c675220e04a618207e190cb0af705173c0f1578 = $this->env->getExtension("native_profiler");
        $__internal_dc0d0c5aa305b7cee18582362c675220e04a618207e190cb0af705173c0f1578->enter($__internal_dc0d0c5aa305b7cee18582362c675220e04a618207e190cb0af705173c0f1578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ELLYPSIS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0d0c5aa305b7cee18582362c675220e04a618207e190cb0af705173c0f1578->leave($__internal_dc0d0c5aa305b7cee18582362c675220e04a618207e190cb0af705173c0f1578_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1962a7c0d51a25e103acbfc50601ba70425ff642c846f5172ce965356ea20f90 = $this->env->getExtension("native_profiler");
        $__internal_1962a7c0d51a25e103acbfc50601ba70425ff642c846f5172ce965356ea20f90->enter($__internal_1962a7c0d51a25e103acbfc50601ba70425ff642c846f5172ce965356ea20f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ELLYPSIS";
        
        $__internal_1962a7c0d51a25e103acbfc50601ba70425ff642c846f5172ce965356ea20f90->leave($__internal_1962a7c0d51a25e103acbfc50601ba70425ff642c846f5172ce965356ea20f90_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_99efd4cdc031a9984f65d48dbf100e27e89bc4fb98a4de27b3659b76e8f1d40d = $this->env->getExtension("native_profiler");
        $__internal_99efd4cdc031a9984f65d48dbf100e27e89bc4fb98a4de27b3659b76e8f1d40d->enter($__internal_99efd4cdc031a9984f65d48dbf100e27e89bc4fb98a4de27b3659b76e8f1d40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ELLYPSIS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>Ellypsis</h1>

";
        
        $__internal_99efd4cdc031a9984f65d48dbf100e27e89bc4fb98a4de27b3659b76e8f1d40d->leave($__internal_99efd4cdc031a9984f65d48dbf100e27e89bc4fb98a4de27b3659b76e8f1d40d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_38e0286df41bae2474fa15065303a6738407ec5491dbe5bb036308d49da8ca1d = $this->env->getExtension("native_profiler");
        $__internal_38e0286df41bae2474fa15065303a6738407ec5491dbe5bb036308d49da8ca1d->enter($__internal_38e0286df41bae2474fa15065303a6738407ec5491dbe5bb036308d49da8ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Ellypsis</p>


<p>Ellypsis est la Job-Service de l'ISEP !
Cette association permet aux isépiens d'arrondir leurs fins de mois en participant à des missions auprès de divers clients (AS Télécoms&Réseaux, AS Connect, OTSI, Métalogic...)</p>

<p>Les missions sont: 
- ponctuelles : Vous ne vous engagez que sur une mission de quelques heures.
- rémunérées : Chaque mission est bien sûr payée aux étudiants aux nombres d'heures travaillées. (et même bien payée !)
- conviviales : elles sont réalisées le plus souvent par une dizaine d'étudiants. Ainsi, celles-ci sont nettement plus agréables.

Ellypsis vous permet de compléter votre formation à l'ISEP en vous offrant la possibilité de comprendre le déploiement des réseaux en entreprise, d'apprendre à résoudre des problèmes réseau ou informatique, de découvrir le monde de l'entreprise... Aucune connaissance particulière n'est demandée, vous serez formés sur le terrain par un responsable Ellypsis ou directement par le client. </p>

<p>Ellypsis permet également de faire vivre ton école en aidant financièrement d'autres associations à réaliser leurs projets.

Ellypsis c'est toi !!

N'hésite pas à t'inscrire sur notre site !

www.ellypsis.fr</p>


<p>Date de création : Mardi 1er Juillet 2008</p>
<p>Email : ellypsis@isep.fr</p>
";
        
        $__internal_38e0286df41bae2474fa15065303a6738407ec5491dbe5bb036308d49da8ca1d->leave($__internal_38e0286df41bae2474fa15065303a6738407ec5491dbe5bb036308d49da8ca1d_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ELLYPSIS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 16,  55 => 8,  49 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ELLYPSIS{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ELLYPSIS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:white";>Ellypsis</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>Ellypsis</p>*/
/* */
/* */
/* <p>Ellypsis est la Job-Service de l'ISEP !*/
/* Cette association permet aux isépiens d'arrondir leurs fins de mois en participant à des missions auprès de divers clients (AS Télécoms&Réseaux, AS Connect, OTSI, Métalogic...)</p>*/
/* */
/* <p>Les missions sont: */
/* - ponctuelles : Vous ne vous engagez que sur une mission de quelques heures.*/
/* - rémunérées : Chaque mission est bien sûr payée aux étudiants aux nombres d'heures travaillées. (et même bien payée !)*/
/* - conviviales : elles sont réalisées le plus souvent par une dizaine d'étudiants. Ainsi, celles-ci sont nettement plus agréables.*/
/* */
/* Ellypsis vous permet de compléter votre formation à l'ISEP en vous offrant la possibilité de comprendre le déploiement des réseaux en entreprise, d'apprendre à résoudre des problèmes réseau ou informatique, de découvrir le monde de l'entreprise... Aucune connaissance particulière n'est demandée, vous serez formés sur le terrain par un responsable Ellypsis ou directement par le client. </p>*/
/* */
/* <p>Ellypsis permet également de faire vivre ton école en aidant financièrement d'autres associations à réaliser leurs projets.*/
/* */
/* Ellypsis c'est toi !!*/
/* */
/* N'hésite pas à t'inscrire sur notre site !*/
/* */
/* www.ellypsis.fr</p>*/
/* */
/* */
/* <p>Date de création : Mardi 1er Juillet 2008</p>*/
/* <p>Email : ellypsis@isep.fr</p>*/
/* {% endblock %}*/
