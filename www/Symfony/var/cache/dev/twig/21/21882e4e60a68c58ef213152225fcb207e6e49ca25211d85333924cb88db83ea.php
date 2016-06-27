<?php

/* BDESiteBundle:Bde:ISEPLIVE.html.twig */
class __TwigTemplate_8d413b6ce31596db0e2aacd50b28b46dc9b3062d182d20cf38a31fda423f43ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPLIVE.html.twig", 4);
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
        $__internal_23a52425edf7223c6d9f4acdbce8a3a77884e4f36958d19a7d2eda1aea8bed14 = $this->env->getExtension("native_profiler");
        $__internal_23a52425edf7223c6d9f4acdbce8a3a77884e4f36958d19a7d2eda1aea8bed14->enter($__internal_23a52425edf7223c6d9f4acdbce8a3a77884e4f36958d19a7d2eda1aea8bed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPLIVE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a52425edf7223c6d9f4acdbce8a3a77884e4f36958d19a7d2eda1aea8bed14->leave($__internal_23a52425edf7223c6d9f4acdbce8a3a77884e4f36958d19a7d2eda1aea8bed14_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e42b7094e8ecbd41b857577e39af7c8ad6df9fa79b9eb30a83d3d739f8511d0 = $this->env->getExtension("native_profiler");
        $__internal_3e42b7094e8ecbd41b857577e39af7c8ad6df9fa79b9eb30a83d3d739f8511d0->enter($__internal_3e42b7094e8ecbd41b857577e39af7c8ad6df9fa79b9eb30a83d3d739f8511d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPLIVE ";
        
        $__internal_3e42b7094e8ecbd41b857577e39af7c8ad6df9fa79b9eb30a83d3d739f8511d0->leave($__internal_3e42b7094e8ecbd41b857577e39af7c8ad6df9fa79b9eb30a83d3d739f8511d0_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_29209577a30ffc27e66ed720a3b09458f528ab7c3ae0f2d037b3bf6021ab8ffe = $this->env->getExtension("native_profiler");
        $__internal_29209577a30ffc27e66ed720a3b09458f528ab7c3ae0f2d037b3bf6021ab8ffe->enter($__internal_29209577a30ffc27e66ed720a3b09458f528ab7c3ae0f2d037b3bf6021ab8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPLIVE.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:yellow\";>Isep live</h1>

";
        
        $__internal_29209577a30ffc27e66ed720a3b09458f528ab7c3ae0f2d037b3bf6021ab8ffe->leave($__internal_29209577a30ffc27e66ed720a3b09458f528ab7c3ae0f2d037b3bf6021ab8ffe_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ab592d8d8e089e9ad0a5542aca703d88a0375d7979277b5ecf2f414664ecc03 = $this->env->getExtension("native_profiler");
        $__internal_6ab592d8d8e089e9ad0a5542aca703d88a0375d7979277b5ecf2f414664ecc03->enter($__internal_6ab592d8d8e089e9ad0a5542aca703d88a0375d7979277b5ecf2f414664ecc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>ISEPLIVE</p>


<p>ISEPLive est responsable de tous les vecteurs de communication inter-élèves de l'ISEP : affiches, sites web des associations, journal de l'école, podcast, reportages photos, vidéos...</p>

<p>ISEPLive a pour mission de fournir aux isépiens un flux continu d'informations sur la vie de l'école, et d'apporter une couverture médiatique à tous les évenements : soirées, WEI, sport...</p>

<p>www.iseplive.fr</p>

<p>Date de création : Jeudi 1er Juin 2006</p>
<p>Email : iseplive@isep.fr</p>

";
        
        $__internal_6ab592d8d8e089e9ad0a5542aca703d88a0375d7979277b5ecf2f414664ecc03->leave($__internal_6ab592d8d8e089e9ad0a5542aca703d88a0375d7979277b5ecf2f414664ecc03_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPLIVE.html.twig";
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
/* {% block title %}{{ parent() }} ISEPLIVE {% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPLIVE.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:yellow";>Isep live</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEPLIVE</p>*/
/* */
/* */
/* <p>ISEPLive est responsable de tous les vecteurs de communication inter-élèves de l'ISEP : affiches, sites web des associations, journal de l'école, podcast, reportages photos, vidéos...</p>*/
/* */
/* <p>ISEPLive a pour mission de fournir aux isépiens un flux continu d'informations sur la vie de l'école, et d'apporter une couverture médiatique à tous les évenements : soirées, WEI, sport...</p>*/
/* */
/* <p>www.iseplive.fr</p>*/
/* */
/* <p>Date de création : Jeudi 1er Juin 2006</p>*/
/* <p>Email : iseplive@isep.fr</p>*/
/* */
/* {% endblock %}*/
