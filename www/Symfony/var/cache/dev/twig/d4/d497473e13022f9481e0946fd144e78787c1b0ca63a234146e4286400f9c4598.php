<?php

/* @BDESite/Bde/JUNIORISEP.html.twig */
class __TwigTemplate_ccb0abadac5781d7e4ea97b2df7b68178fdd7269e7e58e01f8a81189c8d4f72f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/JUNIORISEP.html.twig", 4);
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
        $__internal_6a228e71462111ec0b8620449ce1f19597a160b4c62ef3af74ab3a812d173bc6 = $this->env->getExtension("native_profiler");
        $__internal_6a228e71462111ec0b8620449ce1f19597a160b4c62ef3af74ab3a812d173bc6->enter($__internal_6a228e71462111ec0b8620449ce1f19597a160b4c62ef3af74ab3a812d173bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/JUNIORISEP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a228e71462111ec0b8620449ce1f19597a160b4c62ef3af74ab3a812d173bc6->leave($__internal_6a228e71462111ec0b8620449ce1f19597a160b4c62ef3af74ab3a812d173bc6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4634191a0d4cecc1e757d34e603ebd10aa61cd3f20fd08b11e901a55e7bfca73 = $this->env->getExtension("native_profiler");
        $__internal_4634191a0d4cecc1e757d34e603ebd10aa61cd3f20fd08b11e901a55e7bfca73->enter($__internal_4634191a0d4cecc1e757d34e603ebd10aa61cd3f20fd08b11e901a55e7bfca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " JUNIOR ISEP";
        
        $__internal_4634191a0d4cecc1e757d34e603ebd10aa61cd3f20fd08b11e901a55e7bfca73->leave($__internal_4634191a0d4cecc1e757d34e603ebd10aa61cd3f20fd08b11e901a55e7bfca73_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_03dc42f3d8adff225e3c050f676df90d5439be8e697f45618283e5ac4122012d = $this->env->getExtension("native_profiler");
        $__internal_03dc42f3d8adff225e3c050f676df90d5439be8e697f45618283e5ac4122012d->enter($__internal_03dc42f3d8adff225e3c050f676df90d5439be8e697f45618283e5ac4122012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_03dc42f3d8adff225e3c050f676df90d5439be8e697f45618283e5ac4122012d->leave($__internal_03dc42f3d8adff225e3c050f676df90d5439be8e697f45618283e5ac4122012d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f95c03adaa06033805c41c171536b1365fecd07368b8fbc3d7e1abff68d038 = $this->env->getExtension("native_profiler");
        $__internal_a3f95c03adaa06033805c41c171536b1365fecd07368b8fbc3d7e1abff68d038->enter($__internal_a3f95c03adaa06033805c41c171536b1365fecd07368b8fbc3d7e1abff68d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Junior Isep</p>


<p>Créée en 1984, la Junior-Entreprise de l'ISEP se positionne comme la meilleure Junior-Entreprise de France en 2005 et 2008 remportant à deux reprises le prix d'Excellence. Elle a de plus, ces six dernières années, remporté deux labels ingénieur récompensant la meilleure Junior-Entreprise Ingénieur de France, trois labels Dynamisme et un label Communication. Junior ISEP fut 11 fois en Finale du prix d'Excellence qui récompense la meilleure Junior-Entreprise de France. En 2011 et 2012, Junior ISEP a terminé deuxième du prix d'Excellence Européen. Elle le remporte en 2013 et devient la Junior la plus innovante d'Europe.</p>
<p>Junior ISEP ne cesse de s'adapter aux demandes du marché. De plus en plus d'entreprises, de particuliers se tournent vers Junior ISEP pour \"Donner une nouvelle dimension à leurs projets\".
Le professionnalisme et la qualité de service de Junior ISEP l'imposent en tant que leader des Junior-Entreprises ingénieurs. Ceci se traduit par un chiffre d'affaire de 155K en 2012.</p>

<p>Date de création : Samedi 1er Septembre 1984</p>
<p>Email : accueil@juniorisep.com</p>
";
        
        $__internal_a3f95c03adaa06033805c41c171536b1365fecd07368b8fbc3d7e1abff68d038->leave($__internal_a3f95c03adaa06033805c41c171536b1365fecd07368b8fbc3d7e1abff68d038_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/JUNIORISEP.html.twig";
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
