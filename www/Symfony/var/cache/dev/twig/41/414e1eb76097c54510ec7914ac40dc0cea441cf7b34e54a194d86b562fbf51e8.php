<?php

/* layoutSite.html.twig */
class __TwigTemplate_41f894db3df012d5ce3b955e892b9a357c191902686661bd88875e0a06a0ddc3 extends Twig_Template
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
        $__internal_c90888e81f19f9203bf7e220be3ca4277da8cd5df9b57cf72f5402e59428aecd = $this->env->getExtension("native_profiler");
        $__internal_c90888e81f19f9203bf7e220be3ca4277da8cd5df9b57cf72f5402e59428aecd->enter($__internal_c90888e81f19f9203bf7e220be3ca4277da8cd5df9b57cf72f5402e59428aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutSite.html.twig"));

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
        
        $__internal_c90888e81f19f9203bf7e220be3ca4277da8cd5df9b57cf72f5402e59428aecd->leave($__internal_c90888e81f19f9203bf7e220be3ca4277da8cd5df9b57cf72f5402e59428aecd_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d9a3f1ae9e03fc3d19a0fdfaaef83e6433b8fdd78ef97ad90e553e96fdaf08 = $this->env->getExtension("native_profiler");
        $__internal_97d9a3f1ae9e03fc3d19a0fdfaaef83e6433b8fdd78ef97ad90e553e96fdaf08->enter($__internal_97d9a3f1ae9e03fc3d19a0fdfaaef83e6433b8fdd78ef97ad90e553e96fdaf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_97d9a3f1ae9e03fc3d19a0fdfaaef83e6433b8fdd78ef97ad90e553e96fdaf08->leave($__internal_97d9a3f1ae9e03fc3d19a0fdfaaef83e6433b8fdd78ef97ad90e553e96fdaf08_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_612cf4e6165a993ac8290e938d354d1d5ad11c4c406518ca6128d865d8089956 = $this->env->getExtension("native_profiler");
        $__internal_612cf4e6165a993ac8290e938d354d1d5ad11c4c406518ca6128d865d8089956->enter($__internal_612cf4e6165a993ac8290e938d354d1d5ad11c4c406518ca6128d865d8089956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_612cf4e6165a993ac8290e938d354d1d5ad11c4c406518ca6128d865d8089956->leave($__internal_612cf4e6165a993ac8290e938d354d1d5ad11c4c406518ca6128d865d8089956_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_bb09d5cd67b617f103751091421dca1eeb05cee65eb63cc1a8d4686fa7b0427a = $this->env->getExtension("native_profiler");
        $__internal_bb09d5cd67b617f103751091421dca1eeb05cee65eb63cc1a8d4686fa7b0427a->enter($__internal_bb09d5cd67b617f103751091421dca1eeb05cee65eb63cc1a8d4686fa7b0427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 53
        echo $this->env->getExtension('routing')->getPath("BDE_site_Accueil");
        echo "\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEP");
        echo "\">Isep</a>
                    </li>

                   <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Association <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPLIVE");
        echo "\">Iseplive</a></li>
            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("BDE_site_JUNIORISEP");
        echo "\">Junior ISEP</a></li>
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("BDE_site_Asso");
        echo "\">Move your AS</a></li>
            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPVOILE");
        echo "\">Isep Voile</a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("BDE_site_ELLYPSIS");
        echo "\">Ellypsis</a></li>
            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPBANDS");
        echo "\">ISEP BANDS</a></li>
            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRANSAHARIENNE");
        echo "\">La transaharienne</a></li>
            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRAVEL");
        echo "\">ISEP TRAVEL</a></li>
          </ul>
        </li>
                    <li>
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("BDE_site_Cal");
        echo "\">Calendrier</a>
                        
                    </li>
                                        <li>
                        
                         ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 79
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    </li><li>
    <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 83
            echo "</li>
<li>
    <a href=\"";
            // line 85
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
        
        $__internal_bb09d5cd67b617f103751091421dca1eeb05cee65eb63cc1a8d4686fa7b0427a->leave($__internal_bb09d5cd67b617f103751091421dca1eeb05cee65eb63cc1a8d4686fa7b0427a_prof);

    }

    // line 104
    public function block_img($context, array $blocks = array())
    {
        $__internal_189ccf16ad6d5372645f6a8ea6a1b6b7975f36c22f61800cea308a0717bb76c9 = $this->env->getExtension("native_profiler");
        $__internal_189ccf16ad6d5372645f6a8ea6a1b6b7975f36c22f61800cea308a0717bb76c9->enter($__internal_189ccf16ad6d5372645f6a8ea6a1b6b7975f36c22f61800cea308a0717bb76c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 105
        echo "  ";
        
        $__internal_189ccf16ad6d5372645f6a8ea6a1b6b7975f36c22f61800cea308a0717bb76c9->leave($__internal_189ccf16ad6d5372645f6a8ea6a1b6b7975f36c22f61800cea308a0717bb76c9_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_43b7a5aca10312f2215b29970adc129d1563e21e0ce1a3c803abf28bb422ac87 = $this->env->getExtension("native_profiler");
        $__internal_43b7a5aca10312f2215b29970adc129d1563e21e0ce1a3c803abf28bb422ac87->enter($__internal_43b7a5aca10312f2215b29970adc129d1563e21e0ce1a3c803abf28bb422ac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "    ";
        
        $__internal_43b7a5aca10312f2215b29970adc129d1563e21e0ce1a3c803abf28bb422ac87->leave($__internal_43b7a5aca10312f2215b29970adc129d1563e21e0ce1a3c803abf28bb422ac87_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc8650252f1f21adf606b939378c4cff04fd122e9b14a61d92d6ad964d804ae2 = $this->env->getExtension("native_profiler");
        $__internal_fc8650252f1f21adf606b939378c4cff04fd122e9b14a61d92d6ad964d804ae2->enter($__internal_fc8650252f1f21adf606b939378c4cff04fd122e9b14a61d92d6ad964d804ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fc8650252f1f21adf606b939378c4cff04fd122e9b14a61d92d6ad964d804ae2->leave($__internal_fc8650252f1f21adf606b939378c4cff04fd122e9b14a61d92d6ad964d804ae2_prof);

    }

    public function getTemplateName()
    {
        return "layoutSite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  356 => 159,  352 => 158,  348 => 157,  344 => 156,  340 => 155,  336 => 154,  331 => 152,  325 => 149,  321 => 147,  315 => 146,  308 => 116,  302 => 115,  295 => 105,  289 => 104,  274 => 105,  272 => 104,  252 => 86,  247 => 85,  243 => 83,  238 => 81,  232 => 79,  230 => 78,  222 => 73,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  195 => 64,  191 => 63,  187 => 62,  178 => 56,  172 => 53,  150 => 33,  144 => 32,  135 => 29,  123 => 20,  117 => 16,  111 => 15,  100 => 12,  92 => 161,  90 => 146,  59 => 117,  57 => 115,  54 => 114,  52 => 32,  49 => 31,  47 => 15,  41 => 12,  28 => 1,);
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
/*       */
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
/*     </li><li>*/
/*     <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* {% else %}*/
/* </li>*/
/* <li>*/
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
