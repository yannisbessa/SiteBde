<?php

/* @BDESite/Bde/ISEPLIVE.html.twig */
class __TwigTemplate_d5895b04b5510a7b7dd5b72867e3ef11a124e843ddd56e52ba4708a362f746c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPLIVE.html.twig", 4);
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
        $__internal_97d52961a1c1bf57b8e5926d678a7f84cd90a63b1e08752774a098468644427d = $this->env->getExtension("native_profiler");
        $__internal_97d52961a1c1bf57b8e5926d678a7f84cd90a63b1e08752774a098468644427d->enter($__internal_97d52961a1c1bf57b8e5926d678a7f84cd90a63b1e08752774a098468644427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPLIVE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97d52961a1c1bf57b8e5926d678a7f84cd90a63b1e08752774a098468644427d->leave($__internal_97d52961a1c1bf57b8e5926d678a7f84cd90a63b1e08752774a098468644427d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5736aab57f3a2249c06680f512efd6ce4609ad6a9f558bc909da2a2f42d9825d = $this->env->getExtension("native_profiler");
        $__internal_5736aab57f3a2249c06680f512efd6ce4609ad6a9f558bc909da2a2f42d9825d->enter($__internal_5736aab57f3a2249c06680f512efd6ce4609ad6a9f558bc909da2a2f42d9825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPLIVE ";
        
        $__internal_5736aab57f3a2249c06680f512efd6ce4609ad6a9f558bc909da2a2f42d9825d->leave($__internal_5736aab57f3a2249c06680f512efd6ce4609ad6a9f558bc909da2a2f42d9825d_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_d96950c4786453c01ef6dba4f0b7e3b3f8e0a0ae85bbb1b8893f89a9cb777cd6 = $this->env->getExtension("native_profiler");
        $__internal_d96950c4786453c01ef6dba4f0b7e3b3f8e0a0ae85bbb1b8893f89a9cb777cd6->enter($__internal_d96950c4786453c01ef6dba4f0b7e3b3f8e0a0ae85bbb1b8893f89a9cb777cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_d96950c4786453c01ef6dba4f0b7e3b3f8e0a0ae85bbb1b8893f89a9cb777cd6->leave($__internal_d96950c4786453c01ef6dba4f0b7e3b3f8e0a0ae85bbb1b8893f89a9cb777cd6_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_724f1bef6c7151249a2f10b1bdcf41259025448c9217c3ed05104684b0da0ed4 = $this->env->getExtension("native_profiler");
        $__internal_724f1bef6c7151249a2f10b1bdcf41259025448c9217c3ed05104684b0da0ed4->enter($__internal_724f1bef6c7151249a2f10b1bdcf41259025448c9217c3ed05104684b0da0ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>ISEPLIVE</p>


<p>ISEPLive est responsable de tous les vecteurs de communication inter-élèves de l'ISEP : affiches, sites web des associations, journal de l'école, podcast, reportages photos, vidéos...</p>

<p>ISEPLive a pour mission de fournir aux isépiens un flux continu d'informations sur la vie de l'école, et d'apporter une couverture médiatique à tous les évenements : soirées, WEI, sport...</p>

<p>www.iseplive.fr</p>

<p>Date de création : Jeudi 1er Juin 2006</p>
<p>Email : iseplive@isep.fr</p>

";
        
        $__internal_724f1bef6c7151249a2f10b1bdcf41259025448c9217c3ed05104684b0da0ed4->leave($__internal_724f1bef6c7151249a2f10b1bdcf41259025448c9217c3ed05104684b0da0ed4_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPLIVE.html.twig";
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
