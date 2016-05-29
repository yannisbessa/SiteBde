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
        $__internal_2d23a39c1c9ae3d9b97f2259c08052b7e25f548dcfb04679343d746919efd08c = $this->env->getExtension("native_profiler");
        $__internal_2d23a39c1c9ae3d9b97f2259c08052b7e25f548dcfb04679343d746919efd08c->enter($__internal_2d23a39c1c9ae3d9b97f2259c08052b7e25f548dcfb04679343d746919efd08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPLIVE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d23a39c1c9ae3d9b97f2259c08052b7e25f548dcfb04679343d746919efd08c->leave($__internal_2d23a39c1c9ae3d9b97f2259c08052b7e25f548dcfb04679343d746919efd08c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4b7a881c9c46ad935c6c02788057d99acb20fad66a49cfa6ed98c802ebbe74f = $this->env->getExtension("native_profiler");
        $__internal_e4b7a881c9c46ad935c6c02788057d99acb20fad66a49cfa6ed98c802ebbe74f->enter($__internal_e4b7a881c9c46ad935c6c02788057d99acb20fad66a49cfa6ed98c802ebbe74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPLIVE ";
        
        $__internal_e4b7a881c9c46ad935c6c02788057d99acb20fad66a49cfa6ed98c802ebbe74f->leave($__internal_e4b7a881c9c46ad935c6c02788057d99acb20fad66a49cfa6ed98c802ebbe74f_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_4778acab68be624ef384bfd245e2c7e54bb07af7f3e35ea5d3f96da4f7895e1f = $this->env->getExtension("native_profiler");
        $__internal_4778acab68be624ef384bfd245e2c7e54bb07af7f3e35ea5d3f96da4f7895e1f->enter($__internal_4778acab68be624ef384bfd245e2c7e54bb07af7f3e35ea5d3f96da4f7895e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_4778acab68be624ef384bfd245e2c7e54bb07af7f3e35ea5d3f96da4f7895e1f->leave($__internal_4778acab68be624ef384bfd245e2c7e54bb07af7f3e35ea5d3f96da4f7895e1f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ced87f749b397d06241feccb56610687cabb44e476abfea31f5498c884fbf77 = $this->env->getExtension("native_profiler");
        $__internal_5ced87f749b397d06241feccb56610687cabb44e476abfea31f5498c884fbf77->enter($__internal_5ced87f749b397d06241feccb56610687cabb44e476abfea31f5498c884fbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>ISEPLIVE</p>


<p>ISEPLive est responsable de tous les vecteurs de communication inter-élèves de l'ISEP : affiches, sites web des associations, journal de l'école, podcast, reportages photos, vidéos...</p>

<p>ISEPLive a pour mission de fournir aux isépiens un flux continu d'informations sur la vie de l'école, et d'apporter une couverture médiatique à tous les évenements : soirées, WEI, sport...</p>

<p>www.iseplive.fr</p>

<p>Date de création : Jeudi 1er Juin 2006</p>
<p>Email : iseplive@isep.fr</p>

";
        
        $__internal_5ced87f749b397d06241feccb56610687cabb44e476abfea31f5498c884fbf77->leave($__internal_5ced87f749b397d06241feccb56610687cabb44e476abfea31f5498c884fbf77_prof);

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
