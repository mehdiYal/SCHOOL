<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2f7c02c0f60486cee67a939eb3a47e0dd5c8a67a8f09d864beacb84eb846a939 extends Twig_Template
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
        $__internal_a88ba45cd1361ac456a7df76e1fbef232abc4c9f821b9899189aca43d82d916b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88ba45cd1361ac456a7df76e1fbef232abc4c9f821b9899189aca43d82d916b->enter($__internal_a88ba45cd1361ac456a7df76e1fbef232abc4c9f821b9899189aca43d82d916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1714ea4f718ae84844d27a4355fd1d6d870caa9fe2f16c580964a5b876b99547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1714ea4f718ae84844d27a4355fd1d6d870caa9fe2f16c580964a5b876b99547->enter($__internal_1714ea4f718ae84844d27a4355fd1d6d870caa9fe2f16c580964a5b876b99547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a88ba45cd1361ac456a7df76e1fbef232abc4c9f821b9899189aca43d82d916b->leave($__internal_a88ba45cd1361ac456a7df76e1fbef232abc4c9f821b9899189aca43d82d916b_prof);

        
        $__internal_1714ea4f718ae84844d27a4355fd1d6d870caa9fe2f16c580964a5b876b99547->leave($__internal_1714ea4f718ae84844d27a4355fd1d6d870caa9fe2f16c580964a5b876b99547_prof);

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
