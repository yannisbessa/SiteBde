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
        $__internal_5a518d81f6c6703a48c206c9dcba01a62f9f388411f5bd9b26bd9fee0b086b05 = $this->env->getExtension("native_profiler");
        $__internal_5a518d81f6c6703a48c206c9dcba01a62f9f388411f5bd9b26bd9fee0b086b05->enter($__internal_5a518d81f6c6703a48c206c9dcba01a62f9f388411f5bd9b26bd9fee0b086b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:backpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a518d81f6c6703a48c206c9dcba01a62f9f388411f5bd9b26bd9fee0b086b05->leave($__internal_5a518d81f6c6703a48c206c9dcba01a62f9f388411f5bd9b26bd9fee0b086b05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c77f8a330e8a88ef3c2bef25d928fc377dbd1f7746b13e835baaa46b35d1a12 = $this->env->getExtension("native_profiler");
        $__internal_3c77f8a330e8a88ef3c2bef25d928fc377dbd1f7746b13e835baaa46b35d1a12->enter($__internal_3c77f8a330e8a88ef3c2bef25d928fc377dbd1f7746b13e835baaa46b35d1a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c77f8a330e8a88ef3c2bef25d928fc377dbd1f7746b13e835baaa46b35d1a12->leave($__internal_3c77f8a330e8a88ef3c2bef25d928fc377dbd1f7746b13e835baaa46b35d1a12_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4f07505d033fa63a087bb0f4a363540f24ecc3bfba1f7c6bb2645871380775 = $this->env->getExtension("native_profiler");
        $__internal_6c4f07505d033fa63a087bb0f4a363540f24ecc3bfba1f7c6bb2645871380775->enter($__internal_6c4f07505d033fa63a087bb0f4a363540f24ecc3bfba1f7c6bb2645871380775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h1 >Bienvenue sur le back office </h1>

  ";
        // line 13
        $this->displayBlock('BDESite_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_6c4f07505d033fa63a087bb0f4a363540f24ecc3bfba1f7c6bb2645871380775->leave($__internal_6c4f07505d033fa63a087bb0f4a363540f24ecc3bfba1f7c6bb2645871380775_prof);

    }

    // line 13
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_74297ca385e354decf58fef50c0f00cceb81f43cd30937c65ab19287a0949c9a = $this->env->getExtension("native_profiler");
        $__internal_74297ca385e354decf58fef50c0f00cceb81f43cd30937c65ab19287a0949c9a->enter($__internal_74297ca385e354decf58fef50c0f00cceb81f43cd30937c65ab19287a0949c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 14
        echo "


  <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\"> Accueil </p>
  <p> calendrier </p>
  ";
        
        $__internal_74297ca385e354decf58fef50c0f00cceb81f43cd30937c65ab19287a0949c9a->leave($__internal_74297ca385e354decf58fef50c0f00cceb81f43cd30937c65ab19287a0949c9a_prof);

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
