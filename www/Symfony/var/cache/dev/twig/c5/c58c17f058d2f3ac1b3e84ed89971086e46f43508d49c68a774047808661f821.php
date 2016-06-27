<?php

/* @BDESite/Layout.html.twig */
class __TwigTemplate_13cb012c5dc3f138916e16d965e5ff8d61ceb01de4672c89ff92f24be9aa92e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "@BDESite/Layout.html.twig", 3);
        $this->blocks = array(
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29ff10b00f68c9d64108c81a89cb6c6ef2d7f0b376347faedac8f0c00a099387 = $this->env->getExtension("native_profiler");
        $__internal_29ff10b00f68c9d64108c81a89cb6c6ef2d7f0b376347faedac8f0c00a099387->enter($__internal_29ff10b00f68c9d64108c81a89cb6c6ef2d7f0b376347faedac8f0c00a099387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ff10b00f68c9d64108c81a89cb6c6ef2d7f0b376347faedac8f0c00a099387->leave($__internal_29ff10b00f68c9d64108c81a89cb6c6ef2d7f0b376347faedac8f0c00a099387_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_f86d1430a086658cd7645bb28f696166a4b5b51cad37eba038d26a2d85c99aa9 = $this->env->getExtension("native_profiler");
        $__internal_f86d1430a086658cd7645bb28f696166a4b5b51cad37eba038d26a2d85c99aa9->enter($__internal_f86d1430a086658cd7645bb28f696166a4b5b51cad37eba038d26a2d85c99aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "

";
        
        $__internal_f86d1430a086658cd7645bb28f696166a4b5b51cad37eba038d26a2d85c99aa9->leave($__internal_f86d1430a086658cd7645bb28f696166a4b5b51cad37eba038d26a2d85c99aa9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1beec215098dfabdf7d551ade4da89b2d7811409197d8f825d2bc6d872cd8d3 = $this->env->getExtension("native_profiler");
        $__internal_e1beec215098dfabdf7d551ade4da89b2d7811409197d8f825d2bc6d872cd8d3->enter($__internal_e1beec215098dfabdf7d551ade4da89b2d7811409197d8f825d2bc6d872cd8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

";
        
        $__internal_e1beec215098dfabdf7d551ade4da89b2d7811409197d8f825d2bc6d872cd8d3->leave($__internal_e1beec215098dfabdf7d551ade4da89b2d7811409197d8f825d2bc6d872cd8d3_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  50 => 12,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* */
/* */
/* {% block img %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
