<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eca6667c073c6901d630a38aaddc852d1074005fb7863373cff09d2621585f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a7cf2709213918a8d7fec09f70dd4fc2226458669057b5b4c97102392df854b = $this->env->getExtension("native_profiler");
        $__internal_5a7cf2709213918a8d7fec09f70dd4fc2226458669057b5b4c97102392df854b->enter($__internal_5a7cf2709213918a8d7fec09f70dd4fc2226458669057b5b4c97102392df854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a7cf2709213918a8d7fec09f70dd4fc2226458669057b5b4c97102392df854b->leave($__internal_5a7cf2709213918a8d7fec09f70dd4fc2226458669057b5b4c97102392df854b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57c63115ffb5fc712b52f5ee7a8113c0744414ba5dfd6bec8387add9eea04737 = $this->env->getExtension("native_profiler");
        $__internal_57c63115ffb5fc712b52f5ee7a8113c0744414ba5dfd6bec8387add9eea04737->enter($__internal_57c63115ffb5fc712b52f5ee7a8113c0744414ba5dfd6bec8387add9eea04737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57c63115ffb5fc712b52f5ee7a8113c0744414ba5dfd6bec8387add9eea04737->leave($__internal_57c63115ffb5fc712b52f5ee7a8113c0744414ba5dfd6bec8387add9eea04737_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
