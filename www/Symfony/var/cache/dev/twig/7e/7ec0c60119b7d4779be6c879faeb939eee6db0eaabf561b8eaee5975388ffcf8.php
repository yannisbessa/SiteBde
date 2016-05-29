<?php

/* @BDESite/Bde/ISEP.html.twig */
class __TwigTemplate_9cdb09623939a917535dec8303d24da8525cbc49bf9245daae71788686950ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEP.html.twig", 4);
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
        $__internal_2092a8b48dd07f139b18686c17b5c8b2512fb988c20c4718be7cc210b8337e1d = $this->env->getExtension("native_profiler");
        $__internal_2092a8b48dd07f139b18686c17b5c8b2512fb988c20c4718be7cc210b8337e1d->enter($__internal_2092a8b48dd07f139b18686c17b5c8b2512fb988c20c4718be7cc210b8337e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2092a8b48dd07f139b18686c17b5c8b2512fb988c20c4718be7cc210b8337e1d->leave($__internal_2092a8b48dd07f139b18686c17b5c8b2512fb988c20c4718be7cc210b8337e1d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11885d1268b46520dd943bf5611c38ba37307a4904f9badc2bcfee6c107046a = $this->env->getExtension("native_profiler");
        $__internal_c11885d1268b46520dd943bf5611c38ba37307a4904f9badc2bcfee6c107046a->enter($__internal_c11885d1268b46520dd943bf5611c38ba37307a4904f9badc2bcfee6c107046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_c11885d1268b46520dd943bf5611c38ba37307a4904f9badc2bcfee6c107046a->leave($__internal_c11885d1268b46520dd943bf5611c38ba37307a4904f9badc2bcfee6c107046a_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_6d965106c8bb6192bac78e7250d669bfe6e056ac2bb0be1ab2aacc2340657b5c = $this->env->getExtension("native_profiler");
        $__internal_6d965106c8bb6192bac78e7250d669bfe6e056ac2bb0be1ab2aacc2340657b5c->enter($__internal_6d965106c8bb6192bac78e7250d669bfe6e056ac2bb0be1ab2aacc2340657b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "  <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEP.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>Institut supérieur d'éléctronique de Paris</h1>

";
        
        $__internal_6d965106c8bb6192bac78e7250d669bfe6e056ac2bb0be1ab2aacc2340657b5c->leave($__internal_6d965106c8bb6192bac78e7250d669bfe6e056ac2bb0be1ab2aacc2340657b5c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_abb04684f285243beffd12fd576dccb13d2b0dbbb1d8298b8afbca155f888db9 = $this->env->getExtension("native_profiler");
        $__internal_abb04684f285243beffd12fd576dccb13d2b0dbbb1d8298b8afbca155f888db9->enter($__internal_abb04684f285243beffd12fd576dccb13d2b0dbbb1d8298b8afbca155f888db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_abb04684f285243beffd12fd576dccb13d2b0dbbb1d8298b8afbca155f888db9->leave($__internal_abb04684f285243beffd12fd576dccb13d2b0dbbb1d8298b8afbca155f888db9_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEP.html.twig";
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
/*                         <h1 style ="color:white";>Institut supérieur d'éléctronique de Paris</h1>*/
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
