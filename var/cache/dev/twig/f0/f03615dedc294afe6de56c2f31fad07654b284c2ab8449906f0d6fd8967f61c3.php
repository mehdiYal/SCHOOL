<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c9d25c808403cef6bce2417e9eda7a2e810adaf60f3b10003b96e7caff806fba extends Twig_Template
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
        $__internal_8ad5df807883c0db79d94fb8dc0781bd42e2b0020d3f8faf72ca5b4048415862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad5df807883c0db79d94fb8dc0781bd42e2b0020d3f8faf72ca5b4048415862->enter($__internal_8ad5df807883c0db79d94fb8dc0781bd42e2b0020d3f8faf72ca5b4048415862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fc8a5d572ea35aef47576e98c4984d84d031335dc1475e6c263da05a9b814267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8a5d572ea35aef47576e98c4984d84d031335dc1475e6c263da05a9b814267->enter($__internal_fc8a5d572ea35aef47576e98c4984d84d031335dc1475e6c263da05a9b814267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8ad5df807883c0db79d94fb8dc0781bd42e2b0020d3f8faf72ca5b4048415862->leave($__internal_8ad5df807883c0db79d94fb8dc0781bd42e2b0020d3f8faf72ca5b4048415862_prof);

        
        $__internal_fc8a5d572ea35aef47576e98c4984d84d031335dc1475e6c263da05a9b814267->leave($__internal_fc8a5d572ea35aef47576e98c4984d84d031335dc1475e6c263da05a9b814267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
