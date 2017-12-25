<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f87e5405d7d16c88bba9b33e5dbe08f4edbe7c2e2d9ca1503489ff80a6374d9c extends Twig_Template
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
        $__internal_57c50c28b74a8f95d3f6aba6a905a2448ed3fc0a7f93051d23433a6942818f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c50c28b74a8f95d3f6aba6a905a2448ed3fc0a7f93051d23433a6942818f19->enter($__internal_57c50c28b74a8f95d3f6aba6a905a2448ed3fc0a7f93051d23433a6942818f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ae25bcd042d1a23573c7ee2faa2136711e4f17741172a71b7e7c001c1095dc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae25bcd042d1a23573c7ee2faa2136711e4f17741172a71b7e7c001c1095dc84->enter($__internal_ae25bcd042d1a23573c7ee2faa2136711e4f17741172a71b7e7c001c1095dc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_57c50c28b74a8f95d3f6aba6a905a2448ed3fc0a7f93051d23433a6942818f19->leave($__internal_57c50c28b74a8f95d3f6aba6a905a2448ed3fc0a7f93051d23433a6942818f19_prof);

        
        $__internal_ae25bcd042d1a23573c7ee2faa2136711e4f17741172a71b7e7c001c1095dc84->leave($__internal_ae25bcd042d1a23573c7ee2faa2136711e4f17741172a71b7e7c001c1095dc84_prof);

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
