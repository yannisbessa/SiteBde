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
        $__internal_7d2eaa70324584bd29c39b7001e41b504e04d9359158fe5ba62ca114857881f1 = $this->env->getExtension("native_profiler");
        $__internal_7d2eaa70324584bd29c39b7001e41b504e04d9359158fe5ba62ca114857881f1->enter($__internal_7d2eaa70324584bd29c39b7001e41b504e04d9359158fe5ba62ca114857881f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/CalSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2eaa70324584bd29c39b7001e41b504e04d9359158fe5ba62ca114857881f1->leave($__internal_7d2eaa70324584bd29c39b7001e41b504e04d9359158fe5ba62ca114857881f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0359d68a83ceacbbc9d8e0b77aef20ddeaea777a6d4335e4a8b3fb0f3b0c315 = $this->env->getExtension("native_profiler");
        $__internal_a0359d68a83ceacbbc9d8e0b77aef20ddeaea777a6d4335e4a8b3fb0f3b0c315->enter($__internal_a0359d68a83ceacbbc9d8e0b77aef20ddeaea777a6d4335e4a8b3fb0f3b0c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Calendrier";
        
        $__internal_a0359d68a83ceacbbc9d8e0b77aef20ddeaea777a6d4335e4a8b3fb0f3b0c315->leave($__internal_a0359d68a83ceacbbc9d8e0b77aef20ddeaea777a6d4335e4a8b3fb0f3b0c315_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_adeef6f2eaccf6aca18c682bcc81ec4c489add3c7e905f4bd4682bfad3b940bb = $this->env->getExtension("native_profiler");
        $__internal_adeef6f2eaccf6aca18c682bcc81ec4c489add3c7e905f4bd4682bfad3b940bb->enter($__internal_adeef6f2eaccf6aca18c682bcc81ec4c489add3c7e905f4bd4682bfad3b940bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_adeef6f2eaccf6aca18c682bcc81ec4c489add3c7e905f4bd4682bfad3b940bb->leave($__internal_adeef6f2eaccf6aca18c682bcc81ec4c489add3c7e905f4bd4682bfad3b940bb_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d156355c5632befcccb538b0084d64448c5f3973e8e7098c664b54c5eb1cec71 = $this->env->getExtension("native_profiler");
        $__internal_d156355c5632befcccb538b0084d64448c5f3973e8e7098c664b54c5eb1cec71->enter($__internal_d156355c5632befcccb538b0084d64448c5f3973e8e7098c664b54c5eb1cec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "@BDESite/Bde/CalSite.html.twig", 17)->display($context);
        // line 18
        echo "
";
        
        $__internal_d156355c5632befcccb538b0084d64448c5f3973e8e7098c664b54c5eb1cec71->leave($__internal_d156355c5632befcccb538b0084d64448c5f3973e8e7098c664b54c5eb1cec71_prof);

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
