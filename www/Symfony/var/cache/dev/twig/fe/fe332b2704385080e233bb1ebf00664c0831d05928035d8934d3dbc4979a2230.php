<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_87b0ae7f284614cb2019681318566eeed97864a35d474149dd89fd4d6b05f1ac extends Twig_Template
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
        $__internal_0dfe89f5d71a72c52dc6d22f5707073c5fc5353d6a99e3dd07311b0678226495 = $this->env->getExtension("native_profiler");
        $__internal_0dfe89f5d71a72c52dc6d22f5707073c5fc5353d6a99e3dd07311b0678226495->enter($__internal_0dfe89f5d71a72c52dc6d22f5707073c5fc5353d6a99e3dd07311b0678226495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0dfe89f5d71a72c52dc6d22f5707073c5fc5353d6a99e3dd07311b0678226495->leave($__internal_0dfe89f5d71a72c52dc6d22f5707073c5fc5353d6a99e3dd07311b0678226495_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
