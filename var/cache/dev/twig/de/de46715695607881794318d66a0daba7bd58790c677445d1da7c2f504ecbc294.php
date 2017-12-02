<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2da1501c0f2b2c086f90427005f19536bbee796fb0cc2f6f4dd1e63db3c3954 extends Twig_Template
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
        $__internal_e82b17fcd06100321687486d50b2d29dab11ac8e8ae47952b4d888d11141f506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82b17fcd06100321687486d50b2d29dab11ac8e8ae47952b4d888d11141f506->enter($__internal_e82b17fcd06100321687486d50b2d29dab11ac8e8ae47952b4d888d11141f506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_36a130a5eb1f791a13a416e862b59bbb1a54f3d50b78d5031bdf29a653029f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a130a5eb1f791a13a416e862b59bbb1a54f3d50b78d5031bdf29a653029f6d->enter($__internal_36a130a5eb1f791a13a416e862b59bbb1a54f3d50b78d5031bdf29a653029f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e82b17fcd06100321687486d50b2d29dab11ac8e8ae47952b4d888d11141f506->leave($__internal_e82b17fcd06100321687486d50b2d29dab11ac8e8ae47952b4d888d11141f506_prof);

        
        $__internal_36a130a5eb1f791a13a416e862b59bbb1a54f3d50b78d5031bdf29a653029f6d->leave($__internal_36a130a5eb1f791a13a416e862b59bbb1a54f3d50b78d5031bdf29a653029f6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
