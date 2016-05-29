<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_b7ea3aa9620446c45b83ff776df58e5219a7cd2f56cc4ee92cb25fe8b8579aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c28286e7afc62958998ac8c17fabe633cc0fdc835bb45ce3172749bc401a8c83 = $this->env->getExtension("native_profiler");
        $__internal_c28286e7afc62958998ac8c17fabe633cc0fdc835bb45ce3172749bc401a8c83->enter($__internal_c28286e7afc62958998ac8c17fabe633cc0fdc835bb45ce3172749bc401a8c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28286e7afc62958998ac8c17fabe633cc0fdc835bb45ce3172749bc401a8c83->leave($__internal_c28286e7afc62958998ac8c17fabe633cc0fdc835bb45ce3172749bc401a8c83_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4cf9ead61f286132f1ac922c9e9b831ab69eaeb2cde85f9b391e030ac3fac13 = $this->env->getExtension("native_profiler");
        $__internal_d4cf9ead61f286132f1ac922c9e9b831ab69eaeb2cde85f9b391e030ac3fac13->enter($__internal_d4cf9ead61f286132f1ac922c9e9b831ab69eaeb2cde85f9b391e030ac3fac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d4cf9ead61f286132f1ac922c9e9b831ab69eaeb2cde85f9b391e030ac3fac13->leave($__internal_d4cf9ead61f286132f1ac922c9e9b831ab69eaeb2cde85f9b391e030ac3fac13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
