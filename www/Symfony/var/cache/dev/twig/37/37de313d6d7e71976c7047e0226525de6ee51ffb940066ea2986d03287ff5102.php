<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_09c2e932fdea71a393d4e3f190c045563a1368842ceb1f53182f24e7e164fc90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6912faa2b338860f7dcf747aa3339718a1b5da0fd043785d69156d61e44749eb = $this->env->getExtension("native_profiler");
        $__internal_6912faa2b338860f7dcf747aa3339718a1b5da0fd043785d69156d61e44749eb->enter($__internal_6912faa2b338860f7dcf747aa3339718a1b5da0fd043785d69156d61e44749eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6912faa2b338860f7dcf747aa3339718a1b5da0fd043785d69156d61e44749eb->leave($__internal_6912faa2b338860f7dcf747aa3339718a1b5da0fd043785d69156d61e44749eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83074f56d1893bbe309070661030477ccb352591959ece3f46ad8e67af5fa946 = $this->env->getExtension("native_profiler");
        $__internal_83074f56d1893bbe309070661030477ccb352591959ece3f46ad8e67af5fa946->enter($__internal_83074f56d1893bbe309070661030477ccb352591959ece3f46ad8e67af5fa946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_83074f56d1893bbe309070661030477ccb352591959ece3f46ad8e67af5fa946->leave($__internal_83074f56d1893bbe309070661030477ccb352591959ece3f46ad8e67af5fa946_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
