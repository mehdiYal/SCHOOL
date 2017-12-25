<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b60bd4f3d6d89ef115fadd63c7b980b12e4227c1f1e5df49f1ebb66f55ab7a72 extends Twig_Template
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
        $__internal_a61884c0eef90d39dafe85478f34d5e1ab388eed2a3040d3a1973d6d0913d673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61884c0eef90d39dafe85478f34d5e1ab388eed2a3040d3a1973d6d0913d673->enter($__internal_a61884c0eef90d39dafe85478f34d5e1ab388eed2a3040d3a1973d6d0913d673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_af462d3e3b16d9677c8b9cd20fcd323bd7b3ab599a7b18dad9453a54e76feebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af462d3e3b16d9677c8b9cd20fcd323bd7b3ab599a7b18dad9453a54e76feebc->enter($__internal_af462d3e3b16d9677c8b9cd20fcd323bd7b3ab599a7b18dad9453a54e76feebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a61884c0eef90d39dafe85478f34d5e1ab388eed2a3040d3a1973d6d0913d673->leave($__internal_a61884c0eef90d39dafe85478f34d5e1ab388eed2a3040d3a1973d6d0913d673_prof);

        
        $__internal_af462d3e3b16d9677c8b9cd20fcd323bd7b3ab599a7b18dad9453a54e76feebc->leave($__internal_af462d3e3b16d9677c8b9cd20fcd323bd7b3ab599a7b18dad9453a54e76feebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
