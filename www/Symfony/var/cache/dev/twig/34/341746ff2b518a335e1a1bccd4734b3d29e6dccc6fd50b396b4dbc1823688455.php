<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ec2aa1b1f36e1d835fb599e4d4b2fa984ee445de0a303bf58dab35c735b6b49c extends Twig_Template
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
        $__internal_ee6d47db831f930a038ff75d9aabca30d98afcc205ca47e0185a44c2a5c3db90 = $this->env->getExtension("native_profiler");
        $__internal_ee6d47db831f930a038ff75d9aabca30d98afcc205ca47e0185a44c2a5c3db90->enter($__internal_ee6d47db831f930a038ff75d9aabca30d98afcc205ca47e0185a44c2a5c3db90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ee6d47db831f930a038ff75d9aabca30d98afcc205ca47e0185a44c2a5c3db90->leave($__internal_ee6d47db831f930a038ff75d9aabca30d98afcc205ca47e0185a44c2a5c3db90_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
