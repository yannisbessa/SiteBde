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
        $__internal_df36e33329ae1c1057c548292372d6847cfcc987f177c0886f6b468f1ac37114 = $this->env->getExtension("native_profiler");
        $__internal_df36e33329ae1c1057c548292372d6847cfcc987f177c0886f6b468f1ac37114->enter($__internal_df36e33329ae1c1057c548292372d6847cfcc987f177c0886f6b468f1ac37114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:CalSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df36e33329ae1c1057c548292372d6847cfcc987f177c0886f6b468f1ac37114->leave($__internal_df36e33329ae1c1057c548292372d6847cfcc987f177c0886f6b468f1ac37114_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_148f6a81b76e12fdf51b629c95b055830b9803320844a82802ec557780aa3189 = $this->env->getExtension("native_profiler");
        $__internal_148f6a81b76e12fdf51b629c95b055830b9803320844a82802ec557780aa3189->enter($__internal_148f6a81b76e12fdf51b629c95b055830b9803320844a82802ec557780aa3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Calendrier";
        
        $__internal_148f6a81b76e12fdf51b629c95b055830b9803320844a82802ec557780aa3189->leave($__internal_148f6a81b76e12fdf51b629c95b055830b9803320844a82802ec557780aa3189_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_f8d266ce33ecf98ed22d8612eeab8331e2b8a8373cd60606e8c77e109f33189f = $this->env->getExtension("native_profiler");
        $__internal_f8d266ce33ecf98ed22d8612eeab8331e2b8a8373cd60606e8c77e109f33189f->enter($__internal_f8d266ce33ecf98ed22d8612eeab8331e2b8a8373cd60606e8c77e109f33189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_f8d266ce33ecf98ed22d8612eeab8331e2b8a8373cd60606e8c77e109f33189f->leave($__internal_f8d266ce33ecf98ed22d8612eeab8331e2b8a8373cd60606e8c77e109f33189f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cbb75dbce4938c93a11e82b47450eef4d1ea63454ce8c21ad8e18565fd0aca7 = $this->env->getExtension("native_profiler");
        $__internal_4cbb75dbce4938c93a11e82b47450eef4d1ea63454ce8c21ad8e18565fd0aca7->enter($__internal_4cbb75dbce4938c93a11e82b47450eef4d1ea63454ce8c21ad8e18565fd0aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "BDESiteBundle:Bde:CalSite.html.twig", 17)->display($context);
        // line 18
        echo "
";
        
        $__internal_4cbb75dbce4938c93a11e82b47450eef4d1ea63454ce8c21ad8e18565fd0aca7->leave($__internal_4cbb75dbce4938c93a11e82b47450eef4d1ea63454ce8c21ad8e18565fd0aca7_prof);

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
