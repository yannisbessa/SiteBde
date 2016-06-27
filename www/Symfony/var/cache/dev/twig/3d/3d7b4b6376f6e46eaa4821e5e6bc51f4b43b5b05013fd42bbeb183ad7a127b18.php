<?php

/* BDESiteBundle::layout.html.twig */
class __TwigTemplate_566fe6b2658b7acd1f21a9e59355ddfd5ac82192c50037852e7023dc18b6fd7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "BDESiteBundle::layout.html.twig", 3);
        $this->blocks = array(
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94f0648e2ed2c2e22673dcfefa37c9a155d511e4bed8e263d9d20d2b26b05032 = $this->env->getExtension("native_profiler");
        $__internal_94f0648e2ed2c2e22673dcfefa37c9a155d511e4bed8e263d9d20d2b26b05032->enter($__internal_94f0648e2ed2c2e22673dcfefa37c9a155d511e4bed8e263d9d20d2b26b05032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f0648e2ed2c2e22673dcfefa37c9a155d511e4bed8e263d9d20d2b26b05032->leave($__internal_94f0648e2ed2c2e22673dcfefa37c9a155d511e4bed8e263d9d20d2b26b05032_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_38129093004062f7b629b4df8c3e4e7e0271f5edeaacc75e6c81467b57d96ff0 = $this->env->getExtension("native_profiler");
        $__internal_38129093004062f7b629b4df8c3e4e7e0271f5edeaacc75e6c81467b57d96ff0->enter($__internal_38129093004062f7b629b4df8c3e4e7e0271f5edeaacc75e6c81467b57d96ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "

";
        
        $__internal_38129093004062f7b629b4df8c3e4e7e0271f5edeaacc75e6c81467b57d96ff0->leave($__internal_38129093004062f7b629b4df8c3e4e7e0271f5edeaacc75e6c81467b57d96ff0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_eedbcca9849ccbd443c9597deda1c9cd3f14ad1617f1c6b2ffee29e9af95eee1 = $this->env->getExtension("native_profiler");
        $__internal_eedbcca9849ccbd443c9597deda1c9cd3f14ad1617f1c6b2ffee29e9af95eee1->enter($__internal_eedbcca9849ccbd443c9597deda1c9cd3f14ad1617f1c6b2ffee29e9af95eee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

";
        
        $__internal_eedbcca9849ccbd443c9597deda1c9cd3f14ad1617f1c6b2ffee29e9af95eee1->leave($__internal_eedbcca9849ccbd443c9597deda1c9cd3f14ad1617f1c6b2ffee29e9af95eee1_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  50 => 12,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* */
/* */
/* {% block img %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
