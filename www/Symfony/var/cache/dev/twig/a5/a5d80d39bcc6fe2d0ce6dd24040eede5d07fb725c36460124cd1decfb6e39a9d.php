<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_945106b651763a1caf5d0281f15caf2efd5d557b3255c1e2ef92d9610e8684c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_1d36042a08e835be12c13bec66ebad83fe54de4c097098934fb1f940351e2108 = $this->env->getExtension("native_profiler");
        $__internal_1d36042a08e835be12c13bec66ebad83fe54de4c097098934fb1f940351e2108->enter($__internal_1d36042a08e835be12c13bec66ebad83fe54de4c097098934fb1f940351e2108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d36042a08e835be12c13bec66ebad83fe54de4c097098934fb1f940351e2108->leave($__internal_1d36042a08e835be12c13bec66ebad83fe54de4c097098934fb1f940351e2108_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3862aca10047b36bfeed89964a3aa2cd6e337fe5346a08c0d668207b7915264d = $this->env->getExtension("native_profiler");
        $__internal_3862aca10047b36bfeed89964a3aa2cd6e337fe5346a08c0d668207b7915264d->enter($__internal_3862aca10047b36bfeed89964a3aa2cd6e337fe5346a08c0d668207b7915264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3862aca10047b36bfeed89964a3aa2cd6e337fe5346a08c0d668207b7915264d->leave($__internal_3862aca10047b36bfeed89964a3aa2cd6e337fe5346a08c0d668207b7915264d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
