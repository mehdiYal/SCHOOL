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
        $__internal_82a29bff3886bc75bb061ca5a7f060c44e5f1f0999019e1a78ae403f287735e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a29bff3886bc75bb061ca5a7f060c44e5f1f0999019e1a78ae403f287735e2->enter($__internal_82a29bff3886bc75bb061ca5a7f060c44e5f1f0999019e1a78ae403f287735e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_af7721db0d357d78f673bf639f9acbe6e6a3c559d772809ecfefd2c9c75ac6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7721db0d357d78f673bf639f9acbe6e6a3c559d772809ecfefd2c9c75ac6a9->enter($__internal_af7721db0d357d78f673bf639f9acbe6e6a3c559d772809ecfefd2c9c75ac6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_82a29bff3886bc75bb061ca5a7f060c44e5f1f0999019e1a78ae403f287735e2->leave($__internal_82a29bff3886bc75bb061ca5a7f060c44e5f1f0999019e1a78ae403f287735e2_prof);

        
        $__internal_af7721db0d357d78f673bf639f9acbe6e6a3c559d772809ecfefd2c9c75ac6a9->leave($__internal_af7721db0d357d78f673bf639f9acbe6e6a3c559d772809ecfefd2c9c75ac6a9_prof);

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
