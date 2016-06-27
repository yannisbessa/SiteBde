<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_82b707bb00e5775c17e703dc5a5b7655b1f5274a50491657c87468dfd1cc5165 extends Twig_Template
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
        $__internal_7221fada263c6ef3e70b1fc65bd7ff7d344bbf63bd2aaa019e38889da872bad0 = $this->env->getExtension("native_profiler");
        $__internal_7221fada263c6ef3e70b1fc65bd7ff7d344bbf63bd2aaa019e38889da872bad0->enter($__internal_7221fada263c6ef3e70b1fc65bd7ff7d344bbf63bd2aaa019e38889da872bad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7221fada263c6ef3e70b1fc65bd7ff7d344bbf63bd2aaa019e38889da872bad0->leave($__internal_7221fada263c6ef3e70b1fc65bd7ff7d344bbf63bd2aaa019e38889da872bad0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
