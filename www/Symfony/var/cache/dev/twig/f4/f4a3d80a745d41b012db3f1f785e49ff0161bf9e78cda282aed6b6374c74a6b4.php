<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_59d5d2941f1e33cd2da3fae5784009649947fadefc93b38031daeeb112488b1e extends Twig_Template
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
        $__internal_11d271221b225a269f46c8c7fe740a1d31c16835ee578cff4645833f1de464cd = $this->env->getExtension("native_profiler");
        $__internal_11d271221b225a269f46c8c7fe740a1d31c16835ee578cff4645833f1de464cd->enter($__internal_11d271221b225a269f46c8c7fe740a1d31c16835ee578cff4645833f1de464cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_11d271221b225a269f46c8c7fe740a1d31c16835ee578cff4645833f1de464cd->leave($__internal_11d271221b225a269f46c8c7fe740a1d31c16835ee578cff4645833f1de464cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_57aee0088b7126518e70dd897f31b59b5eb095b38205795ebd2a31f5810e1a29 = $this->env->getExtension("native_profiler");
        $__internal_57aee0088b7126518e70dd897f31b59b5eb095b38205795ebd2a31f5810e1a29->enter($__internal_57aee0088b7126518e70dd897f31b59b5eb095b38205795ebd2a31f5810e1a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_57aee0088b7126518e70dd897f31b59b5eb095b38205795ebd2a31f5810e1a29->leave($__internal_57aee0088b7126518e70dd897f31b59b5eb095b38205795ebd2a31f5810e1a29_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1b4cfeb3e724b465350f5c0825b39455f902ad0f1ef4bfb34f4be26f2cde2d3e = $this->env->getExtension("native_profiler");
        $__internal_1b4cfeb3e724b465350f5c0825b39455f902ad0f1ef4bfb34f4be26f2cde2d3e->enter($__internal_1b4cfeb3e724b465350f5c0825b39455f902ad0f1ef4bfb34f4be26f2cde2d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1b4cfeb3e724b465350f5c0825b39455f902ad0f1ef4bfb34f4be26f2cde2d3e->leave($__internal_1b4cfeb3e724b465350f5c0825b39455f902ad0f1ef4bfb34f4be26f2cde2d3e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_11a77922d3560562768f534726dd6d3a013714528dbcc73194bea6f31ecf2f83 = $this->env->getExtension("native_profiler");
        $__internal_11a77922d3560562768f534726dd6d3a013714528dbcc73194bea6f31ecf2f83->enter($__internal_11a77922d3560562768f534726dd6d3a013714528dbcc73194bea6f31ecf2f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_11a77922d3560562768f534726dd6d3a013714528dbcc73194bea6f31ecf2f83->leave($__internal_11a77922d3560562768f534726dd6d3a013714528dbcc73194bea6f31ecf2f83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
