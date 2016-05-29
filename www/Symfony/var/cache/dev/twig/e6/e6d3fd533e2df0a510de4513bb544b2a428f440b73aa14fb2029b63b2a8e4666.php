<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2a450c09ed422916aeba0f48ff7bb8c9aa8553c015b500b5cc4115ac58f6cfd3 extends Twig_Template
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
        $__internal_0b58b39bf45e13778c2623e9f6a600e62841a4d30c17eafc5457257a41824efe = $this->env->getExtension("native_profiler");
        $__internal_0b58b39bf45e13778c2623e9f6a600e62841a4d30c17eafc5457257a41824efe->enter($__internal_0b58b39bf45e13778c2623e9f6a600e62841a4d30c17eafc5457257a41824efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b58b39bf45e13778c2623e9f6a600e62841a4d30c17eafc5457257a41824efe->leave($__internal_0b58b39bf45e13778c2623e9f6a600e62841a4d30c17eafc5457257a41824efe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ded11562a4f1fe529ef9450cebce625f8e2b79a1afd864e6874d235a5ca0a130 = $this->env->getExtension("native_profiler");
        $__internal_ded11562a4f1fe529ef9450cebce625f8e2b79a1afd864e6874d235a5ca0a130->enter($__internal_ded11562a4f1fe529ef9450cebce625f8e2b79a1afd864e6874d235a5ca0a130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ded11562a4f1fe529ef9450cebce625f8e2b79a1afd864e6874d235a5ca0a130->leave($__internal_ded11562a4f1fe529ef9450cebce625f8e2b79a1afd864e6874d235a5ca0a130_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_85485ce8afce7019ee2b3354442b59517cfcfcb4a95349e0966e91be650521a9 = $this->env->getExtension("native_profiler");
        $__internal_85485ce8afce7019ee2b3354442b59517cfcfcb4a95349e0966e91be650521a9->enter($__internal_85485ce8afce7019ee2b3354442b59517cfcfcb4a95349e0966e91be650521a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_85485ce8afce7019ee2b3354442b59517cfcfcb4a95349e0966e91be650521a9->leave($__internal_85485ce8afce7019ee2b3354442b59517cfcfcb4a95349e0966e91be650521a9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41bf66d3fa6a25bccf898b1a989b1a78acf57e04aee478624e93db471b9ccbb6 = $this->env->getExtension("native_profiler");
        $__internal_41bf66d3fa6a25bccf898b1a989b1a78acf57e04aee478624e93db471b9ccbb6->enter($__internal_41bf66d3fa6a25bccf898b1a989b1a78acf57e04aee478624e93db471b9ccbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41bf66d3fa6a25bccf898b1a989b1a78acf57e04aee478624e93db471b9ccbb6->leave($__internal_41bf66d3fa6a25bccf898b1a989b1a78acf57e04aee478624e93db471b9ccbb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
