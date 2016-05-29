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
        $__internal_93484ac340f06b27212b7b02aa4f9ce2eeeebf7650a3ecaf205c25856212df9c = $this->env->getExtension("native_profiler");
        $__internal_93484ac340f06b27212b7b02aa4f9ce2eeeebf7650a3ecaf205c25856212df9c->enter($__internal_93484ac340f06b27212b7b02aa4f9ce2eeeebf7650a3ecaf205c25856212df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93484ac340f06b27212b7b02aa4f9ce2eeeebf7650a3ecaf205c25856212df9c->leave($__internal_93484ac340f06b27212b7b02aa4f9ce2eeeebf7650a3ecaf205c25856212df9c_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_6843ecd384eacafc51fa0cd1f5efce74ac44f89c7be98e148040c6ee30fdac08 = $this->env->getExtension("native_profiler");
        $__internal_6843ecd384eacafc51fa0cd1f5efce74ac44f89c7be98e148040c6ee30fdac08->enter($__internal_6843ecd384eacafc51fa0cd1f5efce74ac44f89c7be98e148040c6ee30fdac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "

";
        
        $__internal_6843ecd384eacafc51fa0cd1f5efce74ac44f89c7be98e148040c6ee30fdac08->leave($__internal_6843ecd384eacafc51fa0cd1f5efce74ac44f89c7be98e148040c6ee30fdac08_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0f3566c01507d2f2a52230e275f8460f636610f1a42691e6a96b86241949903 = $this->env->getExtension("native_profiler");
        $__internal_b0f3566c01507d2f2a52230e275f8460f636610f1a42691e6a96b86241949903->enter($__internal_b0f3566c01507d2f2a52230e275f8460f636610f1a42691e6a96b86241949903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

";
        
        $__internal_b0f3566c01507d2f2a52230e275f8460f636610f1a42691e6a96b86241949903->leave($__internal_b0f3566c01507d2f2a52230e275f8460f636610f1a42691e6a96b86241949903_prof);

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
