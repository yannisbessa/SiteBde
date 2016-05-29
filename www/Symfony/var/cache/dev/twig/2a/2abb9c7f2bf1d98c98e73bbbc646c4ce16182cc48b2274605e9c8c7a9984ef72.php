<?php

/* ::layoutSite.html.twig */
class __TwigTemplate_fb8dfbed698fe44b6c28ea31283db7168f5be0ef7c62a2fdf6f33a423e893c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5660f46021ac5baeb9a9ec0cc2877098efc0f11b9649100c481d2d62d70b5b13 = $this->env->getExtension("native_profiler");
        $__internal_5660f46021ac5baeb9a9ec0cc2877098efc0f11b9649100c481d2d62d70b5b13->enter($__internal_5660f46021ac5baeb9a9ec0cc2877098efc0f11b9649100c481d2d62d70b5b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutSite.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">



    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


 ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 114
        echo "<body>
  ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "</body>
    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"https://www.facebook.com/7tease\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
        
                </div>
            </div>
        </div>
    </footer>
 ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "</html>
";
        
        $__internal_5660f46021ac5baeb9a9ec0cc2877098efc0f11b9649100c481d2d62d70b5b13->leave($__internal_5660f46021ac5baeb9a9ec0cc2877098efc0f11b9649100c481d2d62d70b5b13_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e1518cf98359ab2e73928bc0aa567e240b9d40d81a73f18d282bec81ac6b817 = $this->env->getExtension("native_profiler");
        $__internal_2e1518cf98359ab2e73928bc0aa567e240b9d40d81a73f18d282bec81ac6b817->enter($__internal_2e1518cf98359ab2e73928bc0aa567e240b9d40d81a73f18d282bec81ac6b817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e1518cf98359ab2e73928bc0aa567e240b9d40d81a73f18d282bec81ac6b817->leave($__internal_2e1518cf98359ab2e73928bc0aa567e240b9d40d81a73f18d282bec81ac6b817_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f462f893fea1a0639cfd87614d573f9435aee4480c0c90ad5d9640f98485d51 = $this->env->getExtension("native_profiler");
        $__internal_4f462f893fea1a0639cfd87614d573f9435aee4480c0c90ad5d9640f98485d51->enter($__internal_4f462f893fea1a0639cfd87614d573f9435aee4480c0c90ad5d9640f98485d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    <!-- Custom Fonts -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- Bootstrap Core CSS -->
   <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
   <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/clean-blog.css"), "html", null, true);
        echo "\"  type=\"text/css\" />
   ";
        
        $__internal_4f462f893fea1a0639cfd87614d573f9435aee4480c0c90ad5d9640f98485d51->leave($__internal_4f462f893fea1a0639cfd87614d573f9435aee4480c0c90ad5d9640f98485d51_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_703515b465394b5d9737fe9268ad921d9f72207866b4f4c51026d180f3afee88 = $this->env->getExtension("native_profiler");
        $__internal_703515b465394b5d9737fe9268ad921d9f72207866b4f4c51026d180f3afee88->enter($__internal_703515b465394b5d9737fe9268ad921d9f72207866b4f4c51026d180f3afee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "<headerr>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                <li>
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("BDE_site_Accueil");
        echo "\">Site du BDE de l'ISEP</a>
                        </li>
                        
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("BDE_site_Accueil");
        echo "\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEP");
        echo "\">Isep</a>
                    </li>

                   <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Association <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPLIVE");
        echo "\">Iseplive</a></li>
            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("BDE_site_JUNIORISEP");
        echo "\">Junior ISEP</a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("BDE_site_Asso");
        echo "\">Move your AS</a></li>
            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPVOILE");
        echo "\">Isep Voile</a></li>
            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("BDE_site_ELLYPSIS");
        echo "\">Ellypsis</a></li>
            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPBANDS");
        echo "\">ISEP BANDS</a></li>
            <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRANSAHARIENNE");
        echo "\">La transaharienne</a></li>
            <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRAVEL");
        echo "\">ISEP TRAVEL</a></li>
          </ul>
        </li>
                    <li>
                        <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("BDE_site_Cal");
        echo "\">Calendrier</a>
                        
                    </li>
                                        <li>
                        
                         ";
        // line 80
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 81
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    -
    <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 85
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 86
        echo "       </a>
                   </a>     
                    </li>

    
        </ul>


          </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
      ";
        // line 104
        $this->displayBlock('img', $context, $blocks);
        // line 105
        echo "                      
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    </headerr>
";
        
        $__internal_703515b465394b5d9737fe9268ad921d9f72207866b4f4c51026d180f3afee88->leave($__internal_703515b465394b5d9737fe9268ad921d9f72207866b4f4c51026d180f3afee88_prof);

    }

    // line 104
    public function block_img($context, array $blocks = array())
    {
        $__internal_32bb841d54493408a06ae67a62c28d0c9550b5b06f7872ae8c4927826c6038f6 = $this->env->getExtension("native_profiler");
        $__internal_32bb841d54493408a06ae67a62c28d0c9550b5b06f7872ae8c4927826c6038f6->enter($__internal_32bb841d54493408a06ae67a62c28d0c9550b5b06f7872ae8c4927826c6038f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 105
        echo "  ";
        
        $__internal_32bb841d54493408a06ae67a62c28d0c9550b5b06f7872ae8c4927826c6038f6->leave($__internal_32bb841d54493408a06ae67a62c28d0c9550b5b06f7872ae8c4927826c6038f6_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_74effda0c4696b35172043659d03821009bb3f7419920a70987271cdc0c55da9 = $this->env->getExtension("native_profiler");
        $__internal_74effda0c4696b35172043659d03821009bb3f7419920a70987271cdc0c55da9->enter($__internal_74effda0c4696b35172043659d03821009bb3f7419920a70987271cdc0c55da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "    ";
        
        $__internal_74effda0c4696b35172043659d03821009bb3f7419920a70987271cdc0c55da9->leave($__internal_74effda0c4696b35172043659d03821009bb3f7419920a70987271cdc0c55da9_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e04b11de20328fb31dda6ac6bd235cbe612123f968ce2a84cf1aee88a448ed50 = $this->env->getExtension("native_profiler");
        $__internal_e04b11de20328fb31dda6ac6bd235cbe612123f968ce2a84cf1aee88a448ed50->enter($__internal_e04b11de20328fb31dda6ac6bd235cbe612123f968ce2a84cf1aee88a448ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "    <!-- jQuery -->

<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->

<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e04b11de20328fb31dda6ac6bd235cbe612123f968ce2a84cf1aee88a448ed50->leave($__internal_e04b11de20328fb31dda6ac6bd235cbe612123f968ce2a84cf1aee88a448ed50_prof);

    }

    public function getTemplateName()
    {
        return "::layoutSite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  358 => 159,  354 => 158,  350 => 157,  346 => 156,  342 => 155,  338 => 154,  333 => 152,  327 => 149,  323 => 147,  317 => 146,  310 => 116,  304 => 115,  297 => 105,  291 => 104,  276 => 105,  274 => 104,  254 => 86,  248 => 85,  243 => 83,  237 => 81,  235 => 80,  227 => 75,  220 => 71,  216 => 70,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 65,  192 => 64,  183 => 58,  177 => 55,  170 => 51,  150 => 33,  144 => 32,  135 => 29,  123 => 20,  117 => 16,  111 => 15,  100 => 12,  92 => 161,  90 => 146,  59 => 117,  57 => 115,  54 => 114,  52 => 32,  49 => 31,  47 => 15,  41 => 12,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* */
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/* */
/*  {% block stylesheets %}*/
/*     <!-- Custom Fonts -->*/
/*     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}" />*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     <!-- Bootstrap Core CSS -->*/
/*    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*    <link rel="stylesheet" href="{{ asset('css/clean-blog.css') }}"  type="text/css" />*/
/*    {% endblock %}*/
/* */
/* {% block header %}*/
/* <headerr>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                 <li>*/
/*                         <a href="{{ path('BDE_site_Accueil') }}">Site du BDE de l'ISEP</a>*/
/*                         </li>*/
/*                         */
/*                     <li>*/
/*                         <a href="{{ path('BDE_site_Accueil') }}">Accueil</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('BDE_site_ISEP') }}">Isep</a>*/
/*                     </li>*/
/* */
/*                    <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Association <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('BDE_site_ISEPLIVE') }}">Iseplive</a></li>*/
/*             <li><a href="{{ path('BDE_site_JUNIORISEP') }}">Junior ISEP</a></li>*/
/*             <li><a href="{{ path('BDE_site_Asso') }}">Move your AS</a></li>*/
/*             <li><a href="{{ path('BDE_site_ISEPVOILE') }}">Isep Voile</a></li>*/
/*             <li><a href="{{ path('BDE_site_ELLYPSIS') }}">Ellypsis</a></li>*/
/*             <li><a href="{{ path('BDE_site_ISEPBANDS') }}">ISEP BANDS</a></li>*/
/*             <li><a href="{{ path('BDE_site_ISEPTRANSAHARIENNE') }}">La transaharienne</a></li>*/
/*             <li><a href="{{ path('BDE_site_ISEPTRAVEL') }}">ISEP TRAVEL</a></li>*/
/*           </ul>*/
/*         </li>*/
/*                     <li>*/
/*                         <a href="{{ path('BDE_site_Cal') }}">Calendrier</a>*/
/*                         */
/*                     </li>*/
/*                                         <li>*/
/*                         */
/*                          {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*     Connecté en tant que {{ app.user.username }}*/
/*     -*/
/*     <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* {% else %}*/
/*     <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/* {% endif %}       </a>*/
/*                    </a>     */
/*                     </li>*/
/* */
/*     */
/*         </ul>*/
/* */
/* */
/*           </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <!-- Page Header -->*/
/*     <!-- Set your background image for this header on the line below. -->*/
/*       {% block img %}*/
/*   {% endblock %}                      */
/*                         */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     </headerr>*/
/* {% endblock %}*/
/* <body>*/
/*   {% block body %}*/
/*     {% endblock %}*/
/* </body>*/
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="https://www.facebook.com/7tease">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*         */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/*  {% block javascripts %}*/
/*     <!-- jQuery -->*/
/* */
/* <script type="text/javascript" src="{{ asset('js/jquery.js')  }}"></script>*/
/*     <!-- Bootstrap Core JavaScript -->*/
/* */
/* <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')  }}"></script>*/
/*     <!-- Custom Theme JavaScript -->*/
/* <script type="text/javascript" src="{{ asset('js/clean-blog.min.js')  }}"></script>*/
/* <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}"></script>*/
/* {% endblock %}*/
/* </html>*/
/* */
