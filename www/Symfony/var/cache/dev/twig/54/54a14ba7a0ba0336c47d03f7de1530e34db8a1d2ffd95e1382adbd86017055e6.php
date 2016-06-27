<?php

/* BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig */
class __TwigTemplate_a9c37da33694d02d8c72c3f7f399c04368f329025b2be37494dc70be877d01a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig", 4);
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
        $__internal_305b949c87a16dc311b57aa65fde7204bbd773ac1049f6b9a2f3e8965c8c79f8 = $this->env->getExtension("native_profiler");
        $__internal_305b949c87a16dc311b57aa65fde7204bbd773ac1049f6b9a2f3e8965c8c79f8->enter($__internal_305b949c87a16dc311b57aa65fde7204bbd773ac1049f6b9a2f3e8965c8c79f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305b949c87a16dc311b57aa65fde7204bbd773ac1049f6b9a2f3e8965c8c79f8->leave($__internal_305b949c87a16dc311b57aa65fde7204bbd773ac1049f6b9a2f3e8965c8c79f8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9184281cf00ad6dfdd1ce7de3117ba2462472601561092b02ce57b1b81192fae = $this->env->getExtension("native_profiler");
        $__internal_9184281cf00ad6dfdd1ce7de3117ba2462472601561092b02ce57b1b81192fae->enter($__internal_9184281cf00ad6dfdd1ce7de3117ba2462472601561092b02ce57b1b81192fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Transaharienne";
        
        $__internal_9184281cf00ad6dfdd1ce7de3117ba2462472601561092b02ce57b1b81192fae->leave($__internal_9184281cf00ad6dfdd1ce7de3117ba2462472601561092b02ce57b1b81192fae_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_816f83ae326ec271710f466d2a61568e414092e53bde15a61d000c58ee9c8ca4 = $this->env->getExtension("native_profiler");
        $__internal_816f83ae326ec271710f466d2a61568e414092e53bde15a61d000c58ee9c8ca4->enter($__internal_816f83ae326ec271710f466d2a61568e414092e53bde15a61d000c58ee9c8ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPTRANSHARIENNE.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:orange\";>Transaharienne</h1>

";
        
        $__internal_816f83ae326ec271710f466d2a61568e414092e53bde15a61d000c58ee9c8ca4->leave($__internal_816f83ae326ec271710f466d2a61568e414092e53bde15a61d000c58ee9c8ca4_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_89995e34524263a6e8bcc6a86285b7f0d0d3ac9a5843362870c87683650dba10 = $this->env->getExtension("native_profiler");
        $__internal_89995e34524263a6e8bcc6a86285b7f0d0d3ac9a5843362870c87683650dba10->enter($__internal_89995e34524263a6e8bcc6a86285b7f0d0d3ac9a5843362870c87683650dba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Transahariennes</p>


<p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. 
Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. 
La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.
Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..
Un séjour dépaysant duquel vous reviendrez fascinés !</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Lundi 1er Mars 1999</p>
<p>Email : transaharienne@isep.fr</p>
";
        
        $__internal_89995e34524263a6e8bcc6a86285b7f0d0d3ac9a5843362870c87683650dba10->leave($__internal_89995e34524263a6e8bcc6a86285b7f0d0d3ac9a5843362870c87683650dba10_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig";
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
/* {% block title %}{{ parent() }} Transaharienne{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPTRANSHARIENNE.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:orange";>Transaharienne</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>Transahariennes</p>*/
/* */
/* */
/* <p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. */
/* Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. */
/* La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.*/
/* Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..*/
/* Un séjour dépaysant duquel vous reviendrez fascinés !</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Lundi 1er Mars 1999</p>*/
/* <p>Email : transaharienne@isep.fr</p>*/
/* {% endblock %}*/
/* */
/* */
