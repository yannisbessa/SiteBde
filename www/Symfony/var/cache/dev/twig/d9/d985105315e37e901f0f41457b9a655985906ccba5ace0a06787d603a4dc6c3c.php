<?php

/* @BDESite/Bde/voirAccueil.html.twig */
class __TwigTemplate_a782a404397de2b8a0e9d1da90fdc306d302bcac3cbf90bcea06f5c4307760c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/voirAccueil.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d88d6ce292d6f3bab08ca1660125167740aebaac3bef69ca52931d9ca2cdd22 = $this->env->getExtension("native_profiler");
        $__internal_4d88d6ce292d6f3bab08ca1660125167740aebaac3bef69ca52931d9ca2cdd22->enter($__internal_4d88d6ce292d6f3bab08ca1660125167740aebaac3bef69ca52931d9ca2cdd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/voirAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d88d6ce292d6f3bab08ca1660125167740aebaac3bef69ca52931d9ca2cdd22->leave($__internal_4d88d6ce292d6f3bab08ca1660125167740aebaac3bef69ca52931d9ca2cdd22_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dc50cecd7a3e61b1a7c9231795a66724047ca38a25fa2c635df771307ff317c = $this->env->getExtension("native_profiler");
        $__internal_0dc50cecd7a3e61b1a7c9231795a66724047ca38a25fa2c635df771307ff317c->enter($__internal_0dc50cecd7a3e61b1a7c9231795a66724047ca38a25fa2c635df771307ff317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_0dc50cecd7a3e61b1a7c9231795a66724047ca38a25fa2c635df771307ff317c->leave($__internal_0dc50cecd7a3e61b1a7c9231795a66724047ca38a25fa2c635df771307ff317c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e1662ec38f2dc313deb20311e74a6b6cd9a63e971ac1684247869a6b1c798ad = $this->env->getExtension("native_profiler");
        $__internal_0e1662ec38f2dc313deb20311e74a6b6cd9a63e971ac1684247869a6b1c798ad->enter($__internal_0e1662ec38f2dc313deb20311e74a6b6cd9a63e971ac1684247869a6b1c798ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

";
        // line 10
        $this->loadTemplate("BDESiteBundle:BDE:team_content.html.twig", "@BDESite/Bde/voirAccueil.html.twig", 10)->display(array_merge($context, array("link" => false)));
        // line 11
        echo "
";
        
        $__internal_0e1662ec38f2dc313deb20311e74a6b6cd9a63e971ac1684247869a6b1c798ad->leave($__internal_0e1662ec38f2dc313deb20311e74a6b6cd9a63e971ac1684247869a6b1c798ad_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/voirAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  54 => 8,  48 => 7,  35 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Accueil {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% include "BDESiteBundle:BDE:team_content.html.twig" with {'link':false} %}*/
/* */
/* {% endblock %}*/
/* */
