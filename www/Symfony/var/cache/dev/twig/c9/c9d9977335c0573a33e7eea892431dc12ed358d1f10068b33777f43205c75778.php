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
        $__internal_4024a30d502c0e2abcabfbeccc2528f1b236058f0dcf4f8fde128a7cd828bfb1 = $this->env->getExtension("native_profiler");
        $__internal_4024a30d502c0e2abcabfbeccc2528f1b236058f0dcf4f8fde128a7cd828bfb1->enter($__internal_4024a30d502c0e2abcabfbeccc2528f1b236058f0dcf4f8fde128a7cd828bfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4024a30d502c0e2abcabfbeccc2528f1b236058f0dcf4f8fde128a7cd828bfb1->leave($__internal_4024a30d502c0e2abcabfbeccc2528f1b236058f0dcf4f8fde128a7cd828bfb1_prof);

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
