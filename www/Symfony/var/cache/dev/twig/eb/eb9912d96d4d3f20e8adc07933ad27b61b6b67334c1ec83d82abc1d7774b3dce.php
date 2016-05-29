<?php

/* BDESiteBundle:Bde:As.html.twig */
class __TwigTemplate_dc82d3780e32290cf5b146970a64f6853cad7dd2d61607462c6c38514519f52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:As.html.twig", 4);
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
        $__internal_a67c5519bf48ce35d308c7a93380544f9d812a9d114d5a2d675dccbedaf1ff7f = $this->env->getExtension("native_profiler");
        $__internal_a67c5519bf48ce35d308c7a93380544f9d812a9d114d5a2d675dccbedaf1ff7f->enter($__internal_a67c5519bf48ce35d308c7a93380544f9d812a9d114d5a2d675dccbedaf1ff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:As.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67c5519bf48ce35d308c7a93380544f9d812a9d114d5a2d675dccbedaf1ff7f->leave($__internal_a67c5519bf48ce35d308c7a93380544f9d812a9d114d5a2d675dccbedaf1ff7f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c3e5b1ca500f9ad6d17af8b7707595d4463a6a76e26f7a02fba46a199fb0622 = $this->env->getExtension("native_profiler");
        $__internal_4c3e5b1ca500f9ad6d17af8b7707595d4463a6a76e26f7a02fba46a199fb0622->enter($__internal_4c3e5b1ca500f9ad6d17af8b7707595d4463a6a76e26f7a02fba46a199fb0622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "A.S.dsfd ";
        
        $__internal_4c3e5b1ca500f9ad6d17af8b7707595d4463a6a76e26f7a02fba46a199fb0622->leave($__internal_4c3e5b1ca500f9ad6d17af8b7707595d4463a6a76e26f7a02fba46a199fb0622_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bc185faa48e7242a80548d7dd85d0a29b2117851262376ce16fbba2efba4022 = $this->env->getExtension("native_profiler");
        $__internal_3bc185faa48e7242a80548d7dd85d0a29b2117851262376ce16fbba2efba4022->enter($__internal_3bc185faa48e7242a80548d7dd85d0a29b2117851262376ce16fbba2efba4022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h3> Association Sportive de l'ISEP</h3>

<div class=\"container\">
<div class=\"col-lg-6\"><h3> Bureau</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Tennis</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Badminton</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Basket ball</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Run isep</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Rugby</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
<div class=\"container\">
<div class=\"col-lg-6\"><h3> Football</h3> 
<img class='ro'>Image</img>
</div>
<div class=\"col-lg-6\">  <p>Composition/description/horaire entrainement et match</p>
<div class=\"row\">
</div>
</div>
</div>
";
        
        $__internal_3bc185faa48e7242a80548d7dd85d0a29b2117851262376ce16fbba2efba4022->leave($__internal_3bc185faa48e7242a80548d7dd85d0a29b2117851262376ce16fbba2efba4022_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:As.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}A.S.dsfd {% endblock %}*/
/* */
/* {% block body %}{{ parent() }}*/
/* <h3> Association Sportive de l'ISEP</h3>*/
/* */
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Bureau</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Tennis</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Badminton</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Basket ball</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Run isep</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Rugby</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/* <div class="col-lg-6"><h3> Football</h3> */
/* <img class='ro'>Image</img>*/
/* </div>*/
/* <div class="col-lg-6">  <p>Composition/description/horaire entrainement et match</p>*/
/* <div class="row">*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
