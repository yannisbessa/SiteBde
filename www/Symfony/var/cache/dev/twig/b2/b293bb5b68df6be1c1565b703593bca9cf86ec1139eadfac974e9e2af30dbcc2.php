<?php

/* @BDESite/Bde/editerAccueil.html.twig */
class __TwigTemplate_9d8b4a5c9539894b4a7d01969b4a01bbb404d26e4830aa99042191ffe51938f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutBackoffice.html.twig", "@BDESite/Bde/editerAccueil.html.twig", 3);
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
        $__internal_3748b4a2bd05b78c85a75f68fa79bec30af83af11e3a88546b6d524412e84011 = $this->env->getExtension("native_profiler");
        $__internal_3748b4a2bd05b78c85a75f68fa79bec30af83af11e3a88546b6d524412e84011->enter($__internal_3748b4a2bd05b78c85a75f68fa79bec30af83af11e3a88546b6d524412e84011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/editerAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3748b4a2bd05b78c85a75f68fa79bec30af83af11e3a88546b6d524412e84011->leave($__internal_3748b4a2bd05b78c85a75f68fa79bec30af83af11e3a88546b6d524412e84011_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e418f5f1bd64c15b2707357cb69bb99e7b2f2aee53fc09588422c0bde8b1bfa3 = $this->env->getExtension("native_profiler");
        $__internal_e418f5f1bd64c15b2707357cb69bb99e7b2f2aee53fc09588422c0bde8b1bfa3->enter($__internal_e418f5f1bd64c15b2707357cb69bb99e7b2f2aee53fc09588422c0bde8b1bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
  ";
        // line 9
        echo "  <h2>Bienvenue sur la page modification de l'accueil</h2>

<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BDE_site_editerAccueil", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\">
<p> ajouter un pole</p>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\">

</form>


";
        
        $__internal_e418f5f1bd64c15b2707357cb69bb99e7b2f2aee53fc09588422c0bde8b1bfa3->leave($__internal_e418f5f1bd64c15b2707357cb69bb99e7b2f2aee53fc09588422c0bde8b1bfa3_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/editerAccueil.html.twig";
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
/*   <h2>Bienvenue sur la page modification de l'accueil</h2>*/
/* */
/* <form action="{{path("BDE_site_editerAccueil",{id: id})}}" method="post">*/
/* <p> ajouter un pole</p>*/
/* {{form_widget(form)}}*/
/* <input type="submit">*/
/* */
/* </form>*/
/* */
/* */
/* {% endblock %}*/
