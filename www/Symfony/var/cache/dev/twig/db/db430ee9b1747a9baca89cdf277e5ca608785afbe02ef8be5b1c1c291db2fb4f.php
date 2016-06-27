<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dde227d245c04d715d50705afb0d19b8e6bacc4c720e1459d6cd8e5933d8d501 extends Twig_Template
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
        $__internal_c1d7fb3cd6cdfc3e009cf40ee25af0ca01981c1a13631b715bb1bde4e3f9eb42 = $this->env->getExtension("native_profiler");
        $__internal_c1d7fb3cd6cdfc3e009cf40ee25af0ca01981c1a13631b715bb1bde4e3f9eb42->enter($__internal_c1d7fb3cd6cdfc3e009cf40ee25af0ca01981c1a13631b715bb1bde4e3f9eb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c1d7fb3cd6cdfc3e009cf40ee25af0ca01981c1a13631b715bb1bde4e3f9eb42->leave($__internal_c1d7fb3cd6cdfc3e009cf40ee25af0ca01981c1a13631b715bb1bde4e3f9eb42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
