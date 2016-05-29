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
        $__internal_82fb183a5c938636343058ccddc441dcaf9ddee497e95da8458166bbe1373daa = $this->env->getExtension("native_profiler");
        $__internal_82fb183a5c938636343058ccddc441dcaf9ddee497e95da8458166bbe1373daa->enter($__internal_82fb183a5c938636343058ccddc441dcaf9ddee497e95da8458166bbe1373daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_82fb183a5c938636343058ccddc441dcaf9ddee497e95da8458166bbe1373daa->leave($__internal_82fb183a5c938636343058ccddc441dcaf9ddee497e95da8458166bbe1373daa_prof);

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
