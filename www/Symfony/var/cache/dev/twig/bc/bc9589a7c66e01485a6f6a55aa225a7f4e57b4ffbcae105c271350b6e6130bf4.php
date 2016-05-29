<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b5243e1c94f295b51a330d714d17800dbe8f1b905292293612487eb1f5a8766d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_59206d35d5d84ad1a3e0748f3a1da02f74565e492b2d97893dcf8d6a9804cedd = $this->env->getExtension("native_profiler");
        $__internal_59206d35d5d84ad1a3e0748f3a1da02f74565e492b2d97893dcf8d6a9804cedd->enter($__internal_59206d35d5d84ad1a3e0748f3a1da02f74565e492b2d97893dcf8d6a9804cedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59206d35d5d84ad1a3e0748f3a1da02f74565e492b2d97893dcf8d6a9804cedd->leave($__internal_59206d35d5d84ad1a3e0748f3a1da02f74565e492b2d97893dcf8d6a9804cedd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04156bd80dfe9e00b95b3788a8312a92875d198a427c0a8467c2fb7961ab24d1 = $this->env->getExtension("native_profiler");
        $__internal_04156bd80dfe9e00b95b3788a8312a92875d198a427c0a8467c2fb7961ab24d1->enter($__internal_04156bd80dfe9e00b95b3788a8312a92875d198a427c0a8467c2fb7961ab24d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_04156bd80dfe9e00b95b3788a8312a92875d198a427c0a8467c2fb7961ab24d1->leave($__internal_04156bd80dfe9e00b95b3788a8312a92875d198a427c0a8467c2fb7961ab24d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
