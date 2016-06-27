<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8e3363c8db0012df0bd947d82be4e3078eabb90c2de266209e371232a2f3cc7d extends Twig_Template
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
        $__internal_2b236df1f0053aae44b0d109beda88fe774f92a7ed607dd3347ce00dd04b1b90 = $this->env->getExtension("native_profiler");
        $__internal_2b236df1f0053aae44b0d109beda88fe774f92a7ed607dd3347ce00dd04b1b90->enter($__internal_2b236df1f0053aae44b0d109beda88fe774f92a7ed607dd3347ce00dd04b1b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2b236df1f0053aae44b0d109beda88fe774f92a7ed607dd3347ce00dd04b1b90->leave($__internal_2b236df1f0053aae44b0d109beda88fe774f92a7ed607dd3347ce00dd04b1b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
