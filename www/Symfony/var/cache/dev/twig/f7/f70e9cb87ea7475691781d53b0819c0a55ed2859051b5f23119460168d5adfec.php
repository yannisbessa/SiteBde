<?php

/* BDESiteBundle:Bde:ForumSite.html.twig */
class __TwigTemplate_46008af27825b4c9a5d2737d8595e61592ea51f28744feceb5ff79787ad80741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ForumSite.html.twig", 4);
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
        $__internal_21721d89cca4165dca666e4b244fec62f643d4e61806c3f6ba4368d1d27c51e5 = $this->env->getExtension("native_profiler");
        $__internal_21721d89cca4165dca666e4b244fec62f643d4e61806c3f6ba4368d1d27c51e5->enter($__internal_21721d89cca4165dca666e4b244fec62f643d4e61806c3f6ba4368d1d27c51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ForumSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21721d89cca4165dca666e4b244fec62f643d4e61806c3f6ba4368d1d27c51e5->leave($__internal_21721d89cca4165dca666e4b244fec62f643d4e61806c3f6ba4368d1d27c51e5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_60682fd1b57d26c30a508654c248cd3b75f10b2f9bf6fe1da0a4c71cf1a95a14 = $this->env->getExtension("native_profiler");
        $__internal_60682fd1b57d26c30a508654c248cd3b75f10b2f9bf6fe1da0a4c71cf1a95a14->enter($__internal_60682fd1b57d26c30a508654c248cd3b75f10b2f9bf6fe1da0a4c71cf1a95a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Forum ";
        
        $__internal_60682fd1b57d26c30a508654c248cd3b75f10b2f9bf6fe1da0a4c71cf1a95a14->leave($__internal_60682fd1b57d26c30a508654c248cd3b75f10b2f9bf6fe1da0a4c71cf1a95a14_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_51263827f970c81b24638d21136975f4fb175fa89c0c7a6e28baebd643a7a7a2 = $this->env->getExtension("native_profiler");
        $__internal_51263827f970c81b24638d21136975f4fb175fa89c0c7a6e28baebd643a7a7a2->enter($__internal_51263827f970c81b24638d21136975f4fb175fa89c0c7a6e28baebd643a7a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> Forum</p>
";
        
        $__internal_51263827f970c81b24638d21136975f4fb175fa89c0c7a6e28baebd643a7a7a2->leave($__internal_51263827f970c81b24638d21136975f4fb175fa89c0c7a6e28baebd643a7a7a2_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ForumSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  48 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} Forum {% endblock %}*/
/* */
/* {% block body %}*/
/* <p> Forum</p>*/
/* {% endblock %}*/
