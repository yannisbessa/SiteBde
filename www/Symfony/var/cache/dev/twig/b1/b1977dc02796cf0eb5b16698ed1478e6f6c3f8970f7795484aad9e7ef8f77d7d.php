<?php

/* BDESiteBundle:Bde:ISEP.html.twig */
class __TwigTemplate_6e7715d19327641abd7dd2d8a309417415054e5dc03cca02b4d96bfc8decbd0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEP.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c78547b29e377f832be9b6446da1d4bdc0f4110ddbd0465d9d99087a62d8db5 = $this->env->getExtension("native_profiler");
        $__internal_7c78547b29e377f832be9b6446da1d4bdc0f4110ddbd0465d9d99087a62d8db5->enter($__internal_7c78547b29e377f832be9b6446da1d4bdc0f4110ddbd0465d9d99087a62d8db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c78547b29e377f832be9b6446da1d4bdc0f4110ddbd0465d9d99087a62d8db5->leave($__internal_7c78547b29e377f832be9b6446da1d4bdc0f4110ddbd0465d9d99087a62d8db5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_556cb928d655ef4651d0eb22e2a53fdb945612cc215ade7293f9de29ae4c9da1 = $this->env->getExtension("native_profiler");
        $__internal_556cb928d655ef4651d0eb22e2a53fdb945612cc215ade7293f9de29ae4c9da1->enter($__internal_556cb928d655ef4651d0eb22e2a53fdb945612cc215ade7293f9de29ae4c9da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_556cb928d655ef4651d0eb22e2a53fdb945612cc215ade7293f9de29ae4c9da1->leave($__internal_556cb928d655ef4651d0eb22e2a53fdb945612cc215ade7293f9de29ae4c9da1_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_31e5a2bae4e0d0579b2a35b4178f40b747a2ece1d553d475f7245d7f477f6ea1 = $this->env->getExtension("native_profiler");
        $__internal_31e5a2bae4e0d0579b2a35b4178f40b747a2ece1d553d475f7245d7f477f6ea1->enter($__internal_31e5a2bae4e0d0579b2a35b4178f40b747a2ece1d553d475f7245d7f477f6ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "  <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEP.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        

";
        
        $__internal_31e5a2bae4e0d0579b2a35b4178f40b747a2ece1d553d475f7245d7f477f6ea1->leave($__internal_31e5a2bae4e0d0579b2a35b4178f40b747a2ece1d553d475f7245d7f477f6ea1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_761472cd537ad017728fd0098b52053e4ad9af52c96c8c8b94f11d8b5b5b9c26 = $this->env->getExtension("native_profiler");
        $__internal_761472cd537ad017728fd0098b52053e4ad9af52c96c8c8b94f11d8b5b5b9c26->enter($__internal_761472cd537ad017728fd0098b52053e4ad9af52c96c8c8b94f11d8b5b5b9c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
<h1> ISEP </h1>
  <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-lg-12\">
            <p>Dates clés :<p>
<p>1955 : création de l’ISEP, à l’Institut Catholique de Paris</p>
<p>1960 : habilitation du diplôme de l'ISEP par la Commission des Titres d'Ingénieur</p>
<p>1969 : l’ISEP membre de la Fédération des Ecoles Supérieures d’Ingénieurs et de Cadres</p>
<p>1971 : Reconnaissance par l'Etat</p>
<p>2012 : la CTI renouvelle son habilitation à l’ISEP pour la durée maximale de 6 ans</p>
<p></p>
        </div>
        </div>
        <section class=\"col-lg-6\">
          <h2>Nôtre dame des champs</h2> 
      <div class=\"row\">
      <div class=\"col-lg-6\">Premier bâtiment de l'ISEP 28 rue notre dames des champs 75006 Paris</div>
      </div>
      <div class=\"row\">
      <div class=\"col-lg-6\"><p>Métros 4: Saint placide 12: Notre dame des champs 6&13: Montparnasse </p>

<p>Bus: 89 - 94 - 95 - 96 - 68 - 58 - 82</p>
 </div>
      </div>
        </section>
          <section class=\"col-lg-6\">
          <h2>Nôtre dame de lorette</h2>
      <div class=\"row\">
      <div class=\"col-lg-6\">Deuxième bâtiment de l'ISEP 10 rue de Vanves 92130 Issy-les-moulineaux
</div>
      </div>
      <div class=\"row\">
      <div class=\"col-lg-6\">
      <p>Métro 12: Corentin Celton

</p> <p></p><p> Bus : 126 Corentin celton</div>
        </section>

      </div>
      </div>
  
";
        
        $__internal_761472cd537ad017728fd0098b52053e4ad9af52c96c8c8b94f11d8b5b5b9c26->leave($__internal_761472cd537ad017728fd0098b52053e4ad9af52c96c8c8b94f11d8b5b5b9c26_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 16,  55 => 8,  49 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/ISEP.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEP{% endblock %}*/
/* {% block img %}*/
/*   <header class="intro-header" style="background-image: url({{asset ('img/ISEP.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         */
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <h1> ISEP </h1>*/
/*   <div class="container">*/
/* */
/*       <div class="row">*/
/* */
/*         <div class="col-lg-12">*/
/*             <p>Dates clés :<p>*/
/* <p>1955 : création de l’ISEP, à l’Institut Catholique de Paris</p>*/
/* <p>1960 : habilitation du diplôme de l'ISEP par la Commission des Titres d'Ingénieur</p>*/
/* <p>1969 : l’ISEP membre de la Fédération des Ecoles Supérieures d’Ingénieurs et de Cadres</p>*/
/* <p>1971 : Reconnaissance par l'Etat</p>*/
/* <p>2012 : la CTI renouvelle son habilitation à l’ISEP pour la durée maximale de 6 ans</p>*/
/* <p></p>*/
/*         </div>*/
/*         </div>*/
/*         <section class="col-lg-6">*/
/*           <h2>Nôtre dame des champs</h2> */
/*       <div class="row">*/
/*       <div class="col-lg-6">Premier bâtiment de l'ISEP 28 rue notre dames des champs 75006 Paris</div>*/
/*       </div>*/
/*       <div class="row">*/
/*       <div class="col-lg-6"><p>Métros 4: Saint placide 12: Notre dame des champs 6&13: Montparnasse </p>*/
/* */
/* <p>Bus: 89 - 94 - 95 - 96 - 68 - 58 - 82</p>*/
/*  </div>*/
/*       </div>*/
/*         </section>*/
/*           <section class="col-lg-6">*/
/*           <h2>Nôtre dame de lorette</h2>*/
/*       <div class="row">*/
/*       <div class="col-lg-6">Deuxième bâtiment de l'ISEP 10 rue de Vanves 92130 Issy-les-moulineaux*/
/* </div>*/
/*       </div>*/
/*       <div class="row">*/
/*       <div class="col-lg-6">*/
/*       <p>Métro 12: Corentin Celton*/
/* */
/* </p> <p></p><p> Bus : 126 Corentin celton</div>*/
/*         </section>*/
/* */
/*       </div>*/
/*       </div>*/
/*   */
/* {% endblock %}*/
