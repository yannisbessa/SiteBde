<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5f88fa618ad7b93a7b0d109624a1604de580126c366ecb073a6c012ac580bf3c extends Twig_Template
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
        $__internal_4a2eca795fb7bc432af9dbfd6061253ad337c336050c485c6539cf99797dec7c = $this->env->getExtension("native_profiler");
        $__internal_4a2eca795fb7bc432af9dbfd6061253ad337c336050c485c6539cf99797dec7c->enter($__internal_4a2eca795fb7bc432af9dbfd6061253ad337c336050c485c6539cf99797dec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_4a2eca795fb7bc432af9dbfd6061253ad337c336050c485c6539cf99797dec7c->leave($__internal_4a2eca795fb7bc432af9dbfd6061253ad337c336050c485c6539cf99797dec7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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