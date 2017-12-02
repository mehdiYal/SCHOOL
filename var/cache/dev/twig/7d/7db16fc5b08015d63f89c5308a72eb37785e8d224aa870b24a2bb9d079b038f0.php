<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_b29a8cd1b04212a4eac111cd01816a1baaf908773440792b00ea744ee4b2a889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29a8cd1b04212a4eac111cd01816a1baaf908773440792b00ea744ee4b2a889->enter($__internal_b29a8cd1b04212a4eac111cd01816a1baaf908773440792b00ea744ee4b2a889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_50762796326d786e4d3b677293a54f3c25bc3db491eeaacb29ebb8b91d797715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50762796326d786e4d3b677293a54f3c25bc3db491eeaacb29ebb8b91d797715->enter($__internal_50762796326d786e4d3b677293a54f3c25bc3db491eeaacb29ebb8b91d797715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b29a8cd1b04212a4eac111cd01816a1baaf908773440792b00ea744ee4b2a889->leave($__internal_b29a8cd1b04212a4eac111cd01816a1baaf908773440792b00ea744ee4b2a889_prof);

        
        $__internal_50762796326d786e4d3b677293a54f3c25bc3db491eeaacb29ebb8b91d797715->leave($__internal_50762796326d786e4d3b677293a54f3c25bc3db491eeaacb29ebb8b91d797715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
