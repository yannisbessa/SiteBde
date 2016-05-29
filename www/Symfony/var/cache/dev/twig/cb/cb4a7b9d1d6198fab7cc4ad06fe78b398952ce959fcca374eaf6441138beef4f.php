<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_16d26ac00d9101e2c226ef6dc5e39bf24f72deaabe1bb755f1fd6de6ca7b8c71 extends Twig_Template
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
        $__internal_1d944537b1b2164a9b87d56601c0271e8fe08478064daf8d61df68a1c074dd92 = $this->env->getExtension("native_profiler");
        $__internal_1d944537b1b2164a9b87d56601c0271e8fe08478064daf8d61df68a1c074dd92->enter($__internal_1d944537b1b2164a9b87d56601c0271e8fe08478064daf8d61df68a1c074dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1d944537b1b2164a9b87d56601c0271e8fe08478064daf8d61df68a1c074dd92->leave($__internal_1d944537b1b2164a9b87d56601c0271e8fe08478064daf8d61df68a1c074dd92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
