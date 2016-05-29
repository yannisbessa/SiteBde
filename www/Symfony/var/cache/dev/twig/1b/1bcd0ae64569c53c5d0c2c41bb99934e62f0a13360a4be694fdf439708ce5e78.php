<?php

/* BDESiteBundle:Bde:team_content.html.twig */
class __TwigTemplate_bf286d479f462afeb3e7556e6bb5e923e55346591bb2425d091eb7440c31e4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd6fac448aeda260bfa1b705e1cf5ec8d851d3ed990e4cf1180082037c3f09f0 = $this->env->getExtension("native_profiler");
        $__internal_bd6fac448aeda260bfa1b705e1cf5ec8d851d3ed990e4cf1180082037c3f09f0->enter($__internal_bd6fac448aeda260bfa1b705e1cf5ec8d851d3ed990e4cf1180082037c3f09f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:team_content.html.twig"));

        // line 1
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Css/styleAccueil.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bd6fac448aeda260bfa1b705e1cf5ec8d851d3ed990e4cf1180082037c3f09f0->leave($__internal_bd6fac448aeda260bfa1b705e1cf5ec8d851d3ed990e4cf1180082037c3f09f0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_494fdab3c7c067fb4346157b329420860e351bdbce48bb1da06056ef60554713 = $this->env->getExtension("native_profiler");
        $__internal_494fdab3c7c067fb4346157b329420860e351bdbce48bb1da06056ef60554713->enter($__internal_494fdab3c7c067fb4346157b329420860e351bdbce48bb1da06056ef60554713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 4
            echo "<div class=\"container\">
<div class=\"col-lg-6\"><h3><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BDE_site_voirAccueil", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()))), "html", null, true);
            echo "\" title=\"voirAccueil ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "titre", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "titre", array()), "html", null, true);
            echo "</a></h3> 
";
        } else {
            // line 7
            echo "<div class=\"container\">
<div class=\"col-lg-6\"><h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "titre", array()), "html", null, true);
            echo "</h3> 
";
        }
        // line 10
        echo "
<div class=\"admin-team\">
<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BDE_site_editerAccueil", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()))), "html", null, true);
        echo "\" title=\"editer le pôle ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "titre", array()), "html", null, true);
        echo " \">Editer</a>
<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BDE_site_supprimerAccueil", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()))), "html", null, true);
        echo "\" title=\"supprimerle pôle ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "titre", array()), "html", null, true);
        echo " \">Supprimer</a>
</div>


<img class='ro' src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "url", array()), "html", null, true);
        echo "\"></div>
<div class=\"col-lg-6\">  <p>";
        // line 18
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "Description", array()), "html", null, true));
        echo "</p>
<div class=\"row\">
</div>
</div>
</div>
</div>
";
        
        $__internal_494fdab3c7c067fb4346157b329420860e351bdbce48bb1da06056ef60554713->leave($__internal_494fdab3c7c067fb4346157b329420860e351bdbce48bb1da06056ef60554713_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:team_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  81 => 17,  72 => 13,  66 => 12,  62 => 10,  57 => 8,  54 => 7,  45 => 5,  42 => 4,  40 => 3,  28 => 2,  23 => 1,);
    }
}
/*  <link rel="stylesheet" href="{{ asset('Css/styleAccueil.css') }}" type="text/css" />*/
/* {% block body %}*/
/* {% if link %}*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3><a href="{{path("BDE_site_voirAccueil", {id: team.id})}}" title="voirAccueil {{team.titre}} ">{{team.titre}}</a></h3> */
/* {% else  %}*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3>{{team.titre}}</h3> */
/* {% endif  %}*/
/* */
/* <div class="admin-team">*/
/* <a href="{{path("BDE_site_editerAccueil", {id: team.id})}}" title="editer le pôle {{team.titre}} ">Editer</a>*/
/* <a href="{{path("BDE_site_supprimerAccueil", {id: team.id})}}" title="supprimerle pôle {{team.titre}} ">Supprimer</a>*/
/* </div>*/
/* */
/* */
/* <img class='ro' src="{{team.url}}"></div>*/
/* <div class="col-lg-6">  <p>{{team.Description|nl2br}}</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
