<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b213daba395e92971b51ca0d9536f45cc18e9ab31b19c718d89fb34255f27f94 extends Twig_Template
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
        $__internal_10af510408cd6eda53d47c00377d1d55e0aa4752a45034661e2b6f5bf8ef35b8 = $this->env->getExtension("native_profiler");
        $__internal_10af510408cd6eda53d47c00377d1d55e0aa4752a45034661e2b6f5bf8ef35b8->enter($__internal_10af510408cd6eda53d47c00377d1d55e0aa4752a45034661e2b6f5bf8ef35b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_10af510408cd6eda53d47c00377d1d55e0aa4752a45034661e2b6f5bf8ef35b8->leave($__internal_10af510408cd6eda53d47c00377d1d55e0aa4752a45034661e2b6f5bf8ef35b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
