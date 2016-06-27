<?php

/* @BDESite/Bde/ISEPA.html.twig */
class __TwigTemplate_b61afcd0b2b2c4b642845c87aab68f4299e2e5afa702b1689e1c5a2d53a4dd79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPA.html.twig", 4);
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
        $__internal_d48b5ff8a6f233fbcaafd5143f2b1f04cc582942a76ab5516b5d883c5b4b82ef = $this->env->getExtension("native_profiler");
        $__internal_d48b5ff8a6f233fbcaafd5143f2b1f04cc582942a76ab5516b5d883c5b4b82ef->enter($__internal_d48b5ff8a6f233fbcaafd5143f2b1f04cc582942a76ab5516b5d883c5b4b82ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPA.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48b5ff8a6f233fbcaafd5143f2b1f04cc582942a76ab5516b5d883c5b4b82ef->leave($__internal_d48b5ff8a6f233fbcaafd5143f2b1f04cc582942a76ab5516b5d883c5b4b82ef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d568f252b7e47df388ecaebefee6d4988210a15a25eb7719186ac1afcdcbd29b = $this->env->getExtension("native_profiler");
        $__internal_d568f252b7e47df388ecaebefee6d4988210a15a25eb7719186ac1afcdcbd29b->enter($__internal_d568f252b7e47df388ecaebefee6d4988210a15a25eb7719186ac1afcdcbd29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "ISEPA";
        
        $__internal_d568f252b7e47df388ecaebefee6d4988210a15a25eb7719186ac1afcdcbd29b->leave($__internal_d568f252b7e47df388ecaebefee6d4988210a15a25eb7719186ac1afcdcbd29b_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_343c3b2460a7cbaef6ba74a9e6cf8438abcd6169165c9b9688329d284d86b9f9 = $this->env->getExtension("native_profiler");
        $__internal_343c3b2460a7cbaef6ba74a9e6cf8438abcd6169165c9b9688329d284d86b9f9->enter($__internal_343c3b2460a7cbaef6ba74a9e6cf8438abcd6169165c9b9688329d284d86b9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPA.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\" >
                        <h1 style=\"color:white\">ISEPA</h1>

";
        
        $__internal_343c3b2460a7cbaef6ba74a9e6cf8438abcd6169165c9b9688329d284d86b9f9->leave($__internal_343c3b2460a7cbaef6ba74a9e6cf8438abcd6169165c9b9688329d284d86b9f9_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53cd32552310b1ec720b622d1a119ae92ad812162a5f52a00b90430b19765b4 = $this->env->getExtension("native_profiler");
        $__internal_e53cd32552310b1ec720b622d1a119ae92ad812162a5f52a00b90430b19765b4->enter($__internal_e53cd32552310b1ec720b622d1a119ae92ad812162a5f52a00b90430b19765b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p> ISEPA</p>


<p>Avec plus de 200 étudiants internationaux par an et plus de 90 universités partenaires dans 40 pays, ISEPA est l’association incontournable pour une école portée sur l'internationale telle que l’ISEP. Créée en octobre 2012 et composée d’une équipe motivée et solidaire, ISEPA a pour objectif d’accueillir les étudiants internationaux. Ainsi nous proposons des activités et des visites et essayons d'effacer les barrières culturelles et linguistiques en organisant des échanges culturels avec les isépiens. Nous nous assurons aussi que les étudiants garderont un excellent souvenir de leur échange à l’ISEP. La particularité d’ISEPA est l’accompagnement des étudiants dans leur projet professionnel (aide à la rédaction de CV et de lettre de motivation). ISEPA est un vrai lieu d’échange entre les isépiens et les étudiants internationaux, où les cultures se mélangent.
Tu es isépien ? Viens découvrir de nouvelles cultures, discute avec les étudiants internationaux venus du monde entier et profite des opportunités pour tes perspectives d’avenir à l’international.
Tu es un étudiant international ? La culture française s’ouvre à toi et participe à la vie étudiante à l’isep.
Intéressé(e) et motivé(e) par ISEPA? N’hésite pas à nous contacter et à t'inscrire sur notre site isepa.fr.
Vous êtes tous bienvenus !</p>

<p>With more than 200 foreign students a year, and 90 affiliated universities in 40 different countries, ISEPA is THE capital organization for a school turned towards an international ambition like ISEP. Founded in 2012, with a motivated and united team, ISEPA has for main goal to welcome foreign students onto our grounds. Accordingly, we offer the possibility to participate to different activities, visit cultural sites and thus, bring down the cultural and language fences by sharing social etiquettes between ISEP students. We also make sure that the students keep some excellent memories from their time in the ISEP School. The uniqueness of ISEPA comes from the companionship between participating students, and the help provided in their professional projects (help to draft a CV and résumés/cover letters). ISEPA is a genuine exchange between ISEP students, and foreign students, where cultures mingle.
You are an ISEP student? Come and discover new customs, chat with foreign students from all around the world, and enjoy opportunities to build future prospects on a global scale.
You are a foreign student? French culture is opening to you, so participate to the ISEP’s student life.
You are interested and motivated to be part of ISEPA? Don’t hesitate anymore, and join us on our website : isepa.fr
Welcome to everybody!</p>

<p>Date de création : Mercredi 26 Septembre 2012</p>
<p>Email : isepa@isep.fr</p>

";
        
        $__internal_e53cd32552310b1ec720b622d1a119ae92ad812162a5f52a00b90430b19765b4->leave($__internal_e53cd32552310b1ec720b622d1a119ae92ad812162a5f52a00b90430b19765b4_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}ISEPA{% endblock %}*/
/* */
/* {% block img %}*/
/*     <header class="intro-header"  style="background-image: url({{asset ('img/ISEPA.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading" >*/
/*                         <h1 style="color:white">ISEPA</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p> ISEPA</p>*/
/* */
/* */
/* <p>Avec plus de 200 étudiants internationaux par an et plus de 90 universités partenaires dans 40 pays, ISEPA est l’association incontournable pour une école portée sur l'internationale telle que l’ISEP. Créée en octobre 2012 et composée d’une équipe motivée et solidaire, ISEPA a pour objectif d’accueillir les étudiants internationaux. Ainsi nous proposons des activités et des visites et essayons d'effacer les barrières culturelles et linguistiques en organisant des échanges culturels avec les isépiens. Nous nous assurons aussi que les étudiants garderont un excellent souvenir de leur échange à l’ISEP. La particularité d’ISEPA est l’accompagnement des étudiants dans leur projet professionnel (aide à la rédaction de CV et de lettre de motivation). ISEPA est un vrai lieu d’échange entre les isépiens et les étudiants internationaux, où les cultures se mélangent.*/
/* Tu es isépien ? Viens découvrir de nouvelles cultures, discute avec les étudiants internationaux venus du monde entier et profite des opportunités pour tes perspectives d’avenir à l’international.*/
/* Tu es un étudiant international ? La culture française s’ouvre à toi et participe à la vie étudiante à l’isep.*/
/* Intéressé(e) et motivé(e) par ISEPA? N’hésite pas à nous contacter et à t'inscrire sur notre site isepa.fr.*/
/* Vous êtes tous bienvenus !</p>*/
/* */
/* <p>With more than 200 foreign students a year, and 90 affiliated universities in 40 different countries, ISEPA is THE capital organization for a school turned towards an international ambition like ISEP. Founded in 2012, with a motivated and united team, ISEPA has for main goal to welcome foreign students onto our grounds. Accordingly, we offer the possibility to participate to different activities, visit cultural sites and thus, bring down the cultural and language fences by sharing social etiquettes between ISEP students. We also make sure that the students keep some excellent memories from their time in the ISEP School. The uniqueness of ISEPA comes from the companionship between participating students, and the help provided in their professional projects (help to draft a CV and résumés/cover letters). ISEPA is a genuine exchange between ISEP students, and foreign students, where cultures mingle.*/
/* You are an ISEP student? Come and discover new customs, chat with foreign students from all around the world, and enjoy opportunities to build future prospects on a global scale.*/
/* You are a foreign student? French culture is opening to you, so participate to the ISEP’s student life.*/
/* You are interested and motivated to be part of ISEPA? Don’t hesitate anymore, and join us on our website : isepa.fr*/
/* Welcome to everybody!</p>*/
/* */
/* <p>Date de création : Mercredi 26 Septembre 2012</p>*/
/* <p>Email : isepa@isep.fr</p>*/
/* */
/* {% endblock %}*/
/* */
