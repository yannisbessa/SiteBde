<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_de350eef4b9e81ce98e97db2e19f96f725fd306d22df63aaab580d5025cc1bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9970e786bc31a9e5ef95a53074e81efb4676926486038f9d069ef90df3d317ed = $this->env->getExtension("native_profiler");
        $__internal_9970e786bc31a9e5ef95a53074e81efb4676926486038f9d069ef90df3d317ed->enter($__internal_9970e786bc31a9e5ef95a53074e81efb4676926486038f9d069ef90df3d317ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9970e786bc31a9e5ef95a53074e81efb4676926486038f9d069ef90df3d317ed->leave($__internal_9970e786bc31a9e5ef95a53074e81efb4676926486038f9d069ef90df3d317ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb3e0ef4d33e903028dbbc03a37321cf06036a0c976b7cca2b419b8fb9c45e44 = $this->env->getExtension("native_profiler");
        $__internal_eb3e0ef4d33e903028dbbc03a37321cf06036a0c976b7cca2b419b8fb9c45e44->enter($__internal_eb3e0ef4d33e903028dbbc03a37321cf06036a0c976b7cca2b419b8fb9c45e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eb3e0ef4d33e903028dbbc03a37321cf06036a0c976b7cca2b419b8fb9c45e44->leave($__internal_eb3e0ef4d33e903028dbbc03a37321cf06036a0c976b7cca2b419b8fb9c45e44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
