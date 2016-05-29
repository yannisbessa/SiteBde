<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_064707fb911adf848fb38ccd5fb68df77c5f06ce551cea2c9f6dc1a317df5308 extends Twig_Template
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
        $__internal_3a1d33df0aa7ab70f07642e941a298b38dfae838518242cf71f6b7b4cb26c8ba = $this->env->getExtension("native_profiler");
        $__internal_3a1d33df0aa7ab70f07642e941a298b38dfae838518242cf71f6b7b4cb26c8ba->enter($__internal_3a1d33df0aa7ab70f07642e941a298b38dfae838518242cf71f6b7b4cb26c8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3a1d33df0aa7ab70f07642e941a298b38dfae838518242cf71f6b7b4cb26c8ba->leave($__internal_3a1d33df0aa7ab70f07642e941a298b38dfae838518242cf71f6b7b4cb26c8ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
