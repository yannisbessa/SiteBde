<?php

/* @BDESite/Bde/backpage.html.twig */
class __TwigTemplate_50cf09fa21e572d4faf1dc8ac85e20252d7997e8a53733fbefce83d7ad694e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@BDESite/Bde/backpage.html.twig", 3);
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
        $__internal_822209e1e93ca2427287254df3244c095f3abfb0b4738a41069f6b114941f07a = $this->env->getExtension("native_profiler");
        $__internal_822209e1e93ca2427287254df3244c095f3abfb0b4738a41069f6b114941f07a->enter($__internal_822209e1e93ca2427287254df3244c095f3abfb0b4738a41069f6b114941f07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/backpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822209e1e93ca2427287254df3244c095f3abfb0b4738a41069f6b114941f07a->leave($__internal_822209e1e93ca2427287254df3244c095f3abfb0b4738a41069f6b114941f07a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db96eed50dddcafd14b601159e18164613e946d36910049f6ee6ec9a28f46632 = $this->env->getExtension("native_profiler");
        $__internal_db96eed50dddcafd14b601159e18164613e946d36910049f6ee6ec9a28f46632->enter($__internal_db96eed50dddcafd14b601159e18164613e946d36910049f6ee6ec9a28f46632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db96eed50dddcafd14b601159e18164613e946d36910049f6ee6ec9a28f46632->leave($__internal_db96eed50dddcafd14b601159e18164613e946d36910049f6ee6ec9a28f46632_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_61170f70f024ca00e2399b43c624cffb6b3c6452d938afb33a20cd7ffdeefa9b = $this->env->getExtension("native_profiler");
        $__internal_61170f70f024ca00e2399b43c624cffb6b3c6452d938afb33a20cd7ffdeefa9b->enter($__internal_61170f70f024ca00e2399b43c624cffb6b3c6452d938afb33a20cd7ffdeefa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h1 >Bienvenue sur le back office </h1>

  ";
        // line 13
        $this->displayBlock('BDESite_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_61170f70f024ca00e2399b43c624cffb6b3c6452d938afb33a20cd7ffdeefa9b->leave($__internal_61170f70f024ca00e2399b43c624cffb6b3c6452d938afb33a20cd7ffdeefa9b_prof);

    }

    // line 13
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_6a2f41af7a26d6a590c927f1b151843dadec4459ac1dc24180ea07e2cf1c3633 = $this->env->getExtension("native_profiler");
        $__internal_6a2f41af7a26d6a590c927f1b151843dadec4459ac1dc24180ea07e2cf1c3633->enter($__internal_6a2f41af7a26d6a590c927f1b151843dadec4459ac1dc24180ea07e2cf1c3633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 14
        echo "


  <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\"> Accueil </p>
  <p> calendrier </p>
  ";
        
        $__internal_6a2f41af7a26d6a590c927f1b151843dadec4459ac1dc24180ea07e2cf1c3633->leave($__internal_6a2f41af7a26d6a590c927f1b151843dadec4459ac1dc24180ea07e2cf1c3633_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/backpage.html.twig";
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
