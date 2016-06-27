<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a5590981ec913557d5cdd950bd9af42ecf874ad768749b82620e9fca2ba4cc6c extends Twig_Template
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
        $__internal_9862ba7c22ac9472b47a41cab88578987ee44bd68ca6058b00e0351abe580b1e = $this->env->getExtension("native_profiler");
        $__internal_9862ba7c22ac9472b47a41cab88578987ee44bd68ca6058b00e0351abe580b1e->enter($__internal_9862ba7c22ac9472b47a41cab88578987ee44bd68ca6058b00e0351abe580b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9862ba7c22ac9472b47a41cab88578987ee44bd68ca6058b00e0351abe580b1e->leave($__internal_9862ba7c22ac9472b47a41cab88578987ee44bd68ca6058b00e0351abe580b1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
