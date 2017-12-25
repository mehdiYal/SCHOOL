<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_8b397294e984f515a20bc6d0126a1f42440c2d3542e5b40f3e8b44a8d39d933e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b397294e984f515a20bc6d0126a1f42440c2d3542e5b40f3e8b44a8d39d933e->enter($__internal_8b397294e984f515a20bc6d0126a1f42440c2d3542e5b40f3e8b44a8d39d933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1b170917664671203b16fea156b4c19aaf8b186ed58a2ae406a26919d9117cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b170917664671203b16fea156b4c19aaf8b186ed58a2ae406a26919d9117cb0->enter($__internal_1b170917664671203b16fea156b4c19aaf8b186ed58a2ae406a26919d9117cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8b397294e984f515a20bc6d0126a1f42440c2d3542e5b40f3e8b44a8d39d933e->leave($__internal_8b397294e984f515a20bc6d0126a1f42440c2d3542e5b40f3e8b44a8d39d933e_prof);

        
        $__internal_1b170917664671203b16fea156b4c19aaf8b186ed58a2ae406a26919d9117cb0->leave($__internal_1b170917664671203b16fea156b4c19aaf8b186ed58a2ae406a26919d9117cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
