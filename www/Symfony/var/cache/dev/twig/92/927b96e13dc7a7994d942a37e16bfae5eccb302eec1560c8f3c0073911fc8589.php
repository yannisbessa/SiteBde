<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_48ab0565a51be9cdbb4513f69693c8d21c1419c4c0a5ea1835a5ddbed366651e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cf6486204ac8391e383fd5d7e66e96b67f183748f7a400800d6190077a2076c9 = $this->env->getExtension("native_profiler");
        $__internal_cf6486204ac8391e383fd5d7e66e96b67f183748f7a400800d6190077a2076c9->enter($__internal_cf6486204ac8391e383fd5d7e66e96b67f183748f7a400800d6190077a2076c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6486204ac8391e383fd5d7e66e96b67f183748f7a400800d6190077a2076c9->leave($__internal_cf6486204ac8391e383fd5d7e66e96b67f183748f7a400800d6190077a2076c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e63c79a1a8f26dc8c077c91ee07f3a8cdecbb2eafff4a88f22321e16f883b52 = $this->env->getExtension("native_profiler");
        $__internal_3e63c79a1a8f26dc8c077c91ee07f3a8cdecbb2eafff4a88f22321e16f883b52->enter($__internal_3e63c79a1a8f26dc8c077c91ee07f3a8cdecbb2eafff4a88f22321e16f883b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3e63c79a1a8f26dc8c077c91ee07f3a8cdecbb2eafff4a88f22321e16f883b52->leave($__internal_3e63c79a1a8f26dc8c077c91ee07f3a8cdecbb2eafff4a88f22321e16f883b52_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
