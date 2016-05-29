<?php

/* @BDESite/Bde/As.html.twig */
class __TwigTemplate_f9f93db45640bfa42bf71563effb97b7446e49a8096bebbd941ec8a17b4f03ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/As.html.twig", 4);
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
        $__internal_84e52d918017878ffae10cec6fa5337fbde0770a60bb06be907fed08f1c85e90 = $this->env->getExtension("native_profiler");
        $__internal_84e52d918017878ffae10cec6fa5337fbde0770a60bb06be907fed08f1c85e90->enter($__internal_84e52d918017878ffae10cec6fa5337fbde0770a60bb06be907fed08f1c85e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/As.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e52d918017878ffae10cec6fa5337fbde0770a60bb06be907fed08f1c85e90->leave($__internal_84e52d918017878ffae10cec6fa5337fbde0770a60bb06be907fed08f1c85e90_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_869184441e023e0c559f016e0fee52a9968b6e7adf0a9cfa92de9fe469a8a362 = $this->env->getExtension("native_profiler");
        $__internal_869184441e023e0c559f016e0fee52a9968b6e7adf0a9cfa92de9fe469a8a362->enter($__internal_869184441e023e0c559f016e0fee52a9968b6e7adf0a9cfa92de9fe469a8a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "A.S.dsfd ";
        
        $__internal_869184441e023e0c559f016e0fee52a9968b6e7adf0a9cfa92de9fe469a8a362->leave($__internal_869184441e023e0c559f016e0fee52a9968b6e7adf0a9cfa92de9fe469a8a362_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_29c75eb56184a43b61811faf43b89339675ae46f7d37902d302aa4b9d46016b5 = $this->env->getExtension("native_profiler");
        $__internal_29c75eb56184a43b61811faf43b89339675ae46f7d37902d302aa4b9d46016b5->enter($__internal_29c75eb56184a43b61811faf43b89339675ae46f7d37902d302aa4b9d46016b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29c75eb56184a43b61811faf43b89339675ae46f7d37902d302aa4b9d46016b5->leave($__internal_29c75eb56184a43b61811faf43b89339675ae46f7d37902d302aa4b9d46016b5_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/As.html.twig";
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
