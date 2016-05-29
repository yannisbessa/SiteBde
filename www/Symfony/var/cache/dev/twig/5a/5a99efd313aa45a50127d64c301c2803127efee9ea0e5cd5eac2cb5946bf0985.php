<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7cda71967801c0fa0dfba254d39d54c3553c64005d419720410d6a459f13552a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bd8c834c8e8dceff631cf2fe69deef76356616bd800b405f3c8c06c3b98a443 = $this->env->getExtension("native_profiler");
        $__internal_2bd8c834c8e8dceff631cf2fe69deef76356616bd800b405f3c8c06c3b98a443->enter($__internal_2bd8c834c8e8dceff631cf2fe69deef76356616bd800b405f3c8c06c3b98a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2bd8c834c8e8dceff631cf2fe69deef76356616bd800b405f3c8c06c3b98a443->leave($__internal_2bd8c834c8e8dceff631cf2fe69deef76356616bd800b405f3c8c06c3b98a443_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_52147f713161e86d2a1b635f72bdf777ce860187f958a1e90175128ec0507fd6 = $this->env->getExtension("native_profiler");
        $__internal_52147f713161e86d2a1b635f72bdf777ce860187f958a1e90175128ec0507fd6->enter($__internal_52147f713161e86d2a1b635f72bdf777ce860187f958a1e90175128ec0507fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52147f713161e86d2a1b635f72bdf777ce860187f958a1e90175128ec0507fd6->leave($__internal_52147f713161e86d2a1b635f72bdf777ce860187f958a1e90175128ec0507fd6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_79cc81338f754cadebd4244e0205d0368d942974f978db77e6d7329aceec92dd = $this->env->getExtension("native_profiler");
        $__internal_79cc81338f754cadebd4244e0205d0368d942974f978db77e6d7329aceec92dd->enter($__internal_79cc81338f754cadebd4244e0205d0368d942974f978db77e6d7329aceec92dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_79cc81338f754cadebd4244e0205d0368d942974f978db77e6d7329aceec92dd->leave($__internal_79cc81338f754cadebd4244e0205d0368d942974f978db77e6d7329aceec92dd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1722d43b4dd87ab47beb5c2e7023a0c291fd771ac7f2ee849adbe8bbf9635516 = $this->env->getExtension("native_profiler");
        $__internal_1722d43b4dd87ab47beb5c2e7023a0c291fd771ac7f2ee849adbe8bbf9635516->enter($__internal_1722d43b4dd87ab47beb5c2e7023a0c291fd771ac7f2ee849adbe8bbf9635516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1722d43b4dd87ab47beb5c2e7023a0c291fd771ac7f2ee849adbe8bbf9635516->leave($__internal_1722d43b4dd87ab47beb5c2e7023a0c291fd771ac7f2ee849adbe8bbf9635516_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
