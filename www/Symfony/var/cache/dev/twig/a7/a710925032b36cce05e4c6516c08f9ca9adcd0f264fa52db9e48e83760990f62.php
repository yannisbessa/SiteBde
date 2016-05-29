<?php

/* BDESiteBundle:Bde:editerAccueil.html.twig */
class __TwigTemplate_388e5abfc1e9d349ab46a8ef5c833a5e7a148013f162f5f7f92484b3fbe3e7b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutBackoffice.html.twig", "BDESiteBundle:Bde:editerAccueil.html.twig", 3);
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
        $__internal_f7e78d50aa13b3a004968618511445e701f22679f9d5f36dc6b035769ea6cb22 = $this->env->getExtension("native_profiler");
        $__internal_f7e78d50aa13b3a004968618511445e701f22679f9d5f36dc6b035769ea6cb22->enter($__internal_f7e78d50aa13b3a004968618511445e701f22679f9d5f36dc6b035769ea6cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:editerAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e78d50aa13b3a004968618511445e701f22679f9d5f36dc6b035769ea6cb22->leave($__internal_f7e78d50aa13b3a004968618511445e701f22679f9d5f36dc6b035769ea6cb22_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d0966ea0849c729337c843520c529861fc618781aaf2325128830d6fee38d8 = $this->env->getExtension("native_profiler");
        $__internal_44d0966ea0849c729337c843520c529861fc618781aaf2325128830d6fee38d8->enter($__internal_44d0966ea0849c729337c843520c529861fc618781aaf2325128830d6fee38d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44d0966ea0849c729337c843520c529861fc618781aaf2325128830d6fee38d8->leave($__internal_44d0966ea0849c729337c843520c529861fc618781aaf2325128830d6fee38d8_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:editerAccueil.html.twig";
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
