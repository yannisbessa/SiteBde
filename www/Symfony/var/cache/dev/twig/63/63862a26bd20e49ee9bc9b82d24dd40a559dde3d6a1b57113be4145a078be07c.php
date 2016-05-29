<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3fbf3c270d6c23dd06c375485d714e4078f71141ef021c7a407a9a5f3c22ffb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3a54578a911139a7f3db9b76f3ede931e549f2f237f4cfbe37763fbfff8048 = $this->env->getExtension("native_profiler");
        $__internal_be3a54578a911139a7f3db9b76f3ede931e549f2f237f4cfbe37763fbfff8048->enter($__internal_be3a54578a911139a7f3db9b76f3ede931e549f2f237f4cfbe37763fbfff8048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3a54578a911139a7f3db9b76f3ede931e549f2f237f4cfbe37763fbfff8048->leave($__internal_be3a54578a911139a7f3db9b76f3ede931e549f2f237f4cfbe37763fbfff8048_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_922fd4a703606f686ec1be60d6dad1174f979b0f20bd81003da2bc1bdec10e03 = $this->env->getExtension("native_profiler");
        $__internal_922fd4a703606f686ec1be60d6dad1174f979b0f20bd81003da2bc1bdec10e03->enter($__internal_922fd4a703606f686ec1be60d6dad1174f979b0f20bd81003da2bc1bdec10e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_922fd4a703606f686ec1be60d6dad1174f979b0f20bd81003da2bc1bdec10e03->leave($__internal_922fd4a703606f686ec1be60d6dad1174f979b0f20bd81003da2bc1bdec10e03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
