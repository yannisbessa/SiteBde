<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_445fdb6709e4e21fd265d32743a1add67e8c93f8592aea12caf43c2cf9abc102 extends Twig_Template
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
        $__internal_c09305335d78b6c1829f37d2ba71f7262fefc7e0bcbdd0e9ddbb048ea42c1261 = $this->env->getExtension("native_profiler");
        $__internal_c09305335d78b6c1829f37d2ba71f7262fefc7e0bcbdd0e9ddbb048ea42c1261->enter($__internal_c09305335d78b6c1829f37d2ba71f7262fefc7e0bcbdd0e9ddbb048ea42c1261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c09305335d78b6c1829f37d2ba71f7262fefc7e0bcbdd0e9ddbb048ea42c1261->leave($__internal_c09305335d78b6c1829f37d2ba71f7262fefc7e0bcbdd0e9ddbb048ea42c1261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($disabled): ?> disabled="disabled"<?php endif ?>*/
/* <?php if ($required): ?> required="required"<?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($k, array('placeholder', 'title'), true)): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
