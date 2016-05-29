<?php

/* BDESiteBundle:Bde:Partenariat.html.twig */
class __TwigTemplate_3661b9bdd2f5e4654c50a00f5ba0669323aaaf36738e1ffc20a7f2704c907ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:Partenariat.html.twig", 3);
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
        $__internal_c7b1f6db21a9aab17d6216b979acf6a2fcc78a389a64a9b3fdf0a322234eae0a = $this->env->getExtension("native_profiler");
        $__internal_c7b1f6db21a9aab17d6216b979acf6a2fcc78a389a64a9b3fdf0a322234eae0a->enter($__internal_c7b1f6db21a9aab17d6216b979acf6a2fcc78a389a64a9b3fdf0a322234eae0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:Partenariat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b1f6db21a9aab17d6216b979acf6a2fcc78a389a64a9b3fdf0a322234eae0a->leave($__internal_c7b1f6db21a9aab17d6216b979acf6a2fcc78a389a64a9b3fdf0a322234eae0a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_590d6b2f4d91fed0703caa1bbbb6f6d2c6199ed161abb720da550a029ce14f84 = $this->env->getExtension("native_profiler");
        $__internal_590d6b2f4d91fed0703caa1bbbb6f6d2c6199ed161abb720da550a029ce14f84->enter($__internal_590d6b2f4d91fed0703caa1bbbb6f6d2c6199ed161abb720da550a029ce14f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP";
        
        $__internal_590d6b2f4d91fed0703caa1bbbb6f6d2c6199ed161abb720da550a029ce14f84->leave($__internal_590d6b2f4d91fed0703caa1bbbb6f6d2c6199ed161abb720da550a029ce14f84_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_24af75eaef991637ad0e1b03fa52d7ddc30a6cef77b1e7aba1054de281125aaf = $this->env->getExtension("native_profiler");
        $__internal_24af75eaef991637ad0e1b03fa52d7ddc30a6cef77b1e7aba1054de281125aaf->enter($__internal_24af75eaef991637ad0e1b03fa52d7ddc30a6cef77b1e7aba1054de281125aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24af75eaef991637ad0e1b03fa52d7ddc30a6cef77b1e7aba1054de281125aaf->leave($__internal_24af75eaef991637ad0e1b03fa52d7ddc30a6cef77b1e7aba1054de281125aaf_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:Partenariat.html.twig";
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
