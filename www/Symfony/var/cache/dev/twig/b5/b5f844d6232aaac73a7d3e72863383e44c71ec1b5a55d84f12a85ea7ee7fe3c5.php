<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_6c13a640346d183236c7984dab0deeaff7a41c848f9255349530d6c1af02e2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bc146d507992bc37475a345f6321793e1b5f17c48afda2233165906256294c4e = $this->env->getExtension("native_profiler");
        $__internal_bc146d507992bc37475a345f6321793e1b5f17c48afda2233165906256294c4e->enter($__internal_bc146d507992bc37475a345f6321793e1b5f17c48afda2233165906256294c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc146d507992bc37475a345f6321793e1b5f17c48afda2233165906256294c4e->leave($__internal_bc146d507992bc37475a345f6321793e1b5f17c48afda2233165906256294c4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d575e161cd413c452f8eb09abd447d790e67b67b5ce7bb31adc4dcf9da1575e4 = $this->env->getExtension("native_profiler");
        $__internal_d575e161cd413c452f8eb09abd447d790e67b67b5ce7bb31adc4dcf9da1575e4->enter($__internal_d575e161cd413c452f8eb09abd447d790e67b67b5ce7bb31adc4dcf9da1575e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d575e161cd413c452f8eb09abd447d790e67b67b5ce7bb31adc4dcf9da1575e4->leave($__internal_d575e161cd413c452f8eb09abd447d790e67b67b5ce7bb31adc4dcf9da1575e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
