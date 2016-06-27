<?php

/* BDESiteBundle:Bde:JUNIORISEP.html.twig */
class __TwigTemplate_5423e17820acc8d7e1a22b1f14a5826a43be83ce4f94354ded84a94c3f3f3e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:JUNIORISEP.html.twig", 4);
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
        $__internal_850300075e180bc41cfc6ba3d0e512b73df08eb3b7b788e67abe0c29adcd865f = $this->env->getExtension("native_profiler");
        $__internal_850300075e180bc41cfc6ba3d0e512b73df08eb3b7b788e67abe0c29adcd865f->enter($__internal_850300075e180bc41cfc6ba3d0e512b73df08eb3b7b788e67abe0c29adcd865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:JUNIORISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850300075e180bc41cfc6ba3d0e512b73df08eb3b7b788e67abe0c29adcd865f->leave($__internal_850300075e180bc41cfc6ba3d0e512b73df08eb3b7b788e67abe0c29adcd865f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c37fb7a69c5549fcc0fb7b3344fba1386c564967850c6065ec570dc39aace206 = $this->env->getExtension("native_profiler");
        $__internal_c37fb7a69c5549fcc0fb7b3344fba1386c564967850c6065ec570dc39aace206->enter($__internal_c37fb7a69c5549fcc0fb7b3344fba1386c564967850c6065ec570dc39aace206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " JUNIOR ISEP";
        
        $__internal_c37fb7a69c5549fcc0fb7b3344fba1386c564967850c6065ec570dc39aace206->leave($__internal_c37fb7a69c5549fcc0fb7b3344fba1386c564967850c6065ec570dc39aace206_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_023738862d1ee696182ff35a96246c162c70c6f151b05283013aeddba7e2842d = $this->env->getExtension("native_profiler");
        $__internal_023738862d1ee696182ff35a96246c162c70c6f151b05283013aeddba7e2842d->enter($__internal_023738862d1ee696182ff35a96246c162c70c6f151b05283013aeddba7e2842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/JUNIORISEP.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:black\";>Junior Isep</h1>

";
        
        $__internal_023738862d1ee696182ff35a96246c162c70c6f151b05283013aeddba7e2842d->leave($__internal_023738862d1ee696182ff35a96246c162c70c6f151b05283013aeddba7e2842d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0ff405931b5e7701bd59c8c66b5dba445c7e95cdcef41f41d67b0d0d6734e05 = $this->env->getExtension("native_profiler");
        $__internal_a0ff405931b5e7701bd59c8c66b5dba445c7e95cdcef41f41d67b0d0d6734e05->enter($__internal_a0ff405931b5e7701bd59c8c66b5dba445c7e95cdcef41f41d67b0d0d6734e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Junior Isep</p>


<p>Créée en 1984, la Junior-Entreprise de l'ISEP se positionne comme la meilleure Junior-Entreprise de France en 2005 et 2008 remportant à deux reprises le prix d'Excellence. Elle a de plus, ces six dernières années, remporté deux labels ingénieur récompensant la meilleure Junior-Entreprise Ingénieur de France, trois labels Dynamisme et un label Communication. Junior ISEP fut 11 fois en Finale du prix d'Excellence qui récompense la meilleure Junior-Entreprise de France. En 2011 et 2012, Junior ISEP a terminé deuxième du prix d'Excellence Européen. Elle le remporte en 2013 et devient la Junior la plus innovante d'Europe.</p>
<p>Junior ISEP ne cesse de s'adapter aux demandes du marché. De plus en plus d'entreprises, de particuliers se tournent vers Junior ISEP pour \"Donner une nouvelle dimension à leurs projets\".
Le professionnalisme et la qualité de service de Junior ISEP l'imposent en tant que leader des Junior-Entreprises ingénieurs. Ceci se traduit par un chiffre d'affaire de 155K en 2012.</p>

<p>Date de création : Samedi 1er Septembre 1984</p>
<p>Email : accueil@juniorisep.com</p>
";
        
        $__internal_a0ff405931b5e7701bd59c8c66b5dba445c7e95cdcef41f41d67b0d0d6734e05->leave($__internal_a0ff405931b5e7701bd59c8c66b5dba445c7e95cdcef41f41d67b0d0d6734e05_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:JUNIORISEP.html.twig";
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
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} JUNIOR ISEP{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/JUNIORISEP.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:black";>Junior Isep</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>Junior Isep</p>*/
/* */
/* */
/* <p>Créée en 1984, la Junior-Entreprise de l'ISEP se positionne comme la meilleure Junior-Entreprise de France en 2005 et 2008 remportant à deux reprises le prix d'Excellence. Elle a de plus, ces six dernières années, remporté deux labels ingénieur récompensant la meilleure Junior-Entreprise Ingénieur de France, trois labels Dynamisme et un label Communication. Junior ISEP fut 11 fois en Finale du prix d'Excellence qui récompense la meilleure Junior-Entreprise de France. En 2011 et 2012, Junior ISEP a terminé deuxième du prix d'Excellence Européen. Elle le remporte en 2013 et devient la Junior la plus innovante d'Europe.</p>*/
/* <p>Junior ISEP ne cesse de s'adapter aux demandes du marché. De plus en plus d'entreprises, de particuliers se tournent vers Junior ISEP pour "Donner une nouvelle dimension à leurs projets".*/
/* Le professionnalisme et la qualité de service de Junior ISEP l'imposent en tant que leader des Junior-Entreprises ingénieurs. Ceci se traduit par un chiffre d'affaire de 155K en 2012.</p>*/
/* */
/* <p>Date de création : Samedi 1er Septembre 1984</p>*/
/* <p>Email : accueil@juniorisep.com</p>*/
/* {% endblock %}*/
