<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f29b1af89f9a1631755c18af9ab4bbe0108d190a932806eaeef0a3531b47f1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cab9e7e483009025469ce52bc658f0990c59dd1aa488e685c45f586e79e770f5 = $this->env->getExtension("native_profiler");
        $__internal_cab9e7e483009025469ce52bc658f0990c59dd1aa488e685c45f586e79e770f5->enter($__internal_cab9e7e483009025469ce52bc658f0990c59dd1aa488e685c45f586e79e770f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cab9e7e483009025469ce52bc658f0990c59dd1aa488e685c45f586e79e770f5->leave($__internal_cab9e7e483009025469ce52bc658f0990c59dd1aa488e685c45f586e79e770f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
