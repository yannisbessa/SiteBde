<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e2bd9265c774b4bd3cd217a09cc8991c8473b867f7f15761573d8b524ce0e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_615eb0c79858098c531e7ecc5f4d48d1efc6bf5d3c9aeeb8764416abf6eb0d4e = $this->env->getExtension("native_profiler");
        $__internal_615eb0c79858098c531e7ecc5f4d48d1efc6bf5d3c9aeeb8764416abf6eb0d4e->enter($__internal_615eb0c79858098c531e7ecc5f4d48d1efc6bf5d3c9aeeb8764416abf6eb0d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615eb0c79858098c531e7ecc5f4d48d1efc6bf5d3c9aeeb8764416abf6eb0d4e->leave($__internal_615eb0c79858098c531e7ecc5f4d48d1efc6bf5d3c9aeeb8764416abf6eb0d4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5036aa228fd0190f9375b936a423be00273acb74c2a88b9e9fcf184fc4492cbe = $this->env->getExtension("native_profiler");
        $__internal_5036aa228fd0190f9375b936a423be00273acb74c2a88b9e9fcf184fc4492cbe->enter($__internal_5036aa228fd0190f9375b936a423be00273acb74c2a88b9e9fcf184fc4492cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5036aa228fd0190f9375b936a423be00273acb74c2a88b9e9fcf184fc4492cbe->leave($__internal_5036aa228fd0190f9375b936a423be00273acb74c2a88b9e9fcf184fc4492cbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
