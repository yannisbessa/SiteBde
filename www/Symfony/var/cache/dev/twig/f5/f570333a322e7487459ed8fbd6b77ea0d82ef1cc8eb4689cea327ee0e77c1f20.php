<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_43d403df51c44af7b81c1d3e00fc13947af8a1fa59fac8f30e1c25292a3f880f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_da9b0f59099bb9d0261f3618c02ce6fae9b1fd5316f0ad94a985133b34d6e6fe = $this->env->getExtension("native_profiler");
        $__internal_da9b0f59099bb9d0261f3618c02ce6fae9b1fd5316f0ad94a985133b34d6e6fe->enter($__internal_da9b0f59099bb9d0261f3618c02ce6fae9b1fd5316f0ad94a985133b34d6e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9b0f59099bb9d0261f3618c02ce6fae9b1fd5316f0ad94a985133b34d6e6fe->leave($__internal_da9b0f59099bb9d0261f3618c02ce6fae9b1fd5316f0ad94a985133b34d6e6fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97147653399c3b1ab781c713963d8efc0bc68ffb897851b36420810548e75345 = $this->env->getExtension("native_profiler");
        $__internal_97147653399c3b1ab781c713963d8efc0bc68ffb897851b36420810548e75345->enter($__internal_97147653399c3b1ab781c713963d8efc0bc68ffb897851b36420810548e75345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_97147653399c3b1ab781c713963d8efc0bc68ffb897851b36420810548e75345->leave($__internal_97147653399c3b1ab781c713963d8efc0bc68ffb897851b36420810548e75345_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
