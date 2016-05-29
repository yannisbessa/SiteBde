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
        $__internal_42467586cf2606d208eeb106294cf0c253ae238f1ac1194920ab43bb4e7b0f4a = $this->env->getExtension("native_profiler");
        $__internal_42467586cf2606d208eeb106294cf0c253ae238f1ac1194920ab43bb4e7b0f4a->enter($__internal_42467586cf2606d208eeb106294cf0c253ae238f1ac1194920ab43bb4e7b0f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42467586cf2606d208eeb106294cf0c253ae238f1ac1194920ab43bb4e7b0f4a->leave($__internal_42467586cf2606d208eeb106294cf0c253ae238f1ac1194920ab43bb4e7b0f4a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8147e84d5cb3657c3a7d3fa4c9c15a7421a98b4f8c18704ce0c3677b3aab872 = $this->env->getExtension("native_profiler");
        $__internal_d8147e84d5cb3657c3a7d3fa4c9c15a7421a98b4f8c18704ce0c3677b3aab872->enter($__internal_d8147e84d5cb3657c3a7d3fa4c9c15a7421a98b4f8c18704ce0c3677b3aab872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_d8147e84d5cb3657c3a7d3fa4c9c15a7421a98b4f8c18704ce0c3677b3aab872->leave($__internal_d8147e84d5cb3657c3a7d3fa4c9c15a7421a98b4f8c18704ce0c3677b3aab872_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_2ef82f18d00fca19bf118e6d3d318097234002cddadc3316c1d19a1e83b56daa = $this->env->getExtension("native_profiler");
        $__internal_2ef82f18d00fca19bf118e6d3d318097234002cddadc3316c1d19a1e83b56daa->enter($__internal_2ef82f18d00fca19bf118e6d3d318097234002cddadc3316c1d19a1e83b56daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "  <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEP.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        

";
        
        $__internal_2ef82f18d00fca19bf118e6d3d318097234002cddadc3316c1d19a1e83b56daa->leave($__internal_2ef82f18d00fca19bf118e6d3d318097234002cddadc3316c1d19a1e83b56daa_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3266651dd4959f77de0402460df22493fe6f6defafdea5768ee43b4abe176605 = $this->env->getExtension("native_profiler");
        $__internal_3266651dd4959f77de0402460df22493fe6f6defafdea5768ee43b4abe176605->enter($__internal_3266651dd4959f77de0402460df22493fe6f6defafdea5768ee43b4abe176605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3266651dd4959f77de0402460df22493fe6f6defafdea5768ee43b4abe176605->leave($__internal_3266651dd4959f77de0402460df22493fe6f6defafdea5768ee43b4abe176605_prof);

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
