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
        $__internal_a4da666859cbd22b0f4d04881c05e00ea6aa7f984876a67adb4ab53ce410a4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4da666859cbd22b0f4d04881c05e00ea6aa7f984876a67adb4ab53ce410a4de->enter($__internal_a4da666859cbd22b0f4d04881c05e00ea6aa7f984876a67adb4ab53ce410a4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3769518b0fd6cabea0e74d5d2f0ccbfdf4a9ee8e4311dc8bce18649e4b4e8f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3769518b0fd6cabea0e74d5d2f0ccbfdf4a9ee8e4311dc8bce18649e4b4e8f54->enter($__internal_3769518b0fd6cabea0e74d5d2f0ccbfdf4a9ee8e4311dc8bce18649e4b4e8f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a4da666859cbd22b0f4d04881c05e00ea6aa7f984876a67adb4ab53ce410a4de->leave($__internal_a4da666859cbd22b0f4d04881c05e00ea6aa7f984876a67adb4ab53ce410a4de_prof);

        
        $__internal_3769518b0fd6cabea0e74d5d2f0ccbfdf4a9ee8e4311dc8bce18649e4b4e8f54->leave($__internal_3769518b0fd6cabea0e74d5d2f0ccbfdf4a9ee8e4311dc8bce18649e4b4e8f54_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
