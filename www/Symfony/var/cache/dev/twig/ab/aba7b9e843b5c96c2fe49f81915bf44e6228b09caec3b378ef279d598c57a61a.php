<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bf0b3abcf5213e1da0fd249afd73f759ad027f5f8008bc877d93c216cf3a7672 extends Twig_Template
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
        $__internal_e06e0d4a9b87c4f21178b329b9ee463292a2742b5ee937193142d0b7a827240c = $this->env->getExtension("native_profiler");
        $__internal_e06e0d4a9b87c4f21178b329b9ee463292a2742b5ee937193142d0b7a827240c->enter($__internal_e06e0d4a9b87c4f21178b329b9ee463292a2742b5ee937193142d0b7a827240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e06e0d4a9b87c4f21178b329b9ee463292a2742b5ee937193142d0b7a827240c->leave($__internal_e06e0d4a9b87c4f21178b329b9ee463292a2742b5ee937193142d0b7a827240c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
