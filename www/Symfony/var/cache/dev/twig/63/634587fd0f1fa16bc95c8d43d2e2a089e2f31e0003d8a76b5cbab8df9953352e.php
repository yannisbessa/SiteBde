<?php

/* BDESiteBundle::Layout.html.twig */
class __TwigTemplate_fe3974e03e1b009249af9301e1a4d27a08d11ceb6e76db060f733b5f9f9bda89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "BDESiteBundle::Layout.html.twig", 3);
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
        $__internal_bce1f5465e32e8948a86e8a703a9fed8eebb8ca938598b4abd5e102b2fb096ea = $this->env->getExtension("native_profiler");
        $__internal_bce1f5465e32e8948a86e8a703a9fed8eebb8ca938598b4abd5e102b2fb096ea->enter($__internal_bce1f5465e32e8948a86e8a703a9fed8eebb8ca938598b4abd5e102b2fb096ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce1f5465e32e8948a86e8a703a9fed8eebb8ca938598b4abd5e102b2fb096ea->leave($__internal_bce1f5465e32e8948a86e8a703a9fed8eebb8ca938598b4abd5e102b2fb096ea_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_0001ae53bb25f760c0fb9a4761f03b75c288e0669b0d51c5c8aa6c2b7514e8b9 = $this->env->getExtension("native_profiler");
        $__internal_0001ae53bb25f760c0fb9a4761f03b75c288e0669b0d51c5c8aa6c2b7514e8b9->enter($__internal_0001ae53bb25f760c0fb9a4761f03b75c288e0669b0d51c5c8aa6c2b7514e8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "

";
        
        $__internal_0001ae53bb25f760c0fb9a4761f03b75c288e0669b0d51c5c8aa6c2b7514e8b9->leave($__internal_0001ae53bb25f760c0fb9a4761f03b75c288e0669b0d51c5c8aa6c2b7514e8b9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_96909d24bd5760569040a52c21e843509f22c5ef83d6f072dd9bdb4ee0416a25 = $this->env->getExtension("native_profiler");
        $__internal_96909d24bd5760569040a52c21e843509f22c5ef83d6f072dd9bdb4ee0416a25->enter($__internal_96909d24bd5760569040a52c21e843509f22c5ef83d6f072dd9bdb4ee0416a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

";
        
        $__internal_96909d24bd5760569040a52c21e843509f22c5ef83d6f072dd9bdb4ee0416a25->leave($__internal_96909d24bd5760569040a52c21e843509f22c5ef83d6f072dd9bdb4ee0416a25_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle::Layout.html.twig";
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
