<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_569bfa42f83a3fc9dbc756b389370117f342120c30918908f205afc00e96ac76 extends Twig_Template
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
        $__internal_d253c9d7453f2c305d1d0fdd01d353d9e41ac38ca62e92ba7ace0cf9aca67c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d253c9d7453f2c305d1d0fdd01d353d9e41ac38ca62e92ba7ace0cf9aca67c38->enter($__internal_d253c9d7453f2c305d1d0fdd01d353d9e41ac38ca62e92ba7ace0cf9aca67c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ff1965d8ef80b5c002718bd96eed4ea79d03ca0ddb940db131dc08245d0e5e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1965d8ef80b5c002718bd96eed4ea79d03ca0ddb940db131dc08245d0e5e5c->enter($__internal_ff1965d8ef80b5c002718bd96eed4ea79d03ca0ddb940db131dc08245d0e5e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d253c9d7453f2c305d1d0fdd01d353d9e41ac38ca62e92ba7ace0cf9aca67c38->leave($__internal_d253c9d7453f2c305d1d0fdd01d353d9e41ac38ca62e92ba7ace0cf9aca67c38_prof);

        
        $__internal_ff1965d8ef80b5c002718bd96eed4ea79d03ca0ddb940db131dc08245d0e5e5c->leave($__internal_ff1965d8ef80b5c002718bd96eed4ea79d03ca0ddb940db131dc08245d0e5e5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
