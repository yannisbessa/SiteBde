<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ce99c2af37808c026f8ab034cbe89f1f02e06c118bec19b87ccecf6ba8dda1fb extends Twig_Template
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
        $__internal_55792e5d121e051f6723830b91551cf839b56a7837e99095037205289fcd85c6 = $this->env->getExtension("native_profiler");
        $__internal_55792e5d121e051f6723830b91551cf839b56a7837e99095037205289fcd85c6->enter($__internal_55792e5d121e051f6723830b91551cf839b56a7837e99095037205289fcd85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_55792e5d121e051f6723830b91551cf839b56a7837e99095037205289fcd85c6->leave($__internal_55792e5d121e051f6723830b91551cf839b56a7837e99095037205289fcd85c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
