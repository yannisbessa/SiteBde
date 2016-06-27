<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_89bee7ce18ca0ca55cefe88fe1809298fbb13042cedc25410d2eeef0d64ea79a extends Twig_Template
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
        $__internal_b6bb5e93fedf6c077ea76df16f0cd68b47b3b419632a87ee8f9640fb5c6bf920 = $this->env->getExtension("native_profiler");
        $__internal_b6bb5e93fedf6c077ea76df16f0cd68b47b3b419632a87ee8f9640fb5c6bf920->enter($__internal_b6bb5e93fedf6c077ea76df16f0cd68b47b3b419632a87ee8f9640fb5c6bf920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b6bb5e93fedf6c077ea76df16f0cd68b47b3b419632a87ee8f9640fb5c6bf920->leave($__internal_b6bb5e93fedf6c077ea76df16f0cd68b47b3b419632a87ee8f9640fb5c6bf920_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
