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
        $__internal_87ec14d9b0add65294f42220f77d956720b1709f9944bafc9334d150c30fb140 = $this->env->getExtension("native_profiler");
        $__internal_87ec14d9b0add65294f42220f77d956720b1709f9944bafc9334d150c30fb140->enter($__internal_87ec14d9b0add65294f42220f77d956720b1709f9944bafc9334d150c30fb140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_87ec14d9b0add65294f42220f77d956720b1709f9944bafc9334d150c30fb140->leave($__internal_87ec14d9b0add65294f42220f77d956720b1709f9944bafc9334d150c30fb140_prof);

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
