<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0b7e5f508262a91a2cca02eb83a13c0035c26cbace7ac025b7465dc3de8cfa4b extends Twig_Template
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
        $__internal_179142a34369a21c07ac01443a3bcc3c8334d949d3a1e32f35dea5195b82ec32 = $this->env->getExtension("native_profiler");
        $__internal_179142a34369a21c07ac01443a3bcc3c8334d949d3a1e32f35dea5195b82ec32->enter($__internal_179142a34369a21c07ac01443a3bcc3c8334d949d3a1e32f35dea5195b82ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_179142a34369a21c07ac01443a3bcc3c8334d949d3a1e32f35dea5195b82ec32->leave($__internal_179142a34369a21c07ac01443a3bcc3c8334d949d3a1e32f35dea5195b82ec32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
