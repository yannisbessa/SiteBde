<?php

/* BDESiteBundle:Bde:voirAccueil.html.twig */
class __TwigTemplate_a4f137d0d4b6e5923579fa1b2e059b0c76e3484c7accd5b2efb4bb20226516c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:voirAccueil.html.twig", 3);
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
        $__internal_b029f847177e2c7a1777fc3361ded432b9e4a0bf6cb34ad6cb22b09308edb666 = $this->env->getExtension("native_profiler");
        $__internal_b029f847177e2c7a1777fc3361ded432b9e4a0bf6cb34ad6cb22b09308edb666->enter($__internal_b029f847177e2c7a1777fc3361ded432b9e4a0bf6cb34ad6cb22b09308edb666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:voirAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b029f847177e2c7a1777fc3361ded432b9e4a0bf6cb34ad6cb22b09308edb666->leave($__internal_b029f847177e2c7a1777fc3361ded432b9e4a0bf6cb34ad6cb22b09308edb666_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f2292713a3fa2e8b8e4eb2f11c137133a0e917829dcdb2d3d52eec587e25474 = $this->env->getExtension("native_profiler");
        $__internal_5f2292713a3fa2e8b8e4eb2f11c137133a0e917829dcdb2d3d52eec587e25474->enter($__internal_5f2292713a3fa2e8b8e4eb2f11c137133a0e917829dcdb2d3d52eec587e25474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_5f2292713a3fa2e8b8e4eb2f11c137133a0e917829dcdb2d3d52eec587e25474->leave($__internal_5f2292713a3fa2e8b8e4eb2f11c137133a0e917829dcdb2d3d52eec587e25474_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e352b758e59739396253409bcf1a6d5602698a1ad107d143440954743845c3a = $this->env->getExtension("native_profiler");
        $__internal_4e352b758e59739396253409bcf1a6d5602698a1ad107d143440954743845c3a->enter($__internal_4e352b758e59739396253409bcf1a6d5602698a1ad107d143440954743845c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

";
        // line 10
        $this->loadTemplate("BDESiteBundle:BDE:team_content.html.twig", "BDESiteBundle:Bde:voirAccueil.html.twig", 10)->display(array_merge($context, array("link" => false)));
        // line 11
        echo "
";
        
        $__internal_4e352b758e59739396253409bcf1a6d5602698a1ad107d143440954743845c3a->leave($__internal_4e352b758e59739396253409bcf1a6d5602698a1ad107d143440954743845c3a_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:voirAccueil.html.twig";
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
