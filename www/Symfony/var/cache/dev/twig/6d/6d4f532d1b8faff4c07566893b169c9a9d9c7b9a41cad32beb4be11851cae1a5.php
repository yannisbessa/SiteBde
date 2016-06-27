<?php

/* BDESiteBundle:Bde:ISEPBANDS.html.twig */
class __TwigTemplate_accd3ff165e16017170621d13f752bd8e8a0b585ef0318bf35cbe35eaff9f329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPBANDS.html.twig", 5);
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
        $__internal_4e7de27e7d6da26777e07cc9dd077bb7eb14ba28ec4e44387c1ccc8bf41e1597 = $this->env->getExtension("native_profiler");
        $__internal_4e7de27e7d6da26777e07cc9dd077bb7eb14ba28ec4e44387c1ccc8bf41e1597->enter($__internal_4e7de27e7d6da26777e07cc9dd077bb7eb14ba28ec4e44387c1ccc8bf41e1597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPBANDS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7de27e7d6da26777e07cc9dd077bb7eb14ba28ec4e44387c1ccc8bf41e1597->leave($__internal_4e7de27e7d6da26777e07cc9dd077bb7eb14ba28ec4e44387c1ccc8bf41e1597_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a42e8667388ec8d8ca0ed7b3c614974131691d606acc2ff6f68f97fe15193236 = $this->env->getExtension("native_profiler");
        $__internal_a42e8667388ec8d8ca0ed7b3c614974131691d606acc2ff6f68f97fe15193236->enter($__internal_a42e8667388ec8d8ca0ed7b3c614974131691d606acc2ff6f68f97fe15193236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPBANDS";
        
        $__internal_a42e8667388ec8d8ca0ed7b3c614974131691d606acc2ff6f68f97fe15193236->leave($__internal_a42e8667388ec8d8ca0ed7b3c614974131691d606acc2ff6f68f97fe15193236_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_3d610f4059a40340ab6888895a6e27eed73ae82b12c7e103ddcd04bc49c0e9d6 = $this->env->getExtension("native_profiler");
        $__internal_3d610f4059a40340ab6888895a6e27eed73ae82b12c7e103ddcd04bc49c0e9d6->enter($__internal_3d610f4059a40340ab6888895a6e27eed73ae82b12c7e103ddcd04bc49c0e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPBANDS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>ISEP BANDS</h1>

";
        
        $__internal_3d610f4059a40340ab6888895a6e27eed73ae82b12c7e103ddcd04bc49c0e9d6->leave($__internal_3d610f4059a40340ab6888895a6e27eed73ae82b12c7e103ddcd04bc49c0e9d6_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7f68f808b473b41b986640a0928f236ed9ae1257848f3a03fed425f2b2604cc = $this->env->getExtension("native_profiler");
        $__internal_a7f68f808b473b41b986640a0928f236ed9ae1257848f3a03fed425f2b2604cc->enter($__internal_a7f68f808b473b41b986640a0928f236ed9ae1257848f3a03fed425f2b2604cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p>ISEP BANDS</p>


<p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. 
N'hésitez pas à allez sur notre page Facebook :</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mercredi 1er Septembre 2010</p>
<p>Email : isepbands@isep.fr</p>
";
        
        $__internal_a7f68f808b473b41b986640a0928f236ed9ae1257848f3a03fed425f2b2604cc->leave($__internal_a7f68f808b473b41b986640a0928f236ed9ae1257848f3a03fed425f2b2604cc_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPBANDS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 7,  11 => 5,);
    }
}
/* */
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEPBANDS{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPBANDS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:white";>ISEP BANDS</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP BANDS</p>*/
/* */
/* */
/* <p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. */
/* N'hésitez pas à allez sur notre page Facebook :</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Mercredi 1er Septembre 2010</p>*/
/* <p>Email : isepbands@isep.fr</p>*/
/* {% endblock %}*/
