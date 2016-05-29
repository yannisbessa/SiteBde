<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34d336665b36b7b23601c3180805698cb4f725da9a3c64b5d9e7fac8a1e50136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_67fb71feffd7d7cebbdd4157eefa71891199437333e93e51622d88d970b2647d = $this->env->getExtension("native_profiler");
        $__internal_67fb71feffd7d7cebbdd4157eefa71891199437333e93e51622d88d970b2647d->enter($__internal_67fb71feffd7d7cebbdd4157eefa71891199437333e93e51622d88d970b2647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fb71feffd7d7cebbdd4157eefa71891199437333e93e51622d88d970b2647d->leave($__internal_67fb71feffd7d7cebbdd4157eefa71891199437333e93e51622d88d970b2647d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e26a450b3f3b8b813b6a89c7af5df7fcb0c159ef6a06b5d303198e05dba8a13f = $this->env->getExtension("native_profiler");
        $__internal_e26a450b3f3b8b813b6a89c7af5df7fcb0c159ef6a06b5d303198e05dba8a13f->enter($__internal_e26a450b3f3b8b813b6a89c7af5df7fcb0c159ef6a06b5d303198e05dba8a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e26a450b3f3b8b813b6a89c7af5df7fcb0c159ef6a06b5d303198e05dba8a13f->leave($__internal_e26a450b3f3b8b813b6a89c7af5df7fcb0c159ef6a06b5d303198e05dba8a13f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f24064d27bfd573d08250f6712b60d87e2be8ecc5ebbc1f5e7de4e20f21caebf = $this->env->getExtension("native_profiler");
        $__internal_f24064d27bfd573d08250f6712b60d87e2be8ecc5ebbc1f5e7de4e20f21caebf->enter($__internal_f24064d27bfd573d08250f6712b60d87e2be8ecc5ebbc1f5e7de4e20f21caebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f24064d27bfd573d08250f6712b60d87e2be8ecc5ebbc1f5e7de4e20f21caebf->leave($__internal_f24064d27bfd573d08250f6712b60d87e2be8ecc5ebbc1f5e7de4e20f21caebf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aebc6b7ceb07adc63e3a769149da568fda472c50afdefea989d2972bbfb657c8 = $this->env->getExtension("native_profiler");
        $__internal_aebc6b7ceb07adc63e3a769149da568fda472c50afdefea989d2972bbfb657c8->enter($__internal_aebc6b7ceb07adc63e3a769149da568fda472c50afdefea989d2972bbfb657c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aebc6b7ceb07adc63e3a769149da568fda472c50afdefea989d2972bbfb657c8->leave($__internal_aebc6b7ceb07adc63e3a769149da568fda472c50afdefea989d2972bbfb657c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
