<?php

/* @BDESite/Bde/Back.html.twig */
class __TwigTemplate_9e88eacaf35ae4b89c1b0ba5d243734f7ec1e2633a3dbec08301e79d38e8b6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "@BDESite/Bde/Back.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a1d0568d2c3c0554aa7b8b35917190bb6d6ff57fd8b82fed5813948b088ad0 = $this->env->getExtension("native_profiler");
        $__internal_96a1d0568d2c3c0554aa7b8b35917190bb6d6ff57fd8b82fed5813948b088ad0->enter($__internal_96a1d0568d2c3c0554aa7b8b35917190bb6d6ff57fd8b82fed5813948b088ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/Back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a1d0568d2c3c0554aa7b8b35917190bb6d6ff57fd8b82fed5813948b088ad0->leave($__internal_96a1d0568d2c3c0554aa7b8b35917190bb6d6ff57fd8b82fed5813948b088ad0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b13011c042666661f70bd395fb7acecf4a207a1c75dc5032ddede56dbbb18e3 = $this->env->getExtension("native_profiler");
        $__internal_0b13011c042666661f70bd395fb7acecf4a207a1c75dc5032ddede56dbbb18e3->enter($__internal_0b13011c042666661f70bd395fb7acecf4a207a1c75dc5032ddede56dbbb18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b13011c042666661f70bd395fb7acecf4a207a1c75dc5032ddede56dbbb18e3->leave($__internal_0b13011c042666661f70bd395fb7acecf4a207a1c75dc5032ddede56dbbb18e3_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ee9478df9bffcb8f8d9e87e5c87e0f309657e0da3eb9b4b6093d9bacd30c6ee9 = $this->env->getExtension("native_profiler");
        $__internal_ee9478df9bffcb8f8d9e87e5c87e0f309657e0da3eb9b4b6093d9bacd30c6ee9->enter($__internal_ee9478df9bffcb8f8d9e87e5c87e0f309657e0da3eb9b4b6093d9bacd30c6ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 9
        echo " <nav class=\"navbar navbar-inverse\" id=\"navbar\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
    </div>
    <div>
      <ul class=\"nav navbar-nav\" >
        <li class=\"dropdown\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("BDE_site_BAccueil");
        echo "\"> Accueil </a></li>
        <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">ISEP <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("BDE_site_NDL");
        echo "\">NDL</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("BDE_site_NDC");
        echo "\">NDC</a></li>
            <li><a href=\"#\">Releve de note</a></li>
            <li><a href=\"#\">hypperplanning</a></li>
          </ul>
        </li>
       <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Association <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Iseplive</a></li>
            <li><a href=\"#\">Junior ISEP</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BDE_site_Asso");
        echo "\">A.S.</a></li>
            <li><a href=\"#\">Isep Travel</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("BDE_site_Cal");
        echo "\">Calendrier</a></li>
        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("BDE_site_Boutique");
        echo "\">Boutique</a></li>
        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("BDE_site_Camp");
        echo "\">La campagne</a></li>
        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("BDE_site_Forum");
        echo "\">Forum</a></li>
        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("BDE_site_Astuce");
        echo "\">Les 7 petites astuces</a></li>
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_ee9478df9bffcb8f8d9e87e5c87e0f309657e0da3eb9b4b6093d9bacd30c6ee9->leave($__internal_ee9478df9bffcb8f8d9e87e5c87e0f309657e0da3eb9b4b6093d9bacd30c6ee9_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_c932b566eab5ec791f1b6016f31b0c948dafbcccf0659dc07e597edd27640559 = $this->env->getExtension("native_profiler");
        $__internal_c932b566eab5ec791f1b6016f31b0c948dafbcccf0659dc07e597edd27640559->enter($__internal_c932b566eab5ec791f1b6016f31b0c948dafbcccf0659dc07e597edd27640559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
  <h2>Bienvenue sur le back office </h2>
  <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>



";
        
        $__internal_c932b566eab5ec791f1b6016f31b0c948dafbcccf0659dc07e597edd27640559->leave($__internal_c932b566eab5ec791f1b6016f31b0c948dafbcccf0659dc07e597edd27640559_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/Back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  127 => 48,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  91 => 31,  78 => 21,  74 => 20,  67 => 16,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ parent() }}*/
/* {% endblock %}*/
/* {% block nav %}*/
/*  <nav class="navbar navbar-inverse" id="navbar">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*     </div>*/
/*     <div>*/
/*       <ul class="nav navbar-nav" >*/
/*         <li class="dropdown">*/
/*         <a href="{{ path('BDE_site_BAccueil') }}"> Accueil </a></li>*/
/*         <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">ISEP <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('BDE_site_NDL') }}">NDL</a></li>*/
/*             <li><a href="{{ path('BDE_site_NDC') }}">NDC</a></li>*/
/*             <li><a href="#">Releve de note</a></li>*/
/*             <li><a href="#">hypperplanning</a></li>*/
/*           </ul>*/
/*         </li>*/
/*        <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Association <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="#">Iseplive</a></li>*/
/*             <li><a href="#">Junior ISEP</a></li>*/
/*             <li><a href="{{ path('BDE_site_Asso') }}">A.S.</a></li>*/
/*             <li><a href="#">Isep Travel</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ path('BDE_site_Cal') }}">Calendrier</a></li>*/
/*         <li><a href="{{ path('BDE_site_Boutique') }}">Boutique</a></li>*/
/*         <li><a href="{{ path('BDE_site_Camp') }}">La campagne</a></li>*/
/*         <li><a href="{{ path('BDE_site_Forum') }}">Forum</a></li>*/
/*         <li><a href="{{ path('BDE_site_Astuce') }}">Les 7 petites astuces</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* {% endblock  %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*   <h2>Bienvenue sur le back office </h2>*/
/*   <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>*/
/* */
/* */
/* */
/* {% endblock %}*/
