<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3110b81791da57a614a10a7265b60c048d0aa58e19c10bfe034eba118b953364 extends Twig_Template
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
        $__internal_1267e170784b3969dfc1f79535fc0e7c1ef944902f77d6608cdaf2515b57ce08 = $this->env->getExtension("native_profiler");
        $__internal_1267e170784b3969dfc1f79535fc0e7c1ef944902f77d6608cdaf2515b57ce08->enter($__internal_1267e170784b3969dfc1f79535fc0e7c1ef944902f77d6608cdaf2515b57ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1267e170784b3969dfc1f79535fc0e7c1ef944902f77d6608cdaf2515b57ce08->leave($__internal_1267e170784b3969dfc1f79535fc0e7c1ef944902f77d6608cdaf2515b57ce08_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
