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
        $__internal_2b440b17263c09fff602d72c4b8675d245218e0a05a0852f3bde952866881ab3 = $this->env->getExtension("native_profiler");
        $__internal_2b440b17263c09fff602d72c4b8675d245218e0a05a0852f3bde952866881ab3->enter($__internal_2b440b17263c09fff602d72c4b8675d245218e0a05a0852f3bde952866881ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2b440b17263c09fff602d72c4b8675d245218e0a05a0852f3bde952866881ab3->leave($__internal_2b440b17263c09fff602d72c4b8675d245218e0a05a0852f3bde952866881ab3_prof);

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
