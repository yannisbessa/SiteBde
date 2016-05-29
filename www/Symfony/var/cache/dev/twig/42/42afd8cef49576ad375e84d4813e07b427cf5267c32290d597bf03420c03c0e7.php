<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3d7fa674a3b0e84b8ba5b0d00439994c859dbfaa6cd042277c31a44c2567d8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_0eece9357fb55984937751bc6da42d5c0f3b0079f1f04ec1a1f7270d9a1504a6 = $this->env->getExtension("native_profiler");
        $__internal_0eece9357fb55984937751bc6da42d5c0f3b0079f1f04ec1a1f7270d9a1504a6->enter($__internal_0eece9357fb55984937751bc6da42d5c0f3b0079f1f04ec1a1f7270d9a1504a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eece9357fb55984937751bc6da42d5c0f3b0079f1f04ec1a1f7270d9a1504a6->leave($__internal_0eece9357fb55984937751bc6da42d5c0f3b0079f1f04ec1a1f7270d9a1504a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6b3c6d9dd0cea095a7ff04a1fedae9a7f5baa975b8a86704cc8d82dc415b93d = $this->env->getExtension("native_profiler");
        $__internal_d6b3c6d9dd0cea095a7ff04a1fedae9a7f5baa975b8a86704cc8d82dc415b93d->enter($__internal_d6b3c6d9dd0cea095a7ff04a1fedae9a7f5baa975b8a86704cc8d82dc415b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div>
            ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "        </div>
";
        
        $__internal_d6b3c6d9dd0cea095a7ff04a1fedae9a7f5baa975b8a86704cc8d82dc415b93d->leave($__internal_d6b3c6d9dd0cea095a7ff04a1fedae9a7f5baa975b8a86704cc8d82dc415b93d_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dd39812d7fb62a4dbd23e9b62c3e25d1ade12e947aebb85f494d0e709e2ad84 = $this->env->getExtension("native_profiler");
        $__internal_1dd39812d7fb62a4dbd23e9b62c3e25d1ade12e947aebb85f494d0e709e2ad84->enter($__internal_1dd39812d7fb62a4dbd23e9b62c3e25d1ade12e947aebb85f494d0e709e2ad84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        
        $__internal_1dd39812d7fb62a4dbd23e9b62c3e25d1ade12e947aebb85f494d0e709e2ad84->leave($__internal_1dd39812d7fb62a4dbd23e9b62c3e25d1ade12e947aebb85f494d0e709e2ad84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  122 => 28,  114 => 30,  112 => 28,  108 => 26,  105 => 25,  99 => 24,  90 => 21,  85 => 20,  80 => 19,  75 => 18,  73 => 17,  69 => 15,  61 => 13,  55 => 10,  51 => 9,  46 => 8,  44 => 7,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
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
/* {% endblock body %}*/
