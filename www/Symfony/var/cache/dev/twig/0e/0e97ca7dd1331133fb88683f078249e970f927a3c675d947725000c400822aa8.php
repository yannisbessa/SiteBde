<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c1d9c7a77bca8cd92c6c35f54b7ef19f0e210bf8546875b39049efe751ce935f extends Twig_Template
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
        $__internal_56b1277ac6cc4ef2df68bcdc95b7454e0aaab1c42ff3fd2dd0445351474a55cf = $this->env->getExtension("native_profiler");
        $__internal_56b1277ac6cc4ef2df68bcdc95b7454e0aaab1c42ff3fd2dd0445351474a55cf->enter($__internal_56b1277ac6cc4ef2df68bcdc95b7454e0aaab1c42ff3fd2dd0445351474a55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_56b1277ac6cc4ef2df68bcdc95b7454e0aaab1c42ff3fd2dd0445351474a55cf->leave($__internal_56b1277ac6cc4ef2df68bcdc95b7454e0aaab1c42ff3fd2dd0445351474a55cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
