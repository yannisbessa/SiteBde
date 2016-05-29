<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6d8ceea687c3d531c58b9f5af168f99b9cdf194c8892f036f5fdb1786ac99108 extends Twig_Template
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
        $__internal_b3636375e3cf0b36c8293116dec4fe43fce4a21fef7db9137c345529b9e9879f = $this->env->getExtension("native_profiler");
        $__internal_b3636375e3cf0b36c8293116dec4fe43fce4a21fef7db9137c345529b9e9879f->enter($__internal_b3636375e3cf0b36c8293116dec4fe43fce4a21fef7db9137c345529b9e9879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b3636375e3cf0b36c8293116dec4fe43fce4a21fef7db9137c345529b9e9879f->leave($__internal_b3636375e3cf0b36c8293116dec4fe43fce4a21fef7db9137c345529b9e9879f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c625f655817ce7a3b063b77b7301fe94b5fa19877dfb222dbfb521862d184c92 = $this->env->getExtension("native_profiler");
        $__internal_c625f655817ce7a3b063b77b7301fe94b5fa19877dfb222dbfb521862d184c92->enter($__internal_c625f655817ce7a3b063b77b7301fe94b5fa19877dfb222dbfb521862d184c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c625f655817ce7a3b063b77b7301fe94b5fa19877dfb222dbfb521862d184c92->leave($__internal_c625f655817ce7a3b063b77b7301fe94b5fa19877dfb222dbfb521862d184c92_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0bace6062cd9bd552543c9291d88add39e6f16c8a19f0af619083f97f88ade5c = $this->env->getExtension("native_profiler");
        $__internal_0bace6062cd9bd552543c9291d88add39e6f16c8a19f0af619083f97f88ade5c->enter($__internal_0bace6062cd9bd552543c9291d88add39e6f16c8a19f0af619083f97f88ade5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0bace6062cd9bd552543c9291d88add39e6f16c8a19f0af619083f97f88ade5c->leave($__internal_0bace6062cd9bd552543c9291d88add39e6f16c8a19f0af619083f97f88ade5c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dbc324b8215f88a0619683b300b65cc5abe977484c78af3974fc16a9fdd27db8 = $this->env->getExtension("native_profiler");
        $__internal_dbc324b8215f88a0619683b300b65cc5abe977484c78af3974fc16a9fdd27db8->enter($__internal_dbc324b8215f88a0619683b300b65cc5abe977484c78af3974fc16a9fdd27db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dbc324b8215f88a0619683b300b65cc5abe977484c78af3974fc16a9fdd27db8->leave($__internal_dbc324b8215f88a0619683b300b65cc5abe977484c78af3974fc16a9fdd27db8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
