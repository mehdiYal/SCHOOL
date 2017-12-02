<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f111532776c7ebfdfd3e5f59a521516b32c68bed34faea6dd165eb5da3984b0c extends Twig_Template
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
        $__internal_98d60b324db99c68224aa9b494c8d96c04c8121a49b3bc32594190585be74148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d60b324db99c68224aa9b494c8d96c04c8121a49b3bc32594190585be74148->enter($__internal_98d60b324db99c68224aa9b494c8d96c04c8121a49b3bc32594190585be74148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1e36a0d865136b4125a5f9f3c7ff1c5890ce6223b51d0b46d23db6074947dd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e36a0d865136b4125a5f9f3c7ff1c5890ce6223b51d0b46d23db6074947dd89->enter($__internal_1e36a0d865136b4125a5f9f3c7ff1c5890ce6223b51d0b46d23db6074947dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_98d60b324db99c68224aa9b494c8d96c04c8121a49b3bc32594190585be74148->leave($__internal_98d60b324db99c68224aa9b494c8d96c04c8121a49b3bc32594190585be74148_prof);

        
        $__internal_1e36a0d865136b4125a5f9f3c7ff1c5890ce6223b51d0b46d23db6074947dd89->leave($__internal_1e36a0d865136b4125a5f9f3c7ff1c5890ce6223b51d0b46d23db6074947dd89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
