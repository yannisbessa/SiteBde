<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0af68cd21a3ecbc2383d369cfa3a775e699e1ecc150a4bc6e082ae95ac680f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_25731c711d4f877af9f354376903fdce83423db31e38ec983d9d591b92124430 = $this->env->getExtension("native_profiler");
        $__internal_25731c711d4f877af9f354376903fdce83423db31e38ec983d9d591b92124430->enter($__internal_25731c711d4f877af9f354376903fdce83423db31e38ec983d9d591b92124430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25731c711d4f877af9f354376903fdce83423db31e38ec983d9d591b92124430->leave($__internal_25731c711d4f877af9f354376903fdce83423db31e38ec983d9d591b92124430_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_644c47be8abe598a3b35393640bf85161d0b049741a723472b2fe0cddf4c6a03 = $this->env->getExtension("native_profiler");
        $__internal_644c47be8abe598a3b35393640bf85161d0b049741a723472b2fe0cddf4c6a03->enter($__internal_644c47be8abe598a3b35393640bf85161d0b049741a723472b2fe0cddf4c6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_644c47be8abe598a3b35393640bf85161d0b049741a723472b2fe0cddf4c6a03->leave($__internal_644c47be8abe598a3b35393640bf85161d0b049741a723472b2fe0cddf4c6a03_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3c1b0fda6902804e84d6619e0847ef03f7f23bc19050610d93f60ec764f53dd = $this->env->getExtension("native_profiler");
        $__internal_d3c1b0fda6902804e84d6619e0847ef03f7f23bc19050610d93f60ec764f53dd->enter($__internal_d3c1b0fda6902804e84d6619e0847ef03f7f23bc19050610d93f60ec764f53dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d3c1b0fda6902804e84d6619e0847ef03f7f23bc19050610d93f60ec764f53dd->leave($__internal_d3c1b0fda6902804e84d6619e0847ef03f7f23bc19050610d93f60ec764f53dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e6d6192c852d780633f73f8d2c91ad72b0f6cb55a1ddfd788f5c34647579628 = $this->env->getExtension("native_profiler");
        $__internal_4e6d6192c852d780633f73f8d2c91ad72b0f6cb55a1ddfd788f5c34647579628->enter($__internal_4e6d6192c852d780633f73f8d2c91ad72b0f6cb55a1ddfd788f5c34647579628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e6d6192c852d780633f73f8d2c91ad72b0f6cb55a1ddfd788f5c34647579628->leave($__internal_4e6d6192c852d780633f73f8d2c91ad72b0f6cb55a1ddfd788f5c34647579628_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
