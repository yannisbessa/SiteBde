<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8b71a2c3064d822035bd2456cd4a3c73498dd6de68ecd7ae5460f2083c2bf387 extends Twig_Template
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
        $__internal_01226410fe3966988fb644096bc3a0aa9f2c09fc939b9a903c3badae8e83013e = $this->env->getExtension("native_profiler");
        $__internal_01226410fe3966988fb644096bc3a0aa9f2c09fc939b9a903c3badae8e83013e->enter($__internal_01226410fe3966988fb644096bc3a0aa9f2c09fc939b9a903c3badae8e83013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_01226410fe3966988fb644096bc3a0aa9f2c09fc939b9a903c3badae8e83013e->leave($__internal_01226410fe3966988fb644096bc3a0aa9f2c09fc939b9a903c3badae8e83013e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
