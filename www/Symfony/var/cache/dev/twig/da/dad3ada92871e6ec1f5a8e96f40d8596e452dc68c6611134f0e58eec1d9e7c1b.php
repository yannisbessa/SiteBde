<?php

/* @BDESite/Bde/AstuceSite.html.twig */
class __TwigTemplate_9dba5bb5e824af5493bd2b75f7b7bd6d809d6b35755cc85d117cc2cd8138f999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/AstuceSite.html.twig", 4);
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
        $__internal_ce09f39409e05a509551427928dd22c63cc1cb1593435fbaff84a6d0185196e4 = $this->env->getExtension("native_profiler");
        $__internal_ce09f39409e05a509551427928dd22c63cc1cb1593435fbaff84a6d0185196e4->enter($__internal_ce09f39409e05a509551427928dd22c63cc1cb1593435fbaff84a6d0185196e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/AstuceSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce09f39409e05a509551427928dd22c63cc1cb1593435fbaff84a6d0185196e4->leave($__internal_ce09f39409e05a509551427928dd22c63cc1cb1593435fbaff84a6d0185196e4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2de6515063064eefd56b1625417c493104fc3ca5235c293bcddfd2973ab34a5 = $this->env->getExtension("native_profiler");
        $__internal_c2de6515063064eefd56b1625417c493104fc3ca5235c293bcddfd2973ab34a5->enter($__internal_c2de6515063064eefd56b1625417c493104fc3ca5235c293bcddfd2973ab34a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " 7 petites astuces ";
        
        $__internal_c2de6515063064eefd56b1625417c493104fc3ca5235c293bcddfd2973ab34a5->leave($__internal_c2de6515063064eefd56b1625417c493104fc3ca5235c293bcddfd2973ab34a5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c081d65c87a4e2dbfde717a9707be7e2c04f88a5d41d133a5d1d8acbb760d516 = $this->env->getExtension("native_profiler");
        $__internal_c081d65c87a4e2dbfde717a9707be7e2c04f88a5d41d133a5d1d8acbb760d516->enter($__internal_c081d65c87a4e2dbfde717a9707be7e2c04f88a5d41d133a5d1d8acbb760d516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> 7 petites astuces</p>
";
        
        $__internal_c081d65c87a4e2dbfde717a9707be7e2c04f88a5d41d133a5d1d8acbb760d516->leave($__internal_c081d65c87a4e2dbfde717a9707be7e2c04f88a5d41d133a5d1d8acbb760d516_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/AstuceSite.html.twig";
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
/* {% block title %}{{ parent() }} 7 petites astuces {% endblock %}*/
/* */
/* {% block body %}*/
/* <p> 7 petites astuces</p>*/
/* {% endblock %}*/
