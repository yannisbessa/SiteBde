<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_18b25f0cbf9a2644a5c64afde121101fd5f243d7bf710b169ce122b04dd43f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_a35efb7f2c21757dbef3db301fdc0608766509a1969b528e35cf62f7b7cb1fc7 = $this->env->getExtension("native_profiler");
        $__internal_a35efb7f2c21757dbef3db301fdc0608766509a1969b528e35cf62f7b7cb1fc7->enter($__internal_a35efb7f2c21757dbef3db301fdc0608766509a1969b528e35cf62f7b7cb1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35efb7f2c21757dbef3db301fdc0608766509a1969b528e35cf62f7b7cb1fc7->leave($__internal_a35efb7f2c21757dbef3db301fdc0608766509a1969b528e35cf62f7b7cb1fc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6adee4234d861e3bdb68f3d94eef8abf9d454503fb66122631e169cd9ddeb9bb = $this->env->getExtension("native_profiler");
        $__internal_6adee4234d861e3bdb68f3d94eef8abf9d454503fb66122631e169cd9ddeb9bb->enter($__internal_6adee4234d861e3bdb68f3d94eef8abf9d454503fb66122631e169cd9ddeb9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6adee4234d861e3bdb68f3d94eef8abf9d454503fb66122631e169cd9ddeb9bb->leave($__internal_6adee4234d861e3bdb68f3d94eef8abf9d454503fb66122631e169cd9ddeb9bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
