<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e1c50cdd0528a52c2b6faf747b4c2f5398fa2d740e424e8c4f8f17c9ece08e02 extends Twig_Template
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
        $__internal_a883a372de270202b36fef7a32c08db6ab476e1f27250488626ae5022d96b621 = $this->env->getExtension("native_profiler");
        $__internal_a883a372de270202b36fef7a32c08db6ab476e1f27250488626ae5022d96b621->enter($__internal_a883a372de270202b36fef7a32c08db6ab476e1f27250488626ae5022d96b621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a883a372de270202b36fef7a32c08db6ab476e1f27250488626ae5022d96b621->leave($__internal_a883a372de270202b36fef7a32c08db6ab476e1f27250488626ae5022d96b621_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
