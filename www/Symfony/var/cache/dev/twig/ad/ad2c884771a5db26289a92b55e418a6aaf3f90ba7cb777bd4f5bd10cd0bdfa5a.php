<?php

/* BDESiteBundle:Bde:BNDLSite.html.twig */
class __TwigTemplate_2096d0d0062725e104f0b1cf58e2907b74de79c50d0635959fce56a3afd425d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "BDESiteBundle:Bde:BNDLSite.html.twig", 3);
        $this->blocks = array(
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
        $__internal_79631d46f465bfd8c386d341a836086ccb4f39d3a6c1c9b51ce6e1798f2ef7b1 = $this->env->getExtension("native_profiler");
        $__internal_79631d46f465bfd8c386d341a836086ccb4f39d3a6c1c9b51ce6e1798f2ef7b1->enter($__internal_79631d46f465bfd8c386d341a836086ccb4f39d3a6c1c9b51ce6e1798f2ef7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:BNDLSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79631d46f465bfd8c386d341a836086ccb4f39d3a6c1c9b51ce6e1798f2ef7b1->leave($__internal_79631d46f465bfd8c386d341a836086ccb4f39d3a6c1c9b51ce6e1798f2ef7b1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1f0c3e3ef652063de4d0218b9469c1c65ff12c04ab029edf036f0d880ecf6aa = $this->env->getExtension("native_profiler");
        $__internal_e1f0c3e3ef652063de4d0218b9469c1c65ff12c04ab029edf036f0d880ecf6aa->enter($__internal_e1f0c3e3ef652063de4d0218b9469c1c65ff12c04ab029edf036f0d880ecf6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  

 

  ";
        // line 15
        echo "  ";
        $this->displayBlock('BDESite_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_e1f0c3e3ef652063de4d0218b9469c1c65ff12c04ab029edf036f0d880ecf6aa->leave($__internal_e1f0c3e3ef652063de4d0218b9469c1c65ff12c04ab029edf036f0d880ecf6aa_prof);

    }

    // line 15
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_1fca7e9feb42a4e17fe3218addc7f95daea36722b0defa7775f96d3ad1913a01 = $this->env->getExtension("native_profiler");
        $__internal_1fca7e9feb42a4e17fe3218addc7f95daea36722b0defa7775f96d3ad1913a01->enter($__internal_1fca7e9feb42a4e17fe3218addc7f95daea36722b0defa7775f96d3ad1913a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 16
        echo "  <p>ajouter un lieu</p>
  <form action=\"\" method=\"post\">
  <input type=\"submit\">
  ";
        
        $__internal_1fca7e9feb42a4e17fe3218addc7f95daea36722b0defa7775f96d3ad1913a01->leave($__internal_1fca7e9feb42a4e17fe3218addc7f95daea36722b0defa7775f96d3ad1913a01_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:BNDLSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  61 => 15,  53 => 20,  50 => 15,  44 => 10,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   */
/* */
/*  */
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block BDESite_body %}*/
/*   <p>ajouter un lieu</p>*/
/*   <form action="" method="post">*/
/*   <input type="submit">*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
