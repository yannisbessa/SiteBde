<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3ebcafca0573da726dbf800fac6c36f04f24e66dcb566ce7b236cd3bc9da326c extends Twig_Template
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
        $__internal_23c7379957091738e07c50294151106348b20f1125f7b03c547d5df26f38a056 = $this->env->getExtension("native_profiler");
        $__internal_23c7379957091738e07c50294151106348b20f1125f7b03c547d5df26f38a056->enter($__internal_23c7379957091738e07c50294151106348b20f1125f7b03c547d5df26f38a056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23c7379957091738e07c50294151106348b20f1125f7b03c547d5df26f38a056->leave($__internal_23c7379957091738e07c50294151106348b20f1125f7b03c547d5df26f38a056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
