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
        $__internal_fed883fa4dc546057ccd72ec3fd559f7194d0d469f138ad1e4cd50fcceeaf030 = $this->env->getExtension("native_profiler");
        $__internal_fed883fa4dc546057ccd72ec3fd559f7194d0d469f138ad1e4cd50fcceeaf030->enter($__internal_fed883fa4dc546057ccd72ec3fd559f7194d0d469f138ad1e4cd50fcceeaf030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fed883fa4dc546057ccd72ec3fd559f7194d0d469f138ad1e4cd50fcceeaf030->leave($__internal_fed883fa4dc546057ccd72ec3fd559f7194d0d469f138ad1e4cd50fcceeaf030_prof);

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
