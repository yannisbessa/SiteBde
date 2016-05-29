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
        $__internal_ab13a33920e0ff2d3f68962dfdd03bc95020228fbe1f112b0003c7691bc80b6f = $this->env->getExtension("native_profiler");
        $__internal_ab13a33920e0ff2d3f68962dfdd03bc95020228fbe1f112b0003c7691bc80b6f->enter($__internal_ab13a33920e0ff2d3f68962dfdd03bc95020228fbe1f112b0003c7691bc80b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutSite.html.twig"));

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
        // line 104
        echo "<body>
  ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 107
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
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "</html>
";
        
        $__internal_ab13a33920e0ff2d3f68962dfdd03bc95020228fbe1f112b0003c7691bc80b6f->leave($__internal_ab13a33920e0ff2d3f68962dfdd03bc95020228fbe1f112b0003c7691bc80b6f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_57aea8305b625bc08c5f0a9521ebfce71cade209f7fdee45b9c515d06cfdcaf5 = $this->env->getExtension("native_profiler");
        $__internal_57aea8305b625bc08c5f0a9521ebfce71cade209f7fdee45b9c515d06cfdcaf5->enter($__internal_57aea8305b625bc08c5f0a9521ebfce71cade209f7fdee45b9c515d06cfdcaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_57aea8305b625bc08c5f0a9521ebfce71cade209f7fdee45b9c515d06cfdcaf5->leave($__internal_57aea8305b625bc08c5f0a9521ebfce71cade209f7fdee45b9c515d06cfdcaf5_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fed2360a69e4cc2e228eec3cd0804d72f8137382da63c8f4fcfa0993e90b735d = $this->env->getExtension("native_profiler");
        $__internal_fed2360a69e4cc2e228eec3cd0804d72f8137382da63c8f4fcfa0993e90b735d->enter($__internal_fed2360a69e4cc2e228eec3cd0804d72f8137382da63c8f4fcfa0993e90b735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fed2360a69e4cc2e228eec3cd0804d72f8137382da63c8f4fcfa0993e90b735d->leave($__internal_fed2360a69e4cc2e228eec3cd0804d72f8137382da63c8f4fcfa0993e90b735d_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_b634fd9d8e0d63c723ca42dd31fadf06b1ea9432eec048f8b050aa5a0124b8f4 = $this->env->getExtension("native_profiler");
        $__internal_b634fd9d8e0d63c723ca42dd31fadf06b1ea9432eec048f8b050aa5a0124b8f4->enter($__internal_b634fd9d8e0d63c723ca42dd31fadf06b1ea9432eec048f8b050aa5a0124b8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("BDE_site_Accueil");
        echo "\">Site du BDE de l'ISEP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("BDE_site_Accueil");
        echo "\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEP");
        echo "\">Isep</a>
                    </li>

                   <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Association <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPLIVE");
        echo "\">Iseplive</a></li>
            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("BDE_site_JUNIORISEP");
        echo "\">Junior ISEP</a></li>
            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("BDE_site_Asso");
        echo "\">Move your AS</a></li>
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPVOILE");
        echo "\">Isep Voile</a></li>
            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("BDE_site_ELLYPSIS");
        echo "\">Ellypsis</a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPBANDS");
        echo "\">ISEP BANDS</a></li>
            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRANSAHARIENNE");
        echo "\">La transaharienne</a></li>
            <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("BDE_site_ISEPTRAVEL");
        echo "\">ISEP TRAVEL</a></li>
          </ul>
        </li>
                    <li>
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("BDE_site_Cal");
        echo "\">Calendrier</a>
                        
                    </li>
                                        <li>
                        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("BDE_site_Cal");
        echo "\">Login</a>
                        
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
        // line 94
        $this->displayBlock('img', $context, $blocks);
        // line 95
        echo "                      
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    </headerr>
";
        
        $__internal_b634fd9d8e0d63c723ca42dd31fadf06b1ea9432eec048f8b050aa5a0124b8f4->leave($__internal_b634fd9d8e0d63c723ca42dd31fadf06b1ea9432eec048f8b050aa5a0124b8f4_prof);

    }

    // line 94
    public function block_img($context, array $blocks = array())
    {
        $__internal_b1968f802051d63ce0e94a823c17246bd17824fd4394b094415e0856b84b1a84 = $this->env->getExtension("native_profiler");
        $__internal_b1968f802051d63ce0e94a823c17246bd17824fd4394b094415e0856b84b1a84->enter($__internal_b1968f802051d63ce0e94a823c17246bd17824fd4394b094415e0856b84b1a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 95
        echo "  ";
        
        $__internal_b1968f802051d63ce0e94a823c17246bd17824fd4394b094415e0856b84b1a84->leave($__internal_b1968f802051d63ce0e94a823c17246bd17824fd4394b094415e0856b84b1a84_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a5d7b98521a220ee22fd8ea16de7e48084ebed75a0fade6baed3d98eaf96f16 = $this->env->getExtension("native_profiler");
        $__internal_3a5d7b98521a220ee22fd8ea16de7e48084ebed75a0fade6baed3d98eaf96f16->enter($__internal_3a5d7b98521a220ee22fd8ea16de7e48084ebed75a0fade6baed3d98eaf96f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "    ";
        
        $__internal_3a5d7b98521a220ee22fd8ea16de7e48084ebed75a0fade6baed3d98eaf96f16->leave($__internal_3a5d7b98521a220ee22fd8ea16de7e48084ebed75a0fade6baed3d98eaf96f16_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5949525412e7c6ce261b7c1445b204226967d68b707742f3906a2d808b9a481 = $this->env->getExtension("native_profiler");
        $__internal_a5949525412e7c6ce261b7c1445b204226967d68b707742f3906a2d808b9a481->enter($__internal_a5949525412e7c6ce261b7c1445b204226967d68b707742f3906a2d808b9a481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    <!-- jQuery -->

<script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->

<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a5949525412e7c6ce261b7c1445b204226967d68b707742f3906a2d808b9a481->leave($__internal_a5949525412e7c6ce261b7c1445b204226967d68b707742f3906a2d808b9a481_prof);

    }

    public function getTemplateName()
    {
        return "layoutSite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 149,  332 => 148,  328 => 147,  324 => 146,  320 => 145,  316 => 144,  311 => 142,  305 => 139,  301 => 137,  295 => 136,  288 => 106,  282 => 105,  275 => 95,  269 => 94,  254 => 95,  252 => 94,  231 => 76,  224 => 72,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  180 => 55,  174 => 52,  164 => 45,  150 => 33,  144 => 32,  135 => 29,  123 => 20,  117 => 16,  111 => 15,  100 => 12,  92 => 151,  90 => 136,  59 => 107,  57 => 105,  54 => 104,  52 => 32,  49 => 31,  47 => 15,  41 => 12,  28 => 1,);
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
/*                 <a class="navbar-brand" href="{{ path('BDE_site_Accueil') }}">Site du BDE de l'ISEP</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
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
/*                         <a href="{{ path('BDE_site_Cal') }}">Login</a>*/
/*                         */
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
