<?php

/* @BDESite/Bde/CalSite.html.twig */
class __TwigTemplate_b396d81c880dd204f2ecd970d6ead9c0369f172c30b2aef6d70aae4765c8a6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/CalSite.html.twig", 3);
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
        $__internal_71b138e1777a3991bd1ed63b26316d996e413f32b772fced57db6be552b43ec4 = $this->env->getExtension("native_profiler");
        $__internal_71b138e1777a3991bd1ed63b26316d996e413f32b772fced57db6be552b43ec4->enter($__internal_71b138e1777a3991bd1ed63b26316d996e413f32b772fced57db6be552b43ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/CalSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b138e1777a3991bd1ed63b26316d996e413f32b772fced57db6be552b43ec4->leave($__internal_71b138e1777a3991bd1ed63b26316d996e413f32b772fced57db6be552b43ec4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3847cb7b2138075a51fa4cc55ef019cf6008c014d74dd15a06885b06768d9690 = $this->env->getExtension("native_profiler");
        $__internal_3847cb7b2138075a51fa4cc55ef019cf6008c014d74dd15a06885b06768d9690->enter($__internal_3847cb7b2138075a51fa4cc55ef019cf6008c014d74dd15a06885b06768d9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Calendrier";
        
        $__internal_3847cb7b2138075a51fa4cc55ef019cf6008c014d74dd15a06885b06768d9690->leave($__internal_3847cb7b2138075a51fa4cc55ef019cf6008c014d74dd15a06885b06768d9690_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_6d55a95f482f9b4079c9b75a05ee61ffbc54bc6ec8fc0853ac86c7a6bb490e51 = $this->env->getExtension("native_profiler");
        $__internal_6d55a95f482f9b4079c9b75a05ee61ffbc54bc6ec8fc0853ac86c7a6bb490e51->enter($__internal_6d55a95f482f9b4079c9b75a05ee61ffbc54bc6ec8fc0853ac86c7a6bb490e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 7
        echo "  <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/asso.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>Calendrier associatif</h1>

";
        
        $__internal_6d55a95f482f9b4079c9b75a05ee61ffbc54bc6ec8fc0853ac86c7a6bb490e51->leave($__internal_6d55a95f482f9b4079c9b75a05ee61ffbc54bc6ec8fc0853ac86c7a6bb490e51_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e8abe2111fa6cf0c9c1f90193e90066a25f6cf8af22f823f96315f65c4020e7 = $this->env->getExtension("native_profiler");
        $__internal_3e8abe2111fa6cf0c9c1f90193e90066a25f6cf8af22f823f96315f65c4020e7->enter($__internal_3e8abe2111fa6cf0c9c1f90193e90066a25f6cf8af22f823f96315f65c4020e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "@BDESite/Bde/CalSite.html.twig", 17)->display($context);
        // line 18
        echo "
";
        
        $__internal_3e8abe2111fa6cf0c9c1f90193e90066a25f6cf8af22f823f96315f65c4020e7->leave($__internal_3e8abe2111fa6cf0c9c1f90193e90066a25f6cf8af22f823f96315f65c4020e7_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/CalSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  77 => 17,  71 => 16,  55 => 7,  49 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}Calendrier{% endblock %}*/
/* {% block img %}*/
/*   <header class="intro-header" style="background-image: url({{asset ('img/asso.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:white";>Calendrier associatif</h1>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% include 'ADesignsCalendarBundle::calendar.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
