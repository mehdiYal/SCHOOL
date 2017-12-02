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
        $__internal_1a8d57ca0df54d596f7ac9706f0f6f700ea18593cae2de800995df5b5eac6007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8d57ca0df54d596f7ac9706f0f6f700ea18593cae2de800995df5b5eac6007->enter($__internal_1a8d57ca0df54d596f7ac9706f0f6f700ea18593cae2de800995df5b5eac6007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_99916b73f1dfd054a2fbdcc01f7277b035a0975244266defb0932bed125eea1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99916b73f1dfd054a2fbdcc01f7277b035a0975244266defb0932bed125eea1a->enter($__internal_99916b73f1dfd054a2fbdcc01f7277b035a0975244266defb0932bed125eea1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1a8d57ca0df54d596f7ac9706f0f6f700ea18593cae2de800995df5b5eac6007->leave($__internal_1a8d57ca0df54d596f7ac9706f0f6f700ea18593cae2de800995df5b5eac6007_prof);

        
        $__internal_99916b73f1dfd054a2fbdcc01f7277b035a0975244266defb0932bed125eea1a->leave($__internal_99916b73f1dfd054a2fbdcc01f7277b035a0975244266defb0932bed125eea1a_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
