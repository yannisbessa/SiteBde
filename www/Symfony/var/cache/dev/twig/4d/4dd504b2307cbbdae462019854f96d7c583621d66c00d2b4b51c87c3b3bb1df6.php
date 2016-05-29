<?php

/* BDESiteBundle:Bde:AstuceSite.html.twig */
class __TwigTemplate_7549e6d5368d1dc429518e73da8303320cab7031bb835f47806c7c4800847241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:AstuceSite.html.twig", 4);
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
        $__internal_27f0a21182f021b7287ab154d97046e9f15325dce082d949762b2b45a1d2005a = $this->env->getExtension("native_profiler");
        $__internal_27f0a21182f021b7287ab154d97046e9f15325dce082d949762b2b45a1d2005a->enter($__internal_27f0a21182f021b7287ab154d97046e9f15325dce082d949762b2b45a1d2005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:AstuceSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f0a21182f021b7287ab154d97046e9f15325dce082d949762b2b45a1d2005a->leave($__internal_27f0a21182f021b7287ab154d97046e9f15325dce082d949762b2b45a1d2005a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e326ab308b2e9cf836af7e8f716d53c20c217d488cfd1643eb6e804a0e4d809 = $this->env->getExtension("native_profiler");
        $__internal_7e326ab308b2e9cf836af7e8f716d53c20c217d488cfd1643eb6e804a0e4d809->enter($__internal_7e326ab308b2e9cf836af7e8f716d53c20c217d488cfd1643eb6e804a0e4d809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " 7 petites astuces ";
        
        $__internal_7e326ab308b2e9cf836af7e8f716d53c20c217d488cfd1643eb6e804a0e4d809->leave($__internal_7e326ab308b2e9cf836af7e8f716d53c20c217d488cfd1643eb6e804a0e4d809_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0be0d2d735df991dc51cf729cf7fa7f1c6b635d7e6c5c78c54095dda8b0611c = $this->env->getExtension("native_profiler");
        $__internal_a0be0d2d735df991dc51cf729cf7fa7f1c6b635d7e6c5c78c54095dda8b0611c->enter($__internal_a0be0d2d735df991dc51cf729cf7fa7f1c6b635d7e6c5c78c54095dda8b0611c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> 7 petites astuces</p>
";
        
        $__internal_a0be0d2d735df991dc51cf729cf7fa7f1c6b635d7e6c5c78c54095dda8b0611c->leave($__internal_a0be0d2d735df991dc51cf729cf7fa7f1c6b635d7e6c5c78c54095dda8b0611c_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:AstuceSite.html.twig";
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
