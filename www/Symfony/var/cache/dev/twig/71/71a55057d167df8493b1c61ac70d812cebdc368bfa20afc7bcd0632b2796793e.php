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
        $__internal_a8cb590df6126277d38c9c89bbcc99a722322adddeb93e05ec13172d54a50ed3 = $this->env->getExtension("native_profiler");
        $__internal_a8cb590df6126277d38c9c89bbcc99a722322adddeb93e05ec13172d54a50ed3->enter($__internal_a8cb590df6126277d38c9c89bbcc99a722322adddeb93e05ec13172d54a50ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a8cb590df6126277d38c9c89bbcc99a722322adddeb93e05ec13172d54a50ed3->leave($__internal_a8cb590df6126277d38c9c89bbcc99a722322adddeb93e05ec13172d54a50ed3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a36a0b4c1d0bd53f4f5a93b3be5add7095a2158a8f49e3533dcdf568bb82310b = $this->env->getExtension("native_profiler");
        $__internal_a36a0b4c1d0bd53f4f5a93b3be5add7095a2158a8f49e3533dcdf568bb82310b->enter($__internal_a36a0b4c1d0bd53f4f5a93b3be5add7095a2158a8f49e3533dcdf568bb82310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a36a0b4c1d0bd53f4f5a93b3be5add7095a2158a8f49e3533dcdf568bb82310b->leave($__internal_a36a0b4c1d0bd53f4f5a93b3be5add7095a2158a8f49e3533dcdf568bb82310b_prof);

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
