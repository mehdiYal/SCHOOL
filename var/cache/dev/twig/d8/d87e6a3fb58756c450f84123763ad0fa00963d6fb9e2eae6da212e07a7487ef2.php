<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0920451a5c06ae0a5a8106318f7ac0c7587b9e97424e6bafae4f206eb86186b9 extends Twig_Template
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
        $__internal_8cee45c3479dc14e3e33a73f9558c239cf4baf87a65d816d535912ab423aa210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cee45c3479dc14e3e33a73f9558c239cf4baf87a65d816d535912ab423aa210->enter($__internal_8cee45c3479dc14e3e33a73f9558c239cf4baf87a65d816d535912ab423aa210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_01f64d14a339d2b7330c380c947d32d6f1620f651a1add55c76b00a9792dac22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f64d14a339d2b7330c380c947d32d6f1620f651a1add55c76b00a9792dac22->enter($__internal_01f64d14a339d2b7330c380c947d32d6f1620f651a1add55c76b00a9792dac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8cee45c3479dc14e3e33a73f9558c239cf4baf87a65d816d535912ab423aa210->leave($__internal_8cee45c3479dc14e3e33a73f9558c239cf4baf87a65d816d535912ab423aa210_prof);

        
        $__internal_01f64d14a339d2b7330c380c947d32d6f1620f651a1add55c76b00a9792dac22->leave($__internal_01f64d14a339d2b7330c380c947d32d6f1620f651a1add55c76b00a9792dac22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
