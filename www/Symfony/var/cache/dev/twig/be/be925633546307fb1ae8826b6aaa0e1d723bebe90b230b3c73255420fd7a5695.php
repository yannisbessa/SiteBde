<?php

/* @BDESite/Bde/BNDLSite.html.twig */
class __TwigTemplate_071baaa409a71a902f9e4cecaccbb0fbb0bd8b20d8e45d34ca9bd1f3c949f84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@BDESite/Bde/BNDLSite.html.twig", 3);
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
        $__internal_0dc808d7d1382fedeb95510c48cd512684a01276ef30f82eb5f77f26ac2f6d84 = $this->env->getExtension("native_profiler");
        $__internal_0dc808d7d1382fedeb95510c48cd512684a01276ef30f82eb5f77f26ac2f6d84->enter($__internal_0dc808d7d1382fedeb95510c48cd512684a01276ef30f82eb5f77f26ac2f6d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/BNDLSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc808d7d1382fedeb95510c48cd512684a01276ef30f82eb5f77f26ac2f6d84->leave($__internal_0dc808d7d1382fedeb95510c48cd512684a01276ef30f82eb5f77f26ac2f6d84_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dcc1846f66a6bc4a0dc1e91e46542c1bca871eb54b09a1ba35f59f9a7ab4c5b = $this->env->getExtension("native_profiler");
        $__internal_9dcc1846f66a6bc4a0dc1e91e46542c1bca871eb54b09a1ba35f59f9a7ab4c5b->enter($__internal_9dcc1846f66a6bc4a0dc1e91e46542c1bca871eb54b09a1ba35f59f9a7ab4c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9dcc1846f66a6bc4a0dc1e91e46542c1bca871eb54b09a1ba35f59f9a7ab4c5b->leave($__internal_9dcc1846f66a6bc4a0dc1e91e46542c1bca871eb54b09a1ba35f59f9a7ab4c5b_prof);

    }

    // line 15
    public function block_BDESite_body($context, array $blocks = array())
    {
        $__internal_2361e54fca2f3b87df0a8e18f975c2fe0022db663bb0e17fee359fa7c60c6b5b = $this->env->getExtension("native_profiler");
        $__internal_2361e54fca2f3b87df0a8e18f975c2fe0022db663bb0e17fee359fa7c60c6b5b->enter($__internal_2361e54fca2f3b87df0a8e18f975c2fe0022db663bb0e17fee359fa7c60c6b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BDESite_body"));

        // line 16
        echo "  <p>ajouter un lieu</p>
  <form action=\"\" method=\"post\">
  <input type=\"submit\">
  ";
        
        $__internal_2361e54fca2f3b87df0a8e18f975c2fe0022db663bb0e17fee359fa7c60c6b5b->leave($__internal_2361e54fca2f3b87df0a8e18f975c2fe0022db663bb0e17fee359fa7c60c6b5b_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/BNDLSite.html.twig";
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
