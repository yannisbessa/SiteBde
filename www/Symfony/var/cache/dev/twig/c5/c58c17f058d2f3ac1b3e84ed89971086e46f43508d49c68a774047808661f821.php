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
            'body' => array($this, 'block_body'),
            'img' => array($this, 'block_img'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37f62888cc2e41e9cd643229a8a5e4fede7b748b745cebc6a8abcc62f901b1aa = $this->env->getExtension("native_profiler");
        $__internal_37f62888cc2e41e9cd643229a8a5e4fede7b748b745cebc6a8abcc62f901b1aa->enter($__internal_37f62888cc2e41e9cd643229a8a5e4fede7b748b745cebc6a8abcc62f901b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f62888cc2e41e9cd643229a8a5e4fede7b748b745cebc6a8abcc62f901b1aa->leave($__internal_37f62888cc2e41e9cd643229a8a5e4fede7b748b745cebc6a8abcc62f901b1aa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f2484e236f07c16469b403d729ef7d800a41e933cc97a58603d39705a088c8d = $this->env->getExtension("native_profiler");
        $__internal_3f2484e236f07c16469b403d729ef7d800a41e933cc97a58603d39705a088c8d->enter($__internal_3f2484e236f07c16469b403d729ef7d800a41e933cc97a58603d39705a088c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

";
        
        $__internal_3f2484e236f07c16469b403d729ef7d800a41e933cc97a58603d39705a088c8d->leave($__internal_3f2484e236f07c16469b403d729ef7d800a41e933cc97a58603d39705a088c8d_prof);

    }

    // line 11
    public function block_img($context, array $blocks = array())
    {
        $__internal_29608e48e8a5765279c40d075b7f722f06ce360d48978e8e7c996f67a6fec16c = $this->env->getExtension("native_profiler");
        $__internal_29608e48e8a5765279c40d075b7f722f06ce360d48978e8e7c996f67a6fec16c->enter($__internal_29608e48e8a5765279c40d075b7f722f06ce360d48978e8e7c996f67a6fec16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 12
        echo "

";
        
        $__internal_29608e48e8a5765279c40d075b7f722f06ce360d48978e8e7c996f67a6fec16c->leave($__internal_29608e48e8a5765279c40d075b7f722f06ce360d48978e8e7c996f67a6fec16c_prof);

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
        return array (  56 => 12,  50 => 11,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* {% block img %}*/
/* */
/* */
/* {% endblock %}*/
