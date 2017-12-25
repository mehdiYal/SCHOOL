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
        $__internal_c9249e54a7cce312ced4efbcc51ec522a51e2ca8b1d553629ad8460c43803cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9249e54a7cce312ced4efbcc51ec522a51e2ca8b1d553629ad8460c43803cff->enter($__internal_c9249e54a7cce312ced4efbcc51ec522a51e2ca8b1d553629ad8460c43803cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fe25d536142b9d5dc0d3c83a8a2d1f59495db509fa5d346987d9d4af97d0419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe25d536142b9d5dc0d3c83a8a2d1f59495db509fa5d346987d9d4af97d0419d->enter($__internal_fe25d536142b9d5dc0d3c83a8a2d1f59495db509fa5d346987d9d4af97d0419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c9249e54a7cce312ced4efbcc51ec522a51e2ca8b1d553629ad8460c43803cff->leave($__internal_c9249e54a7cce312ced4efbcc51ec522a51e2ca8b1d553629ad8460c43803cff_prof);

        
        $__internal_fe25d536142b9d5dc0d3c83a8a2d1f59495db509fa5d346987d9d4af97d0419d->leave($__internal_fe25d536142b9d5dc0d3c83a8a2d1f59495db509fa5d346987d9d4af97d0419d_prof);

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
