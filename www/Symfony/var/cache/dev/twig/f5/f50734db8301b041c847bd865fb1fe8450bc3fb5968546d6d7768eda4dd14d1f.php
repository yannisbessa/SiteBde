<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f307ee130ed7cb2415078e17d966151e693d0593701745f723c6f3bcd4c4d787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_3a202e35be5da62437a007a30a6eb3b198813c2f5c3825de958df51cb78808df = $this->env->getExtension("native_profiler");
        $__internal_3a202e35be5da62437a007a30a6eb3b198813c2f5c3825de958df51cb78808df->enter($__internal_3a202e35be5da62437a007a30a6eb3b198813c2f5c3825de958df51cb78808df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a202e35be5da62437a007a30a6eb3b198813c2f5c3825de958df51cb78808df->leave($__internal_3a202e35be5da62437a007a30a6eb3b198813c2f5c3825de958df51cb78808df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72ef5668989dcc4566d2c33075ce361cf07b9abaa0c7ca9d30976cb0b484f658 = $this->env->getExtension("native_profiler");
        $__internal_72ef5668989dcc4566d2c33075ce361cf07b9abaa0c7ca9d30976cb0b484f658->enter($__internal_72ef5668989dcc4566d2c33075ce361cf07b9abaa0c7ca9d30976cb0b484f658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_72ef5668989dcc4566d2c33075ce361cf07b9abaa0c7ca9d30976cb0b484f658->leave($__internal_72ef5668989dcc4566d2c33075ce361cf07b9abaa0c7ca9d30976cb0b484f658_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
