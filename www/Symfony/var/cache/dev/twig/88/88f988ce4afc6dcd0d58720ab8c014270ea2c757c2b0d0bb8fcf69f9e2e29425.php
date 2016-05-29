<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_05535658703db983c7424c9fa2bad46086ffa976db740f0f9d703215c8b4665c extends Twig_Template
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
        $__internal_509c79ebf96e40d2b81054067072a06ff4cda5b4c3c8ee43a3f9f4cb4bddc0d3 = $this->env->getExtension("native_profiler");
        $__internal_509c79ebf96e40d2b81054067072a06ff4cda5b4c3c8ee43a3f9f4cb4bddc0d3->enter($__internal_509c79ebf96e40d2b81054067072a06ff4cda5b4c3c8ee43a3f9f4cb4bddc0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_509c79ebf96e40d2b81054067072a06ff4cda5b4c3c8ee43a3f9f4cb4bddc0d3->leave($__internal_509c79ebf96e40d2b81054067072a06ff4cda5b4c3c8ee43a3f9f4cb4bddc0d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
