<?php

/* @BDESite/Bde/BAccueil.html.twig */
class __TwigTemplate_8d154e8acf23e2d28df5b7a58991648d30fda59fd7de99ec51f35f2ad231cd50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutBackoffice.html.twig", "@BDESite/Bde/BAccueil.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutBackoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e0ff088284fa156a24fa04552844e4d73a1b592a7e261296f7dce8223b1dfb2 = $this->env->getExtension("native_profiler");
        $__internal_7e0ff088284fa156a24fa04552844e4d73a1b592a7e261296f7dce8223b1dfb2->enter($__internal_7e0ff088284fa156a24fa04552844e4d73a1b592a7e261296f7dce8223b1dfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/BAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0ff088284fa156a24fa04552844e4d73a1b592a7e261296f7dce8223b1dfb2->leave($__internal_7e0ff088284fa156a24fa04552844e4d73a1b592a7e261296f7dce8223b1dfb2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_517339464a702071d01fb0158732ddd63e2c9c681c91082512d7a4621167d2d1 = $this->env->getExtension("native_profiler");
        $__internal_517339464a702071d01fb0158732ddd63e2c9c681c91082512d7a4621167d2d1->enter($__internal_517339464a702071d01fb0158732ddd63e2c9c681c91082512d7a4621167d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
  ";
        // line 9
        echo "  <h2>Ajouter un pole</h2>

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\" method=\"post\">
<p> ajouter un pole</p>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\">

</form>


";
        
        $__internal_517339464a702071d01fb0158732ddd63e2c9c681c91082512d7a4621167d2d1->leave($__internal_517339464a702071d01fb0158732ddd63e2c9c681c91082512d7a4621167d2d1_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/BAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  47 => 11,  43 => 9,  40 => 7,  34 => 6,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutBackoffice.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h2>Ajouter un pole</h2>*/
/* */
/* <form action="{{path("BDE_site_BAccueil")}}" method="post">*/
/* <p> ajouter un pole</p>*/
/* {{form_widget(form)}}*/
/* <input type="submit">*/
/* */
/* </form>*/
/* */
/* */
/* {% endblock %}*/
