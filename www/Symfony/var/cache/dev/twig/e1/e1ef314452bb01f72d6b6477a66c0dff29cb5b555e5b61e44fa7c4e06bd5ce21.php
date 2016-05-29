<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d08dc54365200e846800701b47cfb110f4b7265beddcd527b00e07dbcc197fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab31e66853222f8dcd08e2bf6c013959af27e2f9f0881475e92ef3f7cced2e10 = $this->env->getExtension("native_profiler");
        $__internal_ab31e66853222f8dcd08e2bf6c013959af27e2f9f0881475e92ef3f7cced2e10->enter($__internal_ab31e66853222f8dcd08e2bf6c013959af27e2f9f0881475e92ef3f7cced2e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab31e66853222f8dcd08e2bf6c013959af27e2f9f0881475e92ef3f7cced2e10->leave($__internal_ab31e66853222f8dcd08e2bf6c013959af27e2f9f0881475e92ef3f7cced2e10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc56039701c73d2e3c0f69a9f2bd17a6c97b267742d7d1935596db5bc68f7e1b = $this->env->getExtension("native_profiler");
        $__internal_dc56039701c73d2e3c0f69a9f2bd17a6c97b267742d7d1935596db5bc68f7e1b->enter($__internal_dc56039701c73d2e3c0f69a9f2bd17a6c97b267742d7d1935596db5bc68f7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        <div>
            ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "        </div>
";
        
        $__internal_dc56039701c73d2e3c0f69a9f2bd17a6c97b267742d7d1935596db5bc68f7e1b->leave($__internal_dc56039701c73d2e3c0f69a9f2bd17a6c97b267742d7d1935596db5bc68f7e1b_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6037eeecca3f1f91e8c58956b029084467b890d0cc945cede025bc9bbf9fce42 = $this->env->getExtension("native_profiler");
        $__internal_6037eeecca3f1f91e8c58956b029084467b890d0cc945cede025bc9bbf9fce42->enter($__internal_6037eeecca3f1f91e8c58956b029084467b890d0cc945cede025bc9bbf9fce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_6037eeecca3f1f91e8c58956b029084467b890d0cc945cede025bc9bbf9fce42->leave($__internal_6037eeecca3f1f91e8c58956b029084467b890d0cc945cede025bc9bbf9fce42_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  94 => 16,  86 => 18,  84 => 16,  80 => 14,  77 => 13,  71 => 12,  62 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::layoutSite.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {% endblock %}*/
/* */
