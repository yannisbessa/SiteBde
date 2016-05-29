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
        $__internal_7134f5ef74f0ca50ad942388d11c3e4e32c520b4afc95a0126eafbd26b9b7218 = $this->env->getExtension("native_profiler");
        $__internal_7134f5ef74f0ca50ad942388d11c3e4e32c520b4afc95a0126eafbd26b9b7218->enter($__internal_7134f5ef74f0ca50ad942388d11c3e4e32c520b4afc95a0126eafbd26b9b7218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ELLYPSIS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7134f5ef74f0ca50ad942388d11c3e4e32c520b4afc95a0126eafbd26b9b7218->leave($__internal_7134f5ef74f0ca50ad942388d11c3e4e32c520b4afc95a0126eafbd26b9b7218_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed706827145061e0b5000d8bf66bb9129c518b78103d2abf46eacb649339c90 = $this->env->getExtension("native_profiler");
        $__internal_6ed706827145061e0b5000d8bf66bb9129c518b78103d2abf46eacb649339c90->enter($__internal_6ed706827145061e0b5000d8bf66bb9129c518b78103d2abf46eacb649339c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ELLYPSIS";
        
        $__internal_6ed706827145061e0b5000d8bf66bb9129c518b78103d2abf46eacb649339c90->leave($__internal_6ed706827145061e0b5000d8bf66bb9129c518b78103d2abf46eacb649339c90_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_ddbb8998109b7de68b85257dca3d64b4a3e85b2814b061dd61e437c5a019eef1 = $this->env->getExtension("native_profiler");
        $__internal_ddbb8998109b7de68b85257dca3d64b4a3e85b2814b061dd61e437c5a019eef1->enter($__internal_ddbb8998109b7de68b85257dca3d64b4a3e85b2814b061dd61e437c5a019eef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_ddbb8998109b7de68b85257dca3d64b4a3e85b2814b061dd61e437c5a019eef1->leave($__internal_ddbb8998109b7de68b85257dca3d64b4a3e85b2814b061dd61e437c5a019eef1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6956d2a8550999b0730601d8f1056d3e39e7431b6b61520e4fc39989ac5b72 = $this->env->getExtension("native_profiler");
        $__internal_fe6956d2a8550999b0730601d8f1056d3e39e7431b6b61520e4fc39989ac5b72->enter($__internal_fe6956d2a8550999b0730601d8f1056d3e39e7431b6b61520e4fc39989ac5b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe6956d2a8550999b0730601d8f1056d3e39e7431b6b61520e4fc39989ac5b72->leave($__internal_fe6956d2a8550999b0730601d8f1056d3e39e7431b6b61520e4fc39989ac5b72_prof);

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
