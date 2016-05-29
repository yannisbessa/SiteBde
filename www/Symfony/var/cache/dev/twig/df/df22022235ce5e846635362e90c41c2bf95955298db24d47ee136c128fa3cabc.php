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
        $__internal_d382473cb5e79ec71d97046eedc9960f0a2d4f48314e378cacd237d4e541bd16 = $this->env->getExtension("native_profiler");
        $__internal_d382473cb5e79ec71d97046eedc9960f0a2d4f48314e378cacd237d4e541bd16->enter($__internal_d382473cb5e79ec71d97046eedc9960f0a2d4f48314e378cacd237d4e541bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d382473cb5e79ec71d97046eedc9960f0a2d4f48314e378cacd237d4e541bd16->leave($__internal_d382473cb5e79ec71d97046eedc9960f0a2d4f48314e378cacd237d4e541bd16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3ac31b47a5dc93658c429bd5ed731f6f0bf69311338ae9dcd4ece1523cbe276 = $this->env->getExtension("native_profiler");
        $__internal_a3ac31b47a5dc93658c429bd5ed731f6f0bf69311338ae9dcd4ece1523cbe276->enter($__internal_a3ac31b47a5dc93658c429bd5ed731f6f0bf69311338ae9dcd4ece1523cbe276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3ac31b47a5dc93658c429bd5ed731f6f0bf69311338ae9dcd4ece1523cbe276->leave($__internal_a3ac31b47a5dc93658c429bd5ed731f6f0bf69311338ae9dcd4ece1523cbe276_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fb3fd044b26cf5786fafc00c0de8e163f5670f4bfb7c1296894c3c57fa4ff40 = $this->env->getExtension("native_profiler");
        $__internal_7fb3fd044b26cf5786fafc00c0de8e163f5670f4bfb7c1296894c3c57fa4ff40->enter($__internal_7fb3fd044b26cf5786fafc00c0de8e163f5670f4bfb7c1296894c3c57fa4ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fb3fd044b26cf5786fafc00c0de8e163f5670f4bfb7c1296894c3c57fa4ff40->leave($__internal_7fb3fd044b26cf5786fafc00c0de8e163f5670f4bfb7c1296894c3c57fa4ff40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_217a2fd12923fe1c05fb3f079d7c96f149518690a08e69303cdd8d7bd577e302 = $this->env->getExtension("native_profiler");
        $__internal_217a2fd12923fe1c05fb3f079d7c96f149518690a08e69303cdd8d7bd577e302->enter($__internal_217a2fd12923fe1c05fb3f079d7c96f149518690a08e69303cdd8d7bd577e302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_217a2fd12923fe1c05fb3f079d7c96f149518690a08e69303cdd8d7bd577e302->leave($__internal_217a2fd12923fe1c05fb3f079d7c96f149518690a08e69303cdd8d7bd577e302_prof);

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
