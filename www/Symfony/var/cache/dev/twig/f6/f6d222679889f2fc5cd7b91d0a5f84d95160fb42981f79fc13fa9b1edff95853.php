<?php

/* @BDESite/Bde/BoutiqueSite.html.twig */
class __TwigTemplate_69d3a40c74bb9525ec6c16ca3536a65e2de5adff884c27c4d3c477b8d9962a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/BoutiqueSite.html.twig", 4);
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
        $__internal_5a294e5712e0ff2cf5391fe06fc562f11e51d2773329aa02a7ecf87665ad6fb3 = $this->env->getExtension("native_profiler");
        $__internal_5a294e5712e0ff2cf5391fe06fc562f11e51d2773329aa02a7ecf87665ad6fb3->enter($__internal_5a294e5712e0ff2cf5391fe06fc562f11e51d2773329aa02a7ecf87665ad6fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/BoutiqueSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a294e5712e0ff2cf5391fe06fc562f11e51d2773329aa02a7ecf87665ad6fb3->leave($__internal_5a294e5712e0ff2cf5391fe06fc562f11e51d2773329aa02a7ecf87665ad6fb3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_447c9ace1c9735f60face00c9e20068605223412aafd247940694ffce865ae16 = $this->env->getExtension("native_profiler");
        $__internal_447c9ace1c9735f60face00c9e20068605223412aafd247940694ffce865ae16->enter($__internal_447c9ace1c9735f60face00c9e20068605223412aafd247940694ffce865ae16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Boutique ";
        
        $__internal_447c9ace1c9735f60face00c9e20068605223412aafd247940694ffce865ae16->leave($__internal_447c9ace1c9735f60face00c9e20068605223412aafd247940694ffce865ae16_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1a0eb65283ea1b36bfd9b46ea4908d65aba385c6cf0b598856dd698206eac67 = $this->env->getExtension("native_profiler");
        $__internal_c1a0eb65283ea1b36bfd9b46ea4908d65aba385c6cf0b598856dd698206eac67->enter($__internal_c1a0eb65283ea1b36bfd9b46ea4908d65aba385c6cf0b598856dd698206eac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> PAGE BOUTIQUE</p>
";
        
        $__internal_c1a0eb65283ea1b36bfd9b46ea4908d65aba385c6cf0b598856dd698206eac67->leave($__internal_c1a0eb65283ea1b36bfd9b46ea4908d65aba385c6cf0b598856dd698206eac67_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/BoutiqueSite.html.twig";
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
