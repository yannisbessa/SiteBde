<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c1e45fcc8bb05d43eaeec4793647710695b1a239d229596792e598b012454c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_bfcd4866ce4b5e4b02b00a7571bb1b7447a1c4419c383bdcb5a6221d0cea1764 = $this->env->getExtension("native_profiler");
        $__internal_bfcd4866ce4b5e4b02b00a7571bb1b7447a1c4419c383bdcb5a6221d0cea1764->enter($__internal_bfcd4866ce4b5e4b02b00a7571bb1b7447a1c4419c383bdcb5a6221d0cea1764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcd4866ce4b5e4b02b00a7571bb1b7447a1c4419c383bdcb5a6221d0cea1764->leave($__internal_bfcd4866ce4b5e4b02b00a7571bb1b7447a1c4419c383bdcb5a6221d0cea1764_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c54264af40e90425f961bc6b80273bf6c4797b06c8372e3d4b35d0c0c1c100f = $this->env->getExtension("native_profiler");
        $__internal_7c54264af40e90425f961bc6b80273bf6c4797b06c8372e3d4b35d0c0c1c100f->enter($__internal_7c54264af40e90425f961bc6b80273bf6c4797b06c8372e3d4b35d0c0c1c100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7c54264af40e90425f961bc6b80273bf6c4797b06c8372e3d4b35d0c0c1c100f->leave($__internal_7c54264af40e90425f961bc6b80273bf6c4797b06c8372e3d4b35d0c0c1c100f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
