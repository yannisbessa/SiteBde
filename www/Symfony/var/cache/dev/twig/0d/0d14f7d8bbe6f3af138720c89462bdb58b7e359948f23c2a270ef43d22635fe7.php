<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7b5ad70b37169360354a118fa8fa83df24d3dc8044583fc6b3f886a2e655649a extends Twig_Template
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
        $__internal_9b381e62ca8aa6173fa2a743392dbfcbc8e17f5163b10396468211a71f21acf4 = $this->env->getExtension("native_profiler");
        $__internal_9b381e62ca8aa6173fa2a743392dbfcbc8e17f5163b10396468211a71f21acf4->enter($__internal_9b381e62ca8aa6173fa2a743392dbfcbc8e17f5163b10396468211a71f21acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b381e62ca8aa6173fa2a743392dbfcbc8e17f5163b10396468211a71f21acf4->leave($__internal_9b381e62ca8aa6173fa2a743392dbfcbc8e17f5163b10396468211a71f21acf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
