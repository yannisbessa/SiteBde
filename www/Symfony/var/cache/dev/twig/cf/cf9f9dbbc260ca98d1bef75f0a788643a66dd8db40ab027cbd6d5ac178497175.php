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
        $__internal_533e5ffb325f229f004826020a39ddad0a16011fc5b35c18d92b7dd35504eb62 = $this->env->getExtension("native_profiler");
        $__internal_533e5ffb325f229f004826020a39ddad0a16011fc5b35c18d92b7dd35504eb62->enter($__internal_533e5ffb325f229f004826020a39ddad0a16011fc5b35c18d92b7dd35504eb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_533e5ffb325f229f004826020a39ddad0a16011fc5b35c18d92b7dd35504eb62->leave($__internal_533e5ffb325f229f004826020a39ddad0a16011fc5b35c18d92b7dd35504eb62_prof);

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
