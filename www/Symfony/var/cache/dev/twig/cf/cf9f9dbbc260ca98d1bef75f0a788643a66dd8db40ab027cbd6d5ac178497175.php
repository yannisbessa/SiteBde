<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_80fa9d28a025d1bb430bfc06a0c15a733ce4d2b132824a09e63522fc8e5bd013 extends Twig_Template
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
        $__internal_3680e6444600f6bb3bc5d19fc9ff8aa076dba1368865cb7a8b2b1c402c492906 = $this->env->getExtension("native_profiler");
        $__internal_3680e6444600f6bb3bc5d19fc9ff8aa076dba1368865cb7a8b2b1c402c492906->enter($__internal_3680e6444600f6bb3bc5d19fc9ff8aa076dba1368865cb7a8b2b1c402c492906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3680e6444600f6bb3bc5d19fc9ff8aa076dba1368865cb7a8b2b1c402c492906->leave($__internal_3680e6444600f6bb3bc5d19fc9ff8aa076dba1368865cb7a8b2b1c402c492906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
