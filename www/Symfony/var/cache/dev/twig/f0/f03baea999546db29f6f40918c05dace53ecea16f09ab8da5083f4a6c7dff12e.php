<?php

/* @BDESite/Bde/Astuces.html.twig */
class __TwigTemplate_429585def595cfdb8270bf4a61afa82409ba9c900da121cb6f7185e4e68a69fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/Astuces.html.twig", 4);
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
        $__internal_afbc127d52b91a62828e4cd145a50a1741ae51b9ad37f633afe9c96458538c90 = $this->env->getExtension("native_profiler");
        $__internal_afbc127d52b91a62828e4cd145a50a1741ae51b9ad37f633afe9c96458538c90->enter($__internal_afbc127d52b91a62828e4cd145a50a1741ae51b9ad37f633afe9c96458538c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/Astuces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afbc127d52b91a62828e4cd145a50a1741ae51b9ad37f633afe9c96458538c90->leave($__internal_afbc127d52b91a62828e4cd145a50a1741ae51b9ad37f633afe9c96458538c90_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_581399c064d654d9ff615fe9425c554c95fd7ac5bca16b5cff10bba12b12474c = $this->env->getExtension("native_profiler");
        $__internal_581399c064d654d9ff615fe9425c554c95fd7ac5bca16b5cff10bba12b12474c->enter($__internal_581399c064d654d9ff615fe9425c554c95fd7ac5bca16b5cff10bba12b12474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " 7 petites astuces ";
        
        $__internal_581399c064d654d9ff615fe9425c554c95fd7ac5bca16b5cff10bba12b12474c->leave($__internal_581399c064d654d9ff615fe9425c554c95fd7ac5bca16b5cff10bba12b12474c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_99eb523fbd43f592d66aaadb304b4c51321bb47ac302f846fe46e0a60ed3ea2c = $this->env->getExtension("native_profiler");
        $__internal_99eb523fbd43f592d66aaadb304b4c51321bb47ac302f846fe46e0a60ed3ea2c->enter($__internal_99eb523fbd43f592d66aaadb304b4c51321bb47ac302f846fe46e0a60ed3ea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> 7 petites astuces</p>
";
        
        $__internal_99eb523fbd43f592d66aaadb304b4c51321bb47ac302f846fe46e0a60ed3ea2c->leave($__internal_99eb523fbd43f592d66aaadb304b4c51321bb47ac302f846fe46e0a60ed3ea2c_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/Astuces.html.twig";
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
