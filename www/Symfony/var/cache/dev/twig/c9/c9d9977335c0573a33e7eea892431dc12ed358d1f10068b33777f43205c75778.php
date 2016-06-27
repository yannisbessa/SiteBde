<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_68cdd3478978e014e3d330ef8d35f7a85aef2d27795cbf86385ed1036e387ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a232401deefb45253f39d086909bfc79c78437f1994cd68a68b4f202716281c = $this->env->getExtension("native_profiler");
        $__internal_1a232401deefb45253f39d086909bfc79c78437f1994cd68a68b4f202716281c->enter($__internal_1a232401deefb45253f39d086909bfc79c78437f1994cd68a68b4f202716281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a232401deefb45253f39d086909bfc79c78437f1994cd68a68b4f202716281c->leave($__internal_1a232401deefb45253f39d086909bfc79c78437f1994cd68a68b4f202716281c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
