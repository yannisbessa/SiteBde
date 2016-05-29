<?php

/* @BDESite/Bde/ForumSite.html.twig */
class __TwigTemplate_27ce9d4053df47c0dbc07e1a695d8f37dec4510fab80511bf62d197e1afe1c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ForumSite.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42e4867fb011ffab4eae468dbdd2d40a4825a426b001fe6a7f2fc4e20cfd0fb6 = $this->env->getExtension("native_profiler");
        $__internal_42e4867fb011ffab4eae468dbdd2d40a4825a426b001fe6a7f2fc4e20cfd0fb6->enter($__internal_42e4867fb011ffab4eae468dbdd2d40a4825a426b001fe6a7f2fc4e20cfd0fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ForumSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e4867fb011ffab4eae468dbdd2d40a4825a426b001fe6a7f2fc4e20cfd0fb6->leave($__internal_42e4867fb011ffab4eae468dbdd2d40a4825a426b001fe6a7f2fc4e20cfd0fb6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_43400b7caeea47e3641a6c774e318ff449ecbd0f8d83d8a84afafc48238e988e = $this->env->getExtension("native_profiler");
        $__internal_43400b7caeea47e3641a6c774e318ff449ecbd0f8d83d8a84afafc48238e988e->enter($__internal_43400b7caeea47e3641a6c774e318ff449ecbd0f8d83d8a84afafc48238e988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Forum ";
        
        $__internal_43400b7caeea47e3641a6c774e318ff449ecbd0f8d83d8a84afafc48238e988e->leave($__internal_43400b7caeea47e3641a6c774e318ff449ecbd0f8d83d8a84afafc48238e988e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_edaeb2c89bad7463b6f9a88f97579227ac9a32219a327ea0ccecccbfe49fdb41 = $this->env->getExtension("native_profiler");
        $__internal_edaeb2c89bad7463b6f9a88f97579227ac9a32219a327ea0ccecccbfe49fdb41->enter($__internal_edaeb2c89bad7463b6f9a88f97579227ac9a32219a327ea0ccecccbfe49fdb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> Forum</p>
";
        
        $__internal_edaeb2c89bad7463b6f9a88f97579227ac9a32219a327ea0ccecccbfe49fdb41->leave($__internal_edaeb2c89bad7463b6f9a88f97579227ac9a32219a327ea0ccecccbfe49fdb41_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ForumSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  48 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} Forum {% endblock %}*/
/* */
/* {% block body %}*/
/* <p> Forum</p>*/
/* {% endblock %}*/
