<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_784d538e94bef544c0c5fc79b4c8c70f7a34e09131b880f4183791d2d9815bda extends Twig_Template
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
        $__internal_dedc9d1a7dc59aa3d3819b965d2b5a055c09600ae90549a5ff0ab5f7faab5d9c = $this->env->getExtension("native_profiler");
        $__internal_dedc9d1a7dc59aa3d3819b965d2b5a055c09600ae90549a5ff0ab5f7faab5d9c->enter($__internal_dedc9d1a7dc59aa3d3819b965d2b5a055c09600ae90549a5ff0ab5f7faab5d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dedc9d1a7dc59aa3d3819b965d2b5a055c09600ae90549a5ff0ab5f7faab5d9c->leave($__internal_dedc9d1a7dc59aa3d3819b965d2b5a055c09600ae90549a5ff0ab5f7faab5d9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
