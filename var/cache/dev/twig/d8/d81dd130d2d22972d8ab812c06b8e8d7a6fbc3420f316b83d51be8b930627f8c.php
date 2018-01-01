<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_51f621cbba57e89857f0e53e43e5fcd0bce6cc72e99f382762e03d229f766534 extends Twig_Template
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
        $__internal_a9d51244a03d3c29deaeeb64063b18b12d539288d48e2dac05dd5e9dd6bba232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d51244a03d3c29deaeeb64063b18b12d539288d48e2dac05dd5e9dd6bba232->enter($__internal_a9d51244a03d3c29deaeeb64063b18b12d539288d48e2dac05dd5e9dd6bba232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0c61d94b05890b9eaa52cfe1c96af0ad2ff80057061f9339da6f071db9dd0722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c61d94b05890b9eaa52cfe1c96af0ad2ff80057061f9339da6f071db9dd0722->enter($__internal_0c61d94b05890b9eaa52cfe1c96af0ad2ff80057061f9339da6f071db9dd0722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a9d51244a03d3c29deaeeb64063b18b12d539288d48e2dac05dd5e9dd6bba232->leave($__internal_a9d51244a03d3c29deaeeb64063b18b12d539288d48e2dac05dd5e9dd6bba232_prof);

        
        $__internal_0c61d94b05890b9eaa52cfe1c96af0ad2ff80057061f9339da6f071db9dd0722->leave($__internal_0c61d94b05890b9eaa52cfe1c96af0ad2ff80057061f9339da6f071db9dd0722_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
