<?php

/* BDESiteBundle:Bde:Astuces.html.twig */
class __TwigTemplate_fc25d607f77acc225d72510eb0cb26636d1b109a609f1fc8479638843d35a74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:Astuces.html.twig", 4);
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
        $__internal_e29155de7c97304b172c670d12a5b408b7b2ead57566650751998a75bd0f1190 = $this->env->getExtension("native_profiler");
        $__internal_e29155de7c97304b172c670d12a5b408b7b2ead57566650751998a75bd0f1190->enter($__internal_e29155de7c97304b172c670d12a5b408b7b2ead57566650751998a75bd0f1190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:Astuces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29155de7c97304b172c670d12a5b408b7b2ead57566650751998a75bd0f1190->leave($__internal_e29155de7c97304b172c670d12a5b408b7b2ead57566650751998a75bd0f1190_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c60a5f3c48c768cca4454490ba606abe5b02c72e0e3e5a3ec961c4c6b8580ce1 = $this->env->getExtension("native_profiler");
        $__internal_c60a5f3c48c768cca4454490ba606abe5b02c72e0e3e5a3ec961c4c6b8580ce1->enter($__internal_c60a5f3c48c768cca4454490ba606abe5b02c72e0e3e5a3ec961c4c6b8580ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " 7 petites astuces ";
        
        $__internal_c60a5f3c48c768cca4454490ba606abe5b02c72e0e3e5a3ec961c4c6b8580ce1->leave($__internal_c60a5f3c48c768cca4454490ba606abe5b02c72e0e3e5a3ec961c4c6b8580ce1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e45032d9d5d3d1184a1c00ecb1143ce2b2fcbcd564fd45ec021bc987b7685ec = $this->env->getExtension("native_profiler");
        $__internal_4e45032d9d5d3d1184a1c00ecb1143ce2b2fcbcd564fd45ec021bc987b7685ec->enter($__internal_4e45032d9d5d3d1184a1c00ecb1143ce2b2fcbcd564fd45ec021bc987b7685ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> 7 petites astuces</p>
";
        
        $__internal_4e45032d9d5d3d1184a1c00ecb1143ce2b2fcbcd564fd45ec021bc987b7685ec->leave($__internal_4e45032d9d5d3d1184a1c00ecb1143ce2b2fcbcd564fd45ec021bc987b7685ec_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:Astuces.html.twig";
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
