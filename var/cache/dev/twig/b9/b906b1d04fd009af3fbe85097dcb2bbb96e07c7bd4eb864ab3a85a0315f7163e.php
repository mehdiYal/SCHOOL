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
        $__internal_f22fc37ccb9ef519affd416a6876aa497d0ad2145943b5924c746bc696d1b66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22fc37ccb9ef519affd416a6876aa497d0ad2145943b5924c746bc696d1b66b->enter($__internal_f22fc37ccb9ef519affd416a6876aa497d0ad2145943b5924c746bc696d1b66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e185bc422a102e032da9a84cae1368016bdd4e68df8aff1d2d5fec014a073b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e185bc422a102e032da9a84cae1368016bdd4e68df8aff1d2d5fec014a073b1->enter($__internal_3e185bc422a102e032da9a84cae1368016bdd4e68df8aff1d2d5fec014a073b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f22fc37ccb9ef519affd416a6876aa497d0ad2145943b5924c746bc696d1b66b->leave($__internal_f22fc37ccb9ef519affd416a6876aa497d0ad2145943b5924c746bc696d1b66b_prof);

        
        $__internal_3e185bc422a102e032da9a84cae1368016bdd4e68df8aff1d2d5fec014a073b1->leave($__internal_3e185bc422a102e032da9a84cae1368016bdd4e68df8aff1d2d5fec014a073b1_prof);

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
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
