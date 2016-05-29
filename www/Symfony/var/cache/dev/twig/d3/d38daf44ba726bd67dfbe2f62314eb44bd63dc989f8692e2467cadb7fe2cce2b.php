<?php

/* BDEBackSiteBundle:Bbde:Baccueil.html.twig */
class __TwigTemplate_c91408f9a50daba74413d2049144035ff38834f4bc4d43f03f0fb1728a262451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDEBackSiteBundle:Bbde:Baccueil.html.twig", 4);
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
        $__internal_a6eb8a061ee1eb3d312d19567f5e12cdcde774e0c782e730e26ec0e8cc5c35d8 = $this->env->getExtension("native_profiler");
        $__internal_a6eb8a061ee1eb3d312d19567f5e12cdcde774e0c782e730e26ec0e8cc5c35d8->enter($__internal_a6eb8a061ee1eb3d312d19567f5e12cdcde774e0c782e730e26ec0e8cc5c35d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEBackSiteBundle:Bbde:Baccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6eb8a061ee1eb3d312d19567f5e12cdcde774e0c782e730e26ec0e8cc5c35d8->leave($__internal_a6eb8a061ee1eb3d312d19567f5e12cdcde774e0c782e730e26ec0e8cc5c35d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b3f63373b47f966b88012096b5b5b89af1af15a4b08aa0484792dd8697d69d0 = $this->env->getExtension("native_profiler");
        $__internal_4b3f63373b47f966b88012096b5b5b89af1af15a4b08aa0484792dd8697d69d0->enter($__internal_4b3f63373b47f966b88012096b5b5b89af1af15a4b08aa0484792dd8697d69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " Back office
";
        
        $__internal_4b3f63373b47f966b88012096b5b5b89af1af15a4b08aa0484792dd8697d69d0->leave($__internal_4b3f63373b47f966b88012096b5b5b89af1af15a4b08aa0484792dd8697d69d0_prof);

    }

    // line 10
    public function block_img($context, array $blocks = array())
    {
        $__internal_50f4016c3547835d34bc9d60598f7b09adb301bf6281886d5ba4dc03f6010664 = $this->env->getExtension("native_profiler");
        $__internal_50f4016c3547835d34bc9d60598f7b09adb301bf6281886d5ba4dc03f6010664->enter($__internal_50f4016c3547835d34bc9d60598f7b09adb301bf6281886d5ba4dc03f6010664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 11
        echo "    <header class=\"intro-header\" style=\"size: 10px !important;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:#428bca\";>Back-office</h1>
\"<style type=\"text/css\"> 
.navbar-custom .nav li a {
    color: #428bca !important;
    padding: 20px;
}
@media only screen and (min-width: 768px) {
  .intro-header .site-heading,
  .intro-header .post-heading,
  .intro-header .page-heading {
    padding: 100px 0 !important;
  }
p{
    color: #428bca !important;
    padding: 20px;
}

</style>

";
        
        $__internal_50f4016c3547835d34bc9d60598f7b09adb301bf6281886d5ba4dc03f6010664->leave($__internal_50f4016c3547835d34bc9d60598f7b09adb301bf6281886d5ba4dc03f6010664_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_3903bd25534b066bb807387047083bd5820fdd98ece8e5c8d4ff7c3839132085 = $this->env->getExtension("native_profiler");
        $__internal_3903bd25534b066bb807387047083bd5820fdd98ece8e5c8d4ff7c3839132085->enter($__internal_3903bd25534b066bb807387047083bd5820fdd98ece8e5c8d4ff7c3839132085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "  <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>



";
        
        $__internal_3903bd25534b066bb807387047083bd5820fdd98ece8e5c8d4ff7c3839132085->leave($__internal_3903bd25534b066bb807387047083bd5820fdd98ece8e5c8d4ff7c3839132085_prof);

    }

    public function getTemplateName()
    {
        return "BDEBackSiteBundle:Bbde:Baccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  87 => 36,  56 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 4,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*  Back office*/
/* {% endblock %}*/
/* */
/* */
/* {% block img %}*/
/*     <header class="intro-header" style="size: 10px !important;">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:#428bca";>Back-office</h1>*/
/* "<style type="text/css"> */
/* .navbar-custom .nav li a {*/
/*     color: #428bca !important;*/
/*     padding: 20px;*/
/* }*/
/* @media only screen and (min-width: 768px) {*/
/*   .intro-header .site-heading,*/
/*   .intro-header .post-heading,*/
/*   .intro-header .page-heading {*/
/*     padding: 100px 0 !important;*/
/*   }*/
/* p{*/
/*     color: #428bca !important;*/
/*     padding: 20px;*/
/* }*/
/* */
/* </style>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/*   <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>*/
/* */
/* */
/* */
/* {% endblock %}*/
