<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3ca6c673b8a44a6e75c141a5b7e3bb022a342fa95abd25a2d36e28a5ff9c3f43 extends Twig_Template
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
        $__internal_1a4f0dfef5208c4ae6239fcb6ae072773f0f827afa6765f93254e32fec94bb30 = $this->env->getExtension("native_profiler");
        $__internal_1a4f0dfef5208c4ae6239fcb6ae072773f0f827afa6765f93254e32fec94bb30->enter($__internal_1a4f0dfef5208c4ae6239fcb6ae072773f0f827afa6765f93254e32fec94bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1a4f0dfef5208c4ae6239fcb6ae072773f0f827afa6765f93254e32fec94bb30->leave($__internal_1a4f0dfef5208c4ae6239fcb6ae072773f0f827afa6765f93254e32fec94bb30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
