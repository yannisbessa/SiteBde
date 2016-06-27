<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fe2f8e78038b48ae3dec422692b5fdf217382100d1555af901e309a87c1b9eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de751031ae19248ec3d2494365367c09f34d82ec911223e515813861e8cb8cd8 = $this->env->getExtension("native_profiler");
        $__internal_de751031ae19248ec3d2494365367c09f34d82ec911223e515813861e8cb8cd8->enter($__internal_de751031ae19248ec3d2494365367c09f34d82ec911223e515813861e8cb8cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de751031ae19248ec3d2494365367c09f34d82ec911223e515813861e8cb8cd8->leave($__internal_de751031ae19248ec3d2494365367c09f34d82ec911223e515813861e8cb8cd8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cee8ffd086f1c6f6d944ecf3ea051e697844543bd8fe9b5a3bdf86aa3d090de = $this->env->getExtension("native_profiler");
        $__internal_7cee8ffd086f1c6f6d944ecf3ea051e697844543bd8fe9b5a3bdf86aa3d090de->enter($__internal_7cee8ffd086f1c6f6d944ecf3ea051e697844543bd8fe9b5a3bdf86aa3d090de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cee8ffd086f1c6f6d944ecf3ea051e697844543bd8fe9b5a3bdf86aa3d090de->leave($__internal_7cee8ffd086f1c6f6d944ecf3ea051e697844543bd8fe9b5a3bdf86aa3d090de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c347beeadb2197ab5bc1a1cb05668fd27f1fb67bac95644552bf39a6f05dff9e = $this->env->getExtension("native_profiler");
        $__internal_c347beeadb2197ab5bc1a1cb05668fd27f1fb67bac95644552bf39a6f05dff9e->enter($__internal_c347beeadb2197ab5bc1a1cb05668fd27f1fb67bac95644552bf39a6f05dff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c347beeadb2197ab5bc1a1cb05668fd27f1fb67bac95644552bf39a6f05dff9e->leave($__internal_c347beeadb2197ab5bc1a1cb05668fd27f1fb67bac95644552bf39a6f05dff9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72ec1e9cd28e5a23490d4ac5e366e96bd16983288cbc778cdac4ec79eafecb22 = $this->env->getExtension("native_profiler");
        $__internal_72ec1e9cd28e5a23490d4ac5e366e96bd16983288cbc778cdac4ec79eafecb22->enter($__internal_72ec1e9cd28e5a23490d4ac5e366e96bd16983288cbc778cdac4ec79eafecb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72ec1e9cd28e5a23490d4ac5e366e96bd16983288cbc778cdac4ec79eafecb22->leave($__internal_72ec1e9cd28e5a23490d4ac5e366e96bd16983288cbc778cdac4ec79eafecb22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
