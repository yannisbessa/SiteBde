<?php

/* @BDESite/Bde/backpage.html.twig */
class __TwigTemplate_50cf09fa21e572d4faf1dc8ac85e20252d7997e8a53733fbefce83d7ad694e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@BDESite/Bde/backpage.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'BDESite_body' => array($this, 'block_BDESite_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fb3b42ad5a80e2ee0779d680f4a297398a1faf705d064d022198195edd40839 = $this->env->getExtension("native_profiler");
        $__internal_1fb3b42ad5a80e2ee0779d680f4a297398a1faf705d064d022198195edd40839->enter($__internal_1fb3b42ad5a80e2ee0779d680f4a297398a1faf705d064d022198195edd40839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/backpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb3b42ad5a80e2ee0779d680f4a297398a1faf705d064d022198195edd40839->leave($__internal_1fb3b42ad5a80e2ee0779d680f4a297398a1faf705d064d022198195edd40839_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84b45e1902665a28e92eeb56c9c7f774e0d6ea9df3f5772de0062e5f0c5d0c00 = $this->env->getExtension("native_profiler");
        $__internal_84b45e1902665a28e92eeb56c9c7f774e0d6ea9df3f5772de0062e5f0c5d0c00->enter($__internal_84b45e1902665a28e92eeb56c9c7f774e0d6ea9df3f5772de0062e5f0c5d0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_84b45e1902665a28e92eeb56c9c7f774e0d6ea9df3f5772de0062e5f0c5d0c00->leave($__internal_84b45e1902665a28e92eeb56c9c7f774e0d6ea9df3f5772de0062e5f0c5d0c00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_93b301bf04cf9be7443da8d16af0149e367853e29495959ae4800b23c9596e7e = $this->env->getExtension("native_profiler");
        $__internal_93b301bf04cf9be7443da8d16af0149e367853e29495959ae4800b23c9596e7e->enter($__internal_93b301bf04cf9be7443da8d16af0149e367853e29495959ae4800b23c9596e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h1 >Bienvenue sur le back office </h1>

  ";
        // line 13
        $this->displayBlock('BDESite_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_93b301bf04cf9be7443da8d16af0149e367853e29495959ae4800b23c9596e7e->leave($__internal_93b301bf04cf9be7443da8d16af0149e367853e29495959ae4800b23c9596e7e_prof);

    }

    // line 13
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_5bef62243c7049019e04d6d897f5767e588e77b432f4ab6ba3420f048204f7f1 = $this->env->getExtension("native_profiler");
        $__internal_5bef62243c7049019e04d6d897f5767e588e77b432f4ab6ba3420f048204f7f1->enter($__internal_5bef62243c7049019e04d6d897f5767e588e77b432f4ab6ba3420f048204f7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 14
        echo "


  <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\"> Accueil </p>
  <p> calendrier </p>
  ";
        
        $__internal_5bef62243c7049019e04d6d897f5767e588e77b432f4ab6ba3420f048204f7f1->leave($__internal_5bef62243c7049019e04d6d897f5767e588e77b432f4ab6ba3420f048204f7f1_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/backpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  79 => 14,  73 => 13,  65 => 20,  63 => 13,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1 >Bienvenue sur le back office </h1>*/
/* */
/*   {% block BDESite_body %}*/
/* */
/* */
/* */
/*   <p><a href="{{ path('BDE_site_BAccueil') }}"> Accueil </p>*/
/*   <p> calendrier </p>*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
