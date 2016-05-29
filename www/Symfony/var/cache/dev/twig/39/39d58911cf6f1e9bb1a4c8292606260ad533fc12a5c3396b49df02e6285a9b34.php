<?php

/* BDESiteBundle:Bde/Public:ISEP.html.twig */
class __TwigTemplate_5ab944def26c5913d28f9aff9e3bf63a9f7ad1074ff60e4079811119baf2166e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde/Public:ISEP.html.twig", 4);
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
        $__internal_79fd9eac0718959d9be1aa94622a8fe945eaf49f0e585ff8f0cc20f3a48bb4a2 = $this->env->getExtension("native_profiler");
        $__internal_79fd9eac0718959d9be1aa94622a8fe945eaf49f0e585ff8f0cc20f3a48bb4a2->enter($__internal_79fd9eac0718959d9be1aa94622a8fe945eaf49f0e585ff8f0cc20f3a48bb4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde/Public:ISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79fd9eac0718959d9be1aa94622a8fe945eaf49f0e585ff8f0cc20f3a48bb4a2->leave($__internal_79fd9eac0718959d9be1aa94622a8fe945eaf49f0e585ff8f0cc20f3a48bb4a2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c5d91d72a2d9e44a21cb916322f06678c03f31eae4f4f92a36a4214636f8343 = $this->env->getExtension("native_profiler");
        $__internal_2c5d91d72a2d9e44a21cb916322f06678c03f31eae4f4f92a36a4214636f8343->enter($__internal_2c5d91d72a2d9e44a21cb916322f06678c03f31eae4f4f92a36a4214636f8343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_2c5d91d72a2d9e44a21cb916322f06678c03f31eae4f4f92a36a4214636f8343->leave($__internal_2c5d91d72a2d9e44a21cb916322f06678c03f31eae4f4f92a36a4214636f8343_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_3b59a6c186ab5b663bc1e92925edcb07d050a4993de80c69d3b9bdda04fba83d = $this->env->getExtension("native_profiler");
        $__internal_3b59a6c186ab5b663bc1e92925edcb07d050a4993de80c69d3b9bdda04fba83d->enter($__internal_3b59a6c186ab5b663bc1e92925edcb07d050a4993de80c69d3b9bdda04fba83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "  <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEP.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        

";
        
        $__internal_3b59a6c186ab5b663bc1e92925edcb07d050a4993de80c69d3b9bdda04fba83d->leave($__internal_3b59a6c186ab5b663bc1e92925edcb07d050a4993de80c69d3b9bdda04fba83d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f49c0d23a3805af673206a297a36b6a77b11d0920f3b0486b3738b308494bea = $this->env->getExtension("native_profiler");
        $__internal_3f49c0d23a3805af673206a297a36b6a77b11d0920f3b0486b3738b308494bea->enter($__internal_3f49c0d23a3805af673206a297a36b6a77b11d0920f3b0486b3738b308494bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f49c0d23a3805af673206a297a36b6a77b11d0920f3b0486b3738b308494bea->leave($__internal_3f49c0d23a3805af673206a297a36b6a77b11d0920f3b0486b3738b308494bea_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde/Public:ISEP.html.twig";
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
