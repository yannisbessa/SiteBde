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
        $__internal_b9d1cc9ff6f04ba73fa28d8f42a377bd2ac4e22c47abdaf2eebba3fe18f7bb50 = $this->env->getExtension("native_profiler");
        $__internal_b9d1cc9ff6f04ba73fa28d8f42a377bd2ac4e22c47abdaf2eebba3fe18f7bb50->enter($__internal_b9d1cc9ff6f04ba73fa28d8f42a377bd2ac4e22c47abdaf2eebba3fe18f7bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d1cc9ff6f04ba73fa28d8f42a377bd2ac4e22c47abdaf2eebba3fe18f7bb50->leave($__internal_b9d1cc9ff6f04ba73fa28d8f42a377bd2ac4e22c47abdaf2eebba3fe18f7bb50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82522f46d1581c07fea319fe463e1e2672702e4091b2a7527f11df510772166f = $this->env->getExtension("native_profiler");
        $__internal_82522f46d1581c07fea319fe463e1e2672702e4091b2a7527f11df510772166f->enter($__internal_82522f46d1581c07fea319fe463e1e2672702e4091b2a7527f11df510772166f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82522f46d1581c07fea319fe463e1e2672702e4091b2a7527f11df510772166f->leave($__internal_82522f46d1581c07fea319fe463e1e2672702e4091b2a7527f11df510772166f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9509589de4b518782ef46f6b0790f328df5e144ad9c480c194613ef616e09cd4 = $this->env->getExtension("native_profiler");
        $__internal_9509589de4b518782ef46f6b0790f328df5e144ad9c480c194613ef616e09cd4->enter($__internal_9509589de4b518782ef46f6b0790f328df5e144ad9c480c194613ef616e09cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9509589de4b518782ef46f6b0790f328df5e144ad9c480c194613ef616e09cd4->leave($__internal_9509589de4b518782ef46f6b0790f328df5e144ad9c480c194613ef616e09cd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44d221ea6f020dca092a3be9c7a535a31b39d562fa05ae743047a24f87eac016 = $this->env->getExtension("native_profiler");
        $__internal_44d221ea6f020dca092a3be9c7a535a31b39d562fa05ae743047a24f87eac016->enter($__internal_44d221ea6f020dca092a3be9c7a535a31b39d562fa05ae743047a24f87eac016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44d221ea6f020dca092a3be9c7a535a31b39d562fa05ae743047a24f87eac016->leave($__internal_44d221ea6f020dca092a3be9c7a535a31b39d562fa05ae743047a24f87eac016_prof);

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
