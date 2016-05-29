<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_cd14aee45b6ea2208043011447ba2661aa4c0f410e558c5d7592c70af188857d extends Twig_Template
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
        $__internal_9719931969a82910e406ca424231b68febe18ed8d180751e02d2d14a5e318001 = $this->env->getExtension("native_profiler");
        $__internal_9719931969a82910e406ca424231b68febe18ed8d180751e02d2d14a5e318001->enter($__internal_9719931969a82910e406ca424231b68febe18ed8d180751e02d2d14a5e318001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_9719931969a82910e406ca424231b68febe18ed8d180751e02d2d14a5e318001->leave($__internal_9719931969a82910e406ca424231b68febe18ed8d180751e02d2d14a5e318001_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
