<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dc8a8fcb5512d23956a71dbeec5f73a3d805652f98f12455d1a6e31c960a9917 extends Twig_Template
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
        $__internal_7fc3df100d7c4c175012a1773c281f6e5294af1b63e90233d6c5ef24a7f05a4d = $this->env->getExtension("native_profiler");
        $__internal_7fc3df100d7c4c175012a1773c281f6e5294af1b63e90233d6c5ef24a7f05a4d->enter($__internal_7fc3df100d7c4c175012a1773c281f6e5294af1b63e90233d6c5ef24a7f05a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7fc3df100d7c4c175012a1773c281f6e5294af1b63e90233d6c5ef24a7f05a4d->leave($__internal_7fc3df100d7c4c175012a1773c281f6e5294af1b63e90233d6c5ef24a7f05a4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
