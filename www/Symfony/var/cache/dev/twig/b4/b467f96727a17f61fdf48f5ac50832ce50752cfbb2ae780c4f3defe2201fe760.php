<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_9747550c5485df3a712c5203269eb0e23da9a1f13c99da89d1005b19bc16f409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee41863ba8dc8a26c0994f47d4f8648ac55ac4c20e2536593ad45cca8cb848e2 = $this->env->getExtension("native_profiler");
        $__internal_ee41863ba8dc8a26c0994f47d4f8648ac55ac4c20e2536593ad45cca8cb848e2->enter($__internal_ee41863ba8dc8a26c0994f47d4f8648ac55ac4c20e2536593ad45cca8cb848e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ee41863ba8dc8a26c0994f47d4f8648ac55ac4c20e2536593ad45cca8cb848e2->leave($__internal_ee41863ba8dc8a26c0994f47d4f8648ac55ac4c20e2536593ad45cca8cb848e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
