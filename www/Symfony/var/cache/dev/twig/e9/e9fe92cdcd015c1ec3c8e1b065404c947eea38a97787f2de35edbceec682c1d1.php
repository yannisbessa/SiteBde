<?php

/* @BDESite/Bde/ISEPTRANSAHARIENNE.html.twig */
class __TwigTemplate_69d3cd96f6fc16e2317baf99e5deee6766fc38e63149e982e356a3ee6dd9a33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPTRANSAHARIENNE.html.twig", 4);
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
        $__internal_eca83fd65b953fb789c889500a0bf7cf85419d66be584ef9ec1e9c2cb0720d7a = $this->env->getExtension("native_profiler");
        $__internal_eca83fd65b953fb789c889500a0bf7cf85419d66be584ef9ec1e9c2cb0720d7a->enter($__internal_eca83fd65b953fb789c889500a0bf7cf85419d66be584ef9ec1e9c2cb0720d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPTRANSAHARIENNE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca83fd65b953fb789c889500a0bf7cf85419d66be584ef9ec1e9c2cb0720d7a->leave($__internal_eca83fd65b953fb789c889500a0bf7cf85419d66be584ef9ec1e9c2cb0720d7a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a25927a371dc4c0d9b95805daf1f64e62945f8842168474a410ffb11e9fba10 = $this->env->getExtension("native_profiler");
        $__internal_9a25927a371dc4c0d9b95805daf1f64e62945f8842168474a410ffb11e9fba10->enter($__internal_9a25927a371dc4c0d9b95805daf1f64e62945f8842168474a410ffb11e9fba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Transaharienne";
        
        $__internal_9a25927a371dc4c0d9b95805daf1f64e62945f8842168474a410ffb11e9fba10->leave($__internal_9a25927a371dc4c0d9b95805daf1f64e62945f8842168474a410ffb11e9fba10_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_a7c437280d30003eef0c2acb04518e2d465e8fa111afd7aaab98cda38438e503 = $this->env->getExtension("native_profiler");
        $__internal_a7c437280d30003eef0c2acb04518e2d465e8fa111afd7aaab98cda38438e503->enter($__internal_a7c437280d30003eef0c2acb04518e2d465e8fa111afd7aaab98cda38438e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPTRANSHARIENNE.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:orange\";>Transaharienne</h1>

";
        
        $__internal_a7c437280d30003eef0c2acb04518e2d465e8fa111afd7aaab98cda38438e503->leave($__internal_a7c437280d30003eef0c2acb04518e2d465e8fa111afd7aaab98cda38438e503_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c952ecadf1309865851ed82aa6c09eb2aa64739786df83e224e135ab072b94 = $this->env->getExtension("native_profiler");
        $__internal_b9c952ecadf1309865851ed82aa6c09eb2aa64739786df83e224e135ab072b94->enter($__internal_b9c952ecadf1309865851ed82aa6c09eb2aa64739786df83e224e135ab072b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Transahariennes</p>


<p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. 
Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. 
La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.
Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..
Un séjour dépaysant duquel vous reviendrez fascinés !</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Lundi 1er Mars 1999</p>
<p>Email : transaharienne@isep.fr</p>
";
        
        $__internal_b9c952ecadf1309865851ed82aa6c09eb2aa64739786df83e224e135ab072b94->leave($__internal_b9c952ecadf1309865851ed82aa6c09eb2aa64739786df83e224e135ab072b94_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPTRANSAHARIENNE.html.twig";
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
/* {% block title %}{{ parent() }} Transaharienne{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPTRANSHARIENNE.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:orange";>Transaharienne</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>Transahariennes</p>*/
/* */
/* */
/* <p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. */
/* Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. */
/* La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.*/
/* Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..*/
/* Un séjour dépaysant duquel vous reviendrez fascinés !</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Lundi 1er Mars 1999</p>*/
/* <p>Email : transaharienne@isep.fr</p>*/
/* {% endblock %}*/
/* */
/* */
