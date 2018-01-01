<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4d1cbbf6268775013ae2254d9bdacf255c5c8af0e10e699b9495eb0355ded038 extends Twig_Template
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
        $__internal_83778c8e4e64bbf905e02da6e87807275bfa5a592c0bef32e2e41264fd258a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83778c8e4e64bbf905e02da6e87807275bfa5a592c0bef32e2e41264fd258a69->enter($__internal_83778c8e4e64bbf905e02da6e87807275bfa5a592c0bef32e2e41264fd258a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2ae91f8e517c42c5b321f6b4136c867acec9528d301fce53941df98c320fc58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae91f8e517c42c5b321f6b4136c867acec9528d301fce53941df98c320fc58d->enter($__internal_2ae91f8e517c42c5b321f6b4136c867acec9528d301fce53941df98c320fc58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_83778c8e4e64bbf905e02da6e87807275bfa5a592c0bef32e2e41264fd258a69->leave($__internal_83778c8e4e64bbf905e02da6e87807275bfa5a592c0bef32e2e41264fd258a69_prof);

        
        $__internal_2ae91f8e517c42c5b321f6b4136c867acec9528d301fce53941df98c320fc58d->leave($__internal_2ae91f8e517c42c5b321f6b4136c867acec9528d301fce53941df98c320fc58d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
