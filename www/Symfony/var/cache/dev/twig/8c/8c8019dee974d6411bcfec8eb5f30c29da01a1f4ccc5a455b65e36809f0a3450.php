<?php

/* BDESiteBundle:Bde:ELLYPSIS.html.twig */
class __TwigTemplate_60a579620993e385c65291f5ef611262a2b0bb4c9c20778f2d841d15ed0ad19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ELLYPSIS.html.twig", 4);
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
        $__internal_d7d315c925f3d0ae287335cab6cf379a81638f824c2b7ca707fa67412a989792 = $this->env->getExtension("native_profiler");
        $__internal_d7d315c925f3d0ae287335cab6cf379a81638f824c2b7ca707fa67412a989792->enter($__internal_d7d315c925f3d0ae287335cab6cf379a81638f824c2b7ca707fa67412a989792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ELLYPSIS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d315c925f3d0ae287335cab6cf379a81638f824c2b7ca707fa67412a989792->leave($__internal_d7d315c925f3d0ae287335cab6cf379a81638f824c2b7ca707fa67412a989792_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b5f3d24e25848ae39800d63feca6255936437578dc5985b090dec9f4a6d63c1 = $this->env->getExtension("native_profiler");
        $__internal_2b5f3d24e25848ae39800d63feca6255936437578dc5985b090dec9f4a6d63c1->enter($__internal_2b5f3d24e25848ae39800d63feca6255936437578dc5985b090dec9f4a6d63c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ELLYPSIS";
        
        $__internal_2b5f3d24e25848ae39800d63feca6255936437578dc5985b090dec9f4a6d63c1->leave($__internal_2b5f3d24e25848ae39800d63feca6255936437578dc5985b090dec9f4a6d63c1_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_7907aec2ebb111de832ddf1d24f7515aa9ea63c0e0136915695371e367ec16e8 = $this->env->getExtension("native_profiler");
        $__internal_7907aec2ebb111de832ddf1d24f7515aa9ea63c0e0136915695371e367ec16e8->enter($__internal_7907aec2ebb111de832ddf1d24f7515aa9ea63c0e0136915695371e367ec16e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_7907aec2ebb111de832ddf1d24f7515aa9ea63c0e0136915695371e367ec16e8->leave($__internal_7907aec2ebb111de832ddf1d24f7515aa9ea63c0e0136915695371e367ec16e8_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dff2ef3a1e0753916b5a87e259c2975d7baa366d9c12339254570f703ec3f94 = $this->env->getExtension("native_profiler");
        $__internal_0dff2ef3a1e0753916b5a87e259c2975d7baa366d9c12339254570f703ec3f94->enter($__internal_0dff2ef3a1e0753916b5a87e259c2975d7baa366d9c12339254570f703ec3f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dff2ef3a1e0753916b5a87e259c2975d7baa366d9c12339254570f703ec3f94->leave($__internal_0dff2ef3a1e0753916b5a87e259c2975d7baa366d9c12339254570f703ec3f94_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ELLYPSIS.html.twig";
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
