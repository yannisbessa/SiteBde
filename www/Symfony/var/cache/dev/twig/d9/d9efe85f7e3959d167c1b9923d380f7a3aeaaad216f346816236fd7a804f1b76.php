<?php

/* BDESiteBundle:Bde:backpage.html.twig */
class __TwigTemplate_5b1ec951d5766a17df33d5b12626956bf62eff023e49adedfca2755732e7b399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "BDESiteBundle:Bde:backpage.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'BDESite_body' => array($this, 'block_BDESite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1793399f3943c54c11e541f3f340a4b54ff8360919b501fb8de2188ceb411e4 = $this->env->getExtension("native_profiler");
        $__internal_d1793399f3943c54c11e541f3f340a4b54ff8360919b501fb8de2188ceb411e4->enter($__internal_d1793399f3943c54c11e541f3f340a4b54ff8360919b501fb8de2188ceb411e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:backpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1793399f3943c54c11e541f3f340a4b54ff8360919b501fb8de2188ceb411e4->leave($__internal_d1793399f3943c54c11e541f3f340a4b54ff8360919b501fb8de2188ceb411e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3027f1f467ecbf67e4adaf5ede8d6a3087195d794b1a233562d623daa4e3268f = $this->env->getExtension("native_profiler");
        $__internal_3027f1f467ecbf67e4adaf5ede8d6a3087195d794b1a233562d623daa4e3268f->enter($__internal_3027f1f467ecbf67e4adaf5ede8d6a3087195d794b1a233562d623daa4e3268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3027f1f467ecbf67e4adaf5ede8d6a3087195d794b1a233562d623daa4e3268f->leave($__internal_3027f1f467ecbf67e4adaf5ede8d6a3087195d794b1a233562d623daa4e3268f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d544f7739367a784573feb5d95cc71888a3309b6df17c5f15eefda3f87be578 = $this->env->getExtension("native_profiler");
        $__internal_8d544f7739367a784573feb5d95cc71888a3309b6df17c5f15eefda3f87be578->enter($__internal_8d544f7739367a784573feb5d95cc71888a3309b6df17c5f15eefda3f87be578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h1 >Bienvenue sur le back office </h1>

  ";
        // line 13
        $this->displayBlock('BDESite_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_8d544f7739367a784573feb5d95cc71888a3309b6df17c5f15eefda3f87be578->leave($__internal_8d544f7739367a784573feb5d95cc71888a3309b6df17c5f15eefda3f87be578_prof);

    }

    // line 13
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_1e7d277825428753460f21dc6192fa7413993014cee0bdfc318bec91a83ef2e1 = $this->env->getExtension("native_profiler");
        $__internal_1e7d277825428753460f21dc6192fa7413993014cee0bdfc318bec91a83ef2e1->enter($__internal_1e7d277825428753460f21dc6192fa7413993014cee0bdfc318bec91a83ef2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 14
        echo "


  <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\"> Accueil </p>
  <p> calendrier </p>
  ";
        
        $__internal_1e7d277825428753460f21dc6192fa7413993014cee0bdfc318bec91a83ef2e1->leave($__internal_1e7d277825428753460f21dc6192fa7413993014cee0bdfc318bec91a83ef2e1_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:backpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  79 => 14,  73 => 13,  65 => 20,  63 => 13,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1 >Bienvenue sur le back office </h1>*/
/* */
/*   {% block BDESite_body %}*/
/* */
/* */
/* */
/*   <p><a href="{{ path('BDE_site_BAccueil') }}"> Accueil </p>*/
/*   <p> calendrier </p>*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
