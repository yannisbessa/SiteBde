<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_08f0a05703d4048276cbf2b015af6e3544f12e19ebfab0c5000dc5c39771abd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_fc6b869fb1c19a32ff688ff5dedcefcab68e4eae86f5b8aedb2ba07ff934a905 = $this->env->getExtension("native_profiler");
        $__internal_fc6b869fb1c19a32ff688ff5dedcefcab68e4eae86f5b8aedb2ba07ff934a905->enter($__internal_fc6b869fb1c19a32ff688ff5dedcefcab68e4eae86f5b8aedb2ba07ff934a905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6b869fb1c19a32ff688ff5dedcefcab68e4eae86f5b8aedb2ba07ff934a905->leave($__internal_fc6b869fb1c19a32ff688ff5dedcefcab68e4eae86f5b8aedb2ba07ff934a905_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87b840b593d907f21e8c5c5227989e520fd4e7f2f8b913c617cc23aedfce45d4 = $this->env->getExtension("native_profiler");
        $__internal_87b840b593d907f21e8c5c5227989e520fd4e7f2f8b913c617cc23aedfce45d4->enter($__internal_87b840b593d907f21e8c5c5227989e520fd4e7f2f8b913c617cc23aedfce45d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_87b840b593d907f21e8c5c5227989e520fd4e7f2f8b913c617cc23aedfce45d4->leave($__internal_87b840b593d907f21e8c5c5227989e520fd4e7f2f8b913c617cc23aedfce45d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
