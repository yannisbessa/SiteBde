<?php

/* @BDESite/Bde/Partenariat.html.twig */
class __TwigTemplate_3b0c05aa66c23d507a201562c2359dba1fb47b8762778cf96f50e246de7599b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/Partenariat.html.twig", 3);
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
        $__internal_352b1ce70724012e7c117902655cbe00b99a089265b6fe37093019850286b023 = $this->env->getExtension("native_profiler");
        $__internal_352b1ce70724012e7c117902655cbe00b99a089265b6fe37093019850286b023->enter($__internal_352b1ce70724012e7c117902655cbe00b99a089265b6fe37093019850286b023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/Partenariat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352b1ce70724012e7c117902655cbe00b99a089265b6fe37093019850286b023->leave($__internal_352b1ce70724012e7c117902655cbe00b99a089265b6fe37093019850286b023_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5b3c5bf1299bc3f9af843d2f7a41fb72328ab982078875bfc8767469cae4daf = $this->env->getExtension("native_profiler");
        $__internal_f5b3c5bf1299bc3f9af843d2f7a41fb72328ab982078875bfc8767469cae4daf->enter($__internal_f5b3c5bf1299bc3f9af843d2f7a41fb72328ab982078875bfc8767469cae4daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_f5b3c5bf1299bc3f9af843d2f7a41fb72328ab982078875bfc8767469cae4daf->leave($__internal_f5b3c5bf1299bc3f9af843d2f7a41fb72328ab982078875bfc8767469cae4daf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac53e9063b705f782cef99a8c609fda8d18f41e5a3a38556149bd5241a78db73 = $this->env->getExtension("native_profiler");
        $__internal_ac53e9063b705f782cef99a8c609fda8d18f41e5a3a38556149bd5241a78db73->enter($__internal_ac53e9063b705f782cef99a8c609fda8d18f41e5a3a38556149bd5241a78db73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<h3> ISEP </h3>
  <div class=\"container\">

      <div class=\"row\">
      <div class=\"col-lg-4\">Nom du partenaire</div>

      <div class=\"col-lg-4\">description des conditions du partenariat</div>

      <div class=\"col-lg-4\">Lien externe vers le partenaire</div>
      </div>

      </div>  
";
        
        $__internal_ac53e9063b705f782cef99a8c609fda8d18f41e5a3a38556149bd5241a78db73->leave($__internal_ac53e9063b705f782cef99a8c609fda8d18f41e5a3a38556149bd5241a78db73_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/Partenariat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 7,  35 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEP{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h3> ISEP </h3>*/
/*   <div class="container">*/
/* */
/*       <div class="row">*/
/*       <div class="col-lg-4">Nom du partenaire</div>*/
/* */
/*       <div class="col-lg-4">description des conditions du partenariat</div>*/
/* */
/*       <div class="col-lg-4">Lien externe vers le partenaire</div>*/
/*       </div>*/
/* */
/*       </div>  */
/* {% endblock %}*/
