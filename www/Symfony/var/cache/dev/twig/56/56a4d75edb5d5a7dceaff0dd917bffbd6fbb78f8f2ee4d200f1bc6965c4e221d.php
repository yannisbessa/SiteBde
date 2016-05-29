<?php

/* BDESiteBundle:Bde:BoutiqueSite.html.twig */
class __TwigTemplate_e5403a35952504f6db2f7f2eb9aa55949a2dd5e9fa269c7fa851aaf82c3c8fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:BoutiqueSite.html.twig", 4);
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
        $__internal_571f877e6e85ad1c7b321f21dc223f4d1520012cac7301dc176a7800e80013a6 = $this->env->getExtension("native_profiler");
        $__internal_571f877e6e85ad1c7b321f21dc223f4d1520012cac7301dc176a7800e80013a6->enter($__internal_571f877e6e85ad1c7b321f21dc223f4d1520012cac7301dc176a7800e80013a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:BoutiqueSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571f877e6e85ad1c7b321f21dc223f4d1520012cac7301dc176a7800e80013a6->leave($__internal_571f877e6e85ad1c7b321f21dc223f4d1520012cac7301dc176a7800e80013a6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a25ae198919581a86cf8b08e3745ed9b66a59e15bd3886b3fdc2778c3274c0e = $this->env->getExtension("native_profiler");
        $__internal_4a25ae198919581a86cf8b08e3745ed9b66a59e15bd3886b3fdc2778c3274c0e->enter($__internal_4a25ae198919581a86cf8b08e3745ed9b66a59e15bd3886b3fdc2778c3274c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Boutique ";
        
        $__internal_4a25ae198919581a86cf8b08e3745ed9b66a59e15bd3886b3fdc2778c3274c0e->leave($__internal_4a25ae198919581a86cf8b08e3745ed9b66a59e15bd3886b3fdc2778c3274c0e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9546cd1478bd9e77c57ac8bcab76b7f598254335046559540a80d444a0dd08d = $this->env->getExtension("native_profiler");
        $__internal_e9546cd1478bd9e77c57ac8bcab76b7f598254335046559540a80d444a0dd08d->enter($__internal_e9546cd1478bd9e77c57ac8bcab76b7f598254335046559540a80d444a0dd08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> PAGE BOUTIQUE</p>
";
        
        $__internal_e9546cd1478bd9e77c57ac8bcab76b7f598254335046559540a80d444a0dd08d->leave($__internal_e9546cd1478bd9e77c57ac8bcab76b7f598254335046559540a80d444a0dd08d_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:BoutiqueSite.html.twig";
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
/* {% block title %}{{ parent() }} Boutique {% endblock %}*/
/* */
/* {% block body %}*/
/* <p> PAGE BOUTIQUE</p>*/
/* {% endblock %}*/
