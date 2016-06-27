<?php

/* BDESiteBundle:Bde:CalSite.html.twig */
class __TwigTemplate_a7f144f2c8f0319b1e8a887db2900bc7e7a1c112672981877f43b7480b0f8594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:CalSite.html.twig", 3);
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
        $__internal_99e6b166f86c96e0d38527f5d9ff524fdd6f922f5f89b0db8e541315cbc32c59 = $this->env->getExtension("native_profiler");
        $__internal_99e6b166f86c96e0d38527f5d9ff524fdd6f922f5f89b0db8e541315cbc32c59->enter($__internal_99e6b166f86c96e0d38527f5d9ff524fdd6f922f5f89b0db8e541315cbc32c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:CalSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e6b166f86c96e0d38527f5d9ff524fdd6f922f5f89b0db8e541315cbc32c59->leave($__internal_99e6b166f86c96e0d38527f5d9ff524fdd6f922f5f89b0db8e541315cbc32c59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_801e34c3326aba43e7ba1ffa6b59c39e1cca3c1d6ed8761e8277cee93a692b77 = $this->env->getExtension("native_profiler");
        $__internal_801e34c3326aba43e7ba1ffa6b59c39e1cca3c1d6ed8761e8277cee93a692b77->enter($__internal_801e34c3326aba43e7ba1ffa6b59c39e1cca3c1d6ed8761e8277cee93a692b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Calendrier";
        
        $__internal_801e34c3326aba43e7ba1ffa6b59c39e1cca3c1d6ed8761e8277cee93a692b77->leave($__internal_801e34c3326aba43e7ba1ffa6b59c39e1cca3c1d6ed8761e8277cee93a692b77_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_f93961d73d76bd735825685eeaa07629b4e5699fa34d67e6f9d2b929a9500a20 = $this->env->getExtension("native_profiler");
        $__internal_f93961d73d76bd735825685eeaa07629b4e5699fa34d67e6f9d2b929a9500a20->enter($__internal_f93961d73d76bd735825685eeaa07629b4e5699fa34d67e6f9d2b929a9500a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_f93961d73d76bd735825685eeaa07629b4e5699fa34d67e6f9d2b929a9500a20->leave($__internal_f93961d73d76bd735825685eeaa07629b4e5699fa34d67e6f9d2b929a9500a20_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_1310bf576724eb69146975b4c3097b8d1bc0ebac15e17311eba3c9efee72c141 = $this->env->getExtension("native_profiler");
        $__internal_1310bf576724eb69146975b4c3097b8d1bc0ebac15e17311eba3c9efee72c141->enter($__internal_1310bf576724eb69146975b4c3097b8d1bc0ebac15e17311eba3c9efee72c141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "BDESiteBundle:Bde:CalSite.html.twig", 17)->display($context);
        // line 18
        echo "
";
        
        $__internal_1310bf576724eb69146975b4c3097b8d1bc0ebac15e17311eba3c9efee72c141->leave($__internal_1310bf576724eb69146975b4c3097b8d1bc0ebac15e17311eba3c9efee72c141_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:CalSite.html.twig";
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
